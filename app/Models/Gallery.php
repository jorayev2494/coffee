<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

class Gallery extends Model
{

    protected $fillable = ["image", "active"];

    /**
     * Получить Фоновый изображению по умолчание
     *
     * @return void
     */
    public function defaultImage()
    {
        $result = asset("coffee") . "/galleries/images/default/" . $this->id . "_" . $this->size . ".jpg";
        return $result;
    }

    /**
     * Получить Фоновый изображению
     *
     * @return void
     */
    public function getImage(string $directive = "gallery")
    {
        if ($this->background)
            return $result = asset("coffee") . "/" . $directive . "/images/" . $this->image;
        else
            return $this->defaultImage();
    }

    /**
     * Загрузить фоновый изображение
     *
     * @param [type] $file
     * @param string $directive
     * @return void
     */
    public function storeImage($file, string $directive = "gallery")
    {
        $imageName     =   $file->getClientOriginalName();
        $file->move(public_path("coffee/" . $directive . "/images/"), $imageName);
        return $imageName;
    }

    /**
     * Удалить Фоновый изображению
     *
     * @return void
     */
    public function deleteImage(string $directive = "gallery")
    {
        $pathImage = public_path("coffee") . "/" . $directive . "/images/" . $this->image;
        $delete = File::delete($pathImage);
        return $delete;
    }

    /**
     * Удалить директория Шапку (Header) со всеми эго файлами
     *
     * @return void
     */
    public function deleteDirectory(string $directive = "gallery")
    {
        $directory = public_path("coffee") . $directive . "/images/" . $this->image;
        return File::deleteDirectory($directory);
    }
}
