<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\Repository;
use App\Models\AdminNavigate;
use Illuminate\Support\Arr;
use Route;
use View;

class MasterController extends Controller
{

    protected static $admin_navigate_r;
    protected $header_r;
    protected $navigate_r;
    protected $information_r;
    protected $coffee_r;
    protected $gallery_r;
    protected $product_r;
    protected $progress_r;
    protected $contact_r;
    protected $social_r;
    protected $footer_r;


    protected static $title;
    protected $template;
    protected static $vars = array();

    /**
     * Навигация Админ панелям
     *
     * @return void
     */
    protected static function navigate() {
        self::$admin_navigate_r = new Repository(new AdminNavigate);
        $navigations = self::$admin_navigate_r->get();
        self::$vars = Arr::add(self::$vars, "navigations", $navigations);
    }

    /**
     * Вывод Интерфейс пользователя
     *
     * @param string $nameTemplate
     * @param array $dataName
     * @param boolean $data
     * @return void
     */
    public function outputView(string $nameTemplate, array $dataName = null, $data = false)
    {
        return $this->outputAdnView($nameTemplate, $dataName, $data);
    }

    /**
     * Вывод Вид Администратора
     *
     * @param string $nameTemplate
     * @param array $dataName
     * @param boolean $data
     * @return void
     */
    protected static function outputAdnView(string $nameTemplate, array $dataName = null, $data = false) {

        self::$vars = Arr::add(self::$vars, "title", self::$title);

        if ($dataName) {
            if (is_array($dataName)) {
                foreach ($dataName as $key => $name) {
                    self::$vars += $dataName;
                }
            } else {
                self::$vars = Arr::add(self::$vars, $dataName, $data);
            }
        }

        return View::make($nameTemplate, self::$vars);
    }


    /**
     * Получить текущий маршрут
     *
     * @return void
     */
    protected function getCurrentRoute() {
        foreach (self::$admin_navigate_r->get() as $key => $navigate) {
            if (str_contains(Route::currentRouteName(), $navigate->slug)) {
                self::$vars = Arr::add(self::$vars, "infoCurrentRoute", $navigate->only("title", "slug", "icon"));
            }
        }
    }


    /**
     * Загрузить фоновый изображение
     *
     * @param [type] $file
     * @param string $directive
     * @return void
     */
    public function storeBackground($file, string $directive)
    {
        $backgroundName     =   $file->getClientOriginalName();
        $file->move(public_path("coffee/" . $directive . "/background_img/"), $backgroundName);
        return $backgroundName;
    }

    /**
     * Загрузить иконку для Продуктов
     *
     * @param [type] $file
     * @param string $directive
     * @return void
     */
    public function storeIcon($file)
    {
        $iconName   =   $file->getClientOriginalName();
        $file->move(public_path("coffee/products/icons"), $iconName);
        return $iconName;
    }


}
