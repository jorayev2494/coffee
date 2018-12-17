<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Http\Requests\Information\InformationRequest;

class InformationController extends MasterController
{

    public function __construct() {
        self::navigate();
        $this->information_r = new Repository(new Information);
        $this->getCurrentRoute();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Информация";
        $informations = $this->information_r->get();
        return self::outputAdnView("admin.templates.informations.index", compact("informations"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$title = "Создать";
        return self::outputAdnView("admin.templates.informations.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformationRequest $request)
    {
        $data = $request->except("_token");
        $data["active"] = $request->active ? true : false;
        $this->information_r->create($data);
        return redirect()->route("admin.informations.index")->with("success", "Информация успешно создан");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$title = "Информация";
        $information = $this->information_r->getById($id);
        return self::outputAdnView("admin.templates.informations.show", compact("information"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$title = "Редактировать";
        $information = $this->information_r->getById($id);
        return self::outputAdnView("admin.templates.informations.edit", compact("information"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(InformationRequest $request, $id)
    {
        $data = $request->except("_token");
        $information = $this->information_r->getById($id);
        $data["active"] = $request->active ? true : false;
        $information->update($data);
        return redirect()->route("admin.informations.index")->with("success", "Информация успешно обновлен");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information = $this->information_r->getById($id)->delete();
        return redirect()->route("admin.informations.index")->with("success", "Информация успешно Удален");
    }
}
