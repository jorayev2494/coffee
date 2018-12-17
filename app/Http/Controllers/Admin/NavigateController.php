<?php

namespace App\Http\Controllers\Admin;

use App\Models\Navigate;
use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Http\Requests\Navigate\NavigateRequest;

class NavigateController extends MasterController
{

    public function __construct() {
        self::navigate();
        $this->navigate_r = new Repository(new Navigate);
        $this->getCurrentRoute();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Меню сайта";
        $navigates = $this->navigate_r->get();
        return self::outputAdnView("admin.templates.navigates.index", compact("navigates"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$title = "Создать меню сайта";
        return self::outputAdnView("admin.templates.navigates.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NavigateRequest $request)
    {
        $data = $request->except("_token");
        $data["active"] = isset($request->active) ? true : false;
        $this->navigate_r->create($data);
        return redirect()->route("admin.navigates.index")->with("success", "Навигации Успешно создан");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Navigate  $navigate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$title = "Информация о меню";
        $navigate = $this->navigate_r->getById($id);
        return self::outputAdnView("admin.templates.navigates.show", compact("navigate"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Navigate  $navigate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$title = "Редактировать меню сайта";
        $navigate = $this->navigate_r->getById($id);
        return self::outputAdnView("admin.templates.navigates.edit", compact("navigate"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Navigate  $navigate
     * @return \Illuminate\Http\Response
     */
    public function update(NavigateRequest $request, $id)
    {
        $data = $request->except("_token", "_method");
        $navigate = $this->navigate_r->getById($id);
        $data["active"] = isset($request->active) ? true : false;
        $navigate->update($data);
        return redirect()->route("admin.navigates.index")->with("success", "Меню сайта успешно обновлен");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Navigate  $navigate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $navigate = $this->navigate_r->getById($id)->delete();
        return redirect()->route("admin.navigates.index")->with("success", "Меню сайта успешно удалён");
    }
}
