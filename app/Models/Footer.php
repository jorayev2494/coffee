<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

class Footer extends Model
{
    protected $fillable = ["about_us", "copyrite", "background", "active"];


    /**
     * Получить Фоновый изображению по умолчание
     *
     * @return void
     */
    public function defaultBackground()
    {
        $result = asset("coffee") . "/headers/background_img/default/default.jpg";
        return $result;
    }

    /**
     * Получить Фоновый изображению
     *
     * @return void
     */
    public function getBackground(string $directive = "footers")
    {
        if ($this->background)
            return $result = asset("coffee") . "/" . $directive . "/background_img/" . $this->background;
        else
            return $this->defaultBackground();
    }

    /**
     * Удалить Фоновый изображению
     *
     * @return void
     */
    public function deleteBackground(string $directive = "footers")
    {
        $pathBackground = public_path("coffee") . "/" . $directive . "/background_img/" . $this->background;
        $delete = File::delete($pathBackground);
        return $delete;
    }

    /**
     * Удалить директория Шапку (Header) со всеми эго файлами
     *
     * @return void
     */
    public function deleteDirectory(string $directive = "footers")
    {
        $directory = public_path("coffee") . $directive . "/background_img/" . $this->background;
        return File::deleteDirectory($directory);
    }
}
