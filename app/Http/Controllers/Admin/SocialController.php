<?php

namespace App\Http\Controllers\Admin;

use App\Models\Social;
use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Http\Requests\Socials\SocialRequest;


class SocialController extends MasterController
{

    public function __construct() {
        self::navigate();
        $this->social_r = new Repository(new Social);
        $this->getCurrentRoute();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Социальный сети";
        $socials = $this->social_r->get();
        return $this->outputAdnView("admin.templates.socials.index", compact("socials"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$title = "Создать соц сеть";
        return $this->outputAdnView("admin.templates.socials.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialRequest $request)
    {
        $data = $request->except("_token");
        $data["active"] = $request->active ? true : false;
        $this->social_r->create($data);
        return redirect()->route("admin.socials.index")->with("success", "Социальный сеть успешно создано");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$title = "Информация о социальном сете";
        $social = $this->social_r->getById($id);
        return $this->outputAdnView("admin.templates.socials.show", compact("social"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$title = "Редактировать социальный сете";
        $social = $this->social_r->getById($id);
        return $this->outputAdnView("admin.templates.socials.edit", compact("social"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(SocialRequest $request, $id)
    {
        $data = $request->except("_token", "_method");
        $social = $this->social_r->getById($id);
        $data["active"] = $request->active ? true : false;
        $social->update($data);
        return redirect()->route("admin.socials.index")->with("success", "Социальный сеть успешно обновлен");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = $this->social_r->getById($id)->delete();
        return redirect()->route("admin.socials.index")->with("success", "Социальный сеть успешно удален");
    }
}
