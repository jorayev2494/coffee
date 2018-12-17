<?php

namespace App\Http\Controllers\Admin;

use App\Models\Progress;
use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Http\Requests\Progress\ProgressRequest;
use App\Http\Requests\Progress\UpdateRequest;


class ProgressController extends MasterController
{

    public function __construct() {
        self::navigate();
        $this->progress_r = new Repository(new Progress);
        $this->getCurrentRoute();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Прогресс";
        $progresses = $this->progress_r->get();
        return self::outputAdnView("admin.templates.progresses.index", compact("progresses"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$title = "Добавить прогресс";
        return self::outputAdnView("admin.templates.progresses.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProgressRequest $request)
    {
        $data = $request->except("_token");
        $data["active"] = $request->active ? true : false;
        $this->progress_r->create($data);
        return redirect()->route("admin.progresses.index")->with("success", "Прогресс успешно создан");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$title = "Информация о прогрессе";
        $progress = $this->progress_r->getById($id);
        return self::outputAdnView("admin.templates.progresses.show", compact("progress"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$title = "Обновить прогрессе";
        $progress = $this->progress_r->getById($id);
        return self::outputAdnView("admin.templates.progresses.edit", compact("progress"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(ProgressRequest $request, $id)
    {
        $data = $request->except("_token");
        $data["active"] = $request->active ? true : false;
        $progress = $this->progress_r->getById($id)->update($data);
        return redirect()->route("admin.progresses.index")->with("success", "Прогресс успешно создан");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $progress = $this->progress_r->getById($id)->delete();
        return redirect()->route("admin.progresses.index")->with("success", "Прогресс успешно Удален");
    }
}
