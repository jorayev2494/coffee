<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

class Product extends Model
{
    protected $fillable = ["title", "star", "description", "active", "icon", "active"];

    /**
    * Получить Фоновый изображению по умолчание
    *
    * @return void
    */
    public function defaultIcon()
    {
        $result = asset("coffee") . "/products/icons/default/default.png";
        return $result;
    }

    /**
     * Получить Фоновый изображению
     *
     * @return void
     */
    public function getIcon()
    {
        if ($this->icon)
            return $result = asset("coffee") . "/products/icons/" . $this->icon;
        else
            return $this->defaultIcon();
    }

    /**
     * Удалить Фоновый изображению
     *
     * @return void
     */
    public function deleteIcon()
    {
        $pathIcon = public_path("coffee") . "/products/icons/" . $this->icon;
        $delete = File::delete($pathIcon);
        return $delete;
    }

    /**
     * Удалить директория Шапку (Header) со всеми эго файлами
     *
     * @return void
     */
    // public function deleteDirective()
    // {
    //     $directory = public_path("coffee") . "/products/icons/";
    //     return File::deleteDirectory($directory);
    // }

}
