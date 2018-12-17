<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\Repository;
use App\Models\Navigate;

class IndexController extends MasterController
{
    public function __construct() {
        self::navigate();
    }

    public function dashboard() {
        self::$title = "Test";
        return self::outputAdnView("admin.templates.dashboard");
    }
}
