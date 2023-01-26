<?php

namespace App\Controllers;
use App\Models\PromotionModel;


class Home extends BaseController
{
    public function index()
    {
        $model_promotion = new PromotionModel();



        return view('acceuil');
    }
}
