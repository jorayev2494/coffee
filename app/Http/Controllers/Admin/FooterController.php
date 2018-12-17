<?php

namespace App\Http\Controllers\Admin;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Footer\FooterRequest;
use App\Http\Requests\Footer\UpdateRequest;
use App\Repository\Repository;
use Route;

class FooterController extends MasterController
{
    public function __construct() {
        self::navigate();
        $this->footer_r = new Repository(new Footer);
        $this->getCurrentRoute();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Подвал сайта";
        $footers = $this->footer_r->get();
        return self::outputAdnView("admin.templates.footers.index", compact("footers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$title = "footer";
        return self::outputAdnView("admin.templates.footers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FooterRequest $request)
    {
        $data = $request->except("_token");

        if ($request->hasFile("background"))
            $data["background"] = $this->storeBackground($request->file("background"), "footers");

        // dd($data);
        $this->footer_r->create($data);
        return redirect()->route("admin.footers.index")->with("success", "Подвал сайта успешно создан!");
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
        $footer = $this->footer_r->getById($id);
        return self::outputAdnView("admin.templates.footers.show", compact("footer"));
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
        $footer = $this->footer_r->getById($id);
        return self::outputAdnView("admin.templates.footers.edit", compact("footer"));
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

        $footer = $this->footer_r->getById($id);

        if ($request->hasFile("background")) {
            if($footer->background) {
                $footer->deleteBackground("footers");
            }
            $data["background"] = $this->storeBackground($request->file("background"), "footers");
        } else {
            $data["background"] = $footer->background;
        }

        $data["active"] = (isset($request->active)) ? true : false;

        $footer->update($data);
        return redirect()->route("admin.footers.index")->with("success", "Подвал сайта успешно обновлен!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $footer = $this->footer_r->getById($id);

        if ($footer) {
            // $footer->deleteDirectory();
            $footer->delete();
            return redirect()->route("admin.footers.index")->with("success", "Подвал сайта успешно Удален!");
        }
    }
}
