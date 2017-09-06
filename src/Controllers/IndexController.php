<?php

namespace ArcherWong\LaraPackage\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use LaraPackage;

class IndexController extends BaseController
{
    public function index() {

        //$data = 'Hello World';
        $data = LaraPackage::getInfo();
        //可以直接使用创建的包里的视图，注意调用是两个冒号
        return view('LaraPackageView::welcome',['data' => $data]);
    }
}
