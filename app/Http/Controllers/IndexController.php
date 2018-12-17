<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\MasterController;
use App\Repository\Repository;
use App\Models\Navigate;
use App\Models\Header;
use App\Models\Information;
use App\Models\Coffee;
use App\Models\Product;
use App\Models\Progress;
use App\Models\Gallery;
use App\Models\Contact;
use App\Models\Social;
use App\Models\Footer;
use Mail;

class IndexController extends MasterController
{

    public function __construct() {
        $this->navigate_r       = new Repository(new Navigate);
        $this->header_r         = new Repository(new Header);
        $this->information_r    = new Repository(new Information);
        $this->coffee_r         = new Repository(new Coffee);
        $this->product_r        = new Repository(new Product);
        $this->progress_r       = new Repository(new Progress);
        $this->gallery_r        = new Repository(new Gallery);
        $this->contact_r        = new Repository(new Contact);
        $this->social_r         = new Repository(new Social);
        $this->footer_r         = new Repository(new Footer);
    }

    public function index()
    {
        self::$title = "Coffee";
        // Получение Навигацию сайта
        $navigates = $this->navigate_r->getActive();

        // Получение Шапку сайта
        $header = $this->header_r->getFirst();

        // Получение О нас сайта
        $about = $this->information_r->getFirst();

        // Получение Кофи для сайта
        $coffees = $this->coffee_r->getActive();

        // Получение Показа продукты для сайта
        $products = $this->product_r->getActive();

        // Получить прогресс сайта
        $progresses = $this->progress_r->getActive();

        // Получить галерею сайта
        $galleries = $this->gallery_r->get();

        // Получить Социальные сети сайта
        $socials = $this->social_r->getActive();

        // Получить Подвал сайта
        $footer = $this->footer_r->getFirst();
        // dd($socials);

        return $this->outputView("index", compact("navigates", "header", "about", "coffees", "products", "progresses", "galleries", "socials", "footer"));

    }


    public function contact(Request $request)
    {
        $data = $request->except("_token");
        $data["active"] = true;
        $this->contact_r->create($data);
        return redirect()->route("index")->with("success", "Вы успешно подписались");
    }


}
