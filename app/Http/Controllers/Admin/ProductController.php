<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Repository\Repository;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends MasterController
{

    public function __construct() {
        self::navigate();
        $this->product_r = new Repository(new Product);
        $this->getCurrentRoute();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        self::$title = "Продукты";
        $products = $this->product_r->get();
        return self::outputAdnView("admin.templates.products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        self::$title = "Создать Продукту";
        return self::outputAdnView("admin.templates.products.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->except("_token");

        if ($request->hasFile("icon"))
            $data["icon"] = $this->storeIcon($request->file("icon"));

        $data["active"] = $request->active ? true : false;
        $this->product_r->create($data);
        return redirect()->route("admin.products.index")->with("success", "Продукта успешно создан");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        self::$title = "Информация о продукте";
        $product = $this->product_r->getById($id);
        return self::outputAdnView("admin.templates.products.show", compact("product"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        self::$title = "Обновление о продукта";
        $product = $this->product_r->getById($id);
        return self::outputAdnView("admin.templates.products.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->except("_token", "_method");
        $product = $this->product_r->getById($id);

        if ($request->hasFile("icon")) {
            if($product->icon) {
                $product->deleteIcon();
            }
            $data["icon"] = $this->storeIcon($request->file("icon"));
        } else {
            $data["icon"] = $product->icon;
        }

        $data["active"] = (isset($request->active)) ? true : false;

        $product->update($data);
        return redirect()->route("admin.products.index")->with("success", "Продукта успешно обновлен!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->product_r->getById($id)->delete();
        return redirect()->route("admin.products.index")->with("success", "Продукта сайта успешно Удален!");
    }
}
