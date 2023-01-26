<?php

namespace App\Controllers;
use App\Models\PromotionModel;


class Home extends BaseController
{
    public function index()
    {
        $model_promotion = new PromotionModel();


       $model_promotion -> delete(2);














        return view('test');
    }
}
