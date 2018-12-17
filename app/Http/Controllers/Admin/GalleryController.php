<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Http\Requests\Gallery\UpdateRequest;

class GalleryController extends MasterController
{

    public function __construct() {
        self::navigate();
        $this->gallery_r = new Repository(new Gallery);
        $this->getCurrentRoute();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Галерея";
        $galleries = $this->gallery_r->get();
        return self::outputAdnView("admin.templates.galleries.index", compact("galleries"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     self::$title = "Добавить изображение в галерею";
    //     return self::outputAdnView("admin.templates.galleries.create");

    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     echo __METHOD__;
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$title = "Информация";
        $gallery = $this->gallery_r->getById($id);
        return self::outputAdnView("admin.templates.galleries.show", compact("gallery"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$title = "Обновить Изображению";
        $gallery = $this->gallery_r->getById($id);
        return self::outputAdnView("admin.templates.galleries.edit", compact("gallery"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->except("_method", "_token");
        // $request->validate($data, ["image" => "dimensions:width=1920,height=920"]);
        // dd($data);
        $gallery = $this->gallery_r->getById($id);

        if ($request->hasFile("image")) {
            if($gallery->image) {
                // dd($gallery);
                $gallery->deleteImage();
            }
            $data["image"] = $gallery->storeImage($request->file("image"));
        } else {
            $data["image"] = $gallery->image;
        }

        $data["active"] = $request->active ? true : false;
        $gallery->update($data);
        return redirect()->route("admin.galleries.index")->with("success", "Изображение успешно обновлен");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $gallery = $this->gallery_r->getById($id)->delete();
    //     return redirect()->route("admin.galleries.index")->with("success", "Изображение успешно Удален");
    // }
}
