<?php

namespace App\Http\Controllers\Admin;

use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Header\HeaderRequest;
use App\Http\Requests\Header\UpdateRequest;
use App\Repository\Repository;
use Route;

class HeaderController extends MasterController
{
    public function __construct() {
        self::navigate();
        $this->header_r = new Repository(new Header);
        $this->getCurrentRoute();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Headers";
        $headers = $this->header_r->get();
        return self::outputAdnView("admin.templates.headers.index", compact("headers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$title = "Headers";
        return self::outputAdnView("admin.templates.headers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeaderRequest $request)
    {
        $data = $request->except("_token");

        if ($request->hasFile("background"))
            $data["background"] = $this->storeBackground($request->file("background"), "headers");

        $data["active"] = (isset($request->active)) ? true : false;

        $this->header_r->create($data);
        return redirect()->route("admin.headers.index")->with("success", "Шапка сайта успешно создан!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$title = "Информация";
        $header = $this->header_r->getById($id);
        return self::outputAdnView("admin.templates.headers.show", compact("header"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$title = "Редактировать";
        $header = $this->header_r->getById($id);
        return self::outputAdnView("admin.templates.headers.edit", compact("header"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->except("_token", "_method");

        $header = $this->header_r->getById($id);

        if ($request->hasFile("background")) {
            if($header->background) {
                $header->deleteBackground("headers");
            }
            $data["background"] = $this->storeBackground($request->file("background"), "headers");
        } else {
            $data["background"] = $header->background;
        }

        $data["active"] = (isset($request->active)) ? true : false;

        $header->update($data);
        return redirect()->route("admin.headers.index")->with("success", "Шапка сайта успешно обновлен!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = $this->header_r->getById($id);

        if ($header) {
            // $header->deleteDirectory();
            $header->delete();
            return redirect()->route("admin.headers.index")->with("success", "Шапка сайта успешно Удален!");
        }
    }
}
