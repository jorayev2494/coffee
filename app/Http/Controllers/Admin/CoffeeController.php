<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coffee;
use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Http\Requests\Coffee\CoffeeRequest;

class CoffeeController extends MasterController
{
    public function __construct() {
        self::navigate();
        $this->coffee_r = new Repository(new Coffee);
        $this->getCurrentRoute();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Кофи";
        $coffees = $this->coffee_r->get();
        return self::outputAdnView("admin.templates.coffees.index", compact("coffees"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$title = "Создать Кофе";
        return self::outputAdnView("admin.templates.coffees.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoffeeRequest $request)
    {
        $data = $request->except("_token");
        $data["active"] = $request->active ? true : false;
        $this->coffee_r->create($data);
        return redirect()->route("admin.coffees.index")->with("success", "Кофия успешно создан");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$title = "Информация";
        $coffee = $this->coffee_r->getById($id);
        return self::outputAdnView("admin.templates.coffees.show", compact("coffee"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$title = "Редактировать";
        $coffee = $this->coffee_r->getById($id);
        return self::outputAdnView("admin.templates.coffees.edit", compact("coffee"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function update(CoffeeRequest $request, $id)
    {
        $data = $request->except("_token", "_method");
        $coffee = $this->coffee_r->getById($id);
        $data["active"] = $request->active ? true : false;
        $coffee->update($data);
        return redirect()->route("admin.coffees.index")->with("success", "Кофия успешно Обновлен");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coffee  $coffee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coffee = $this->coffee_r->getById($id)->delete();
        return redirect()->route("admin.coffees.index")->with("success", "Кофия успешно Удален");
    }
}
