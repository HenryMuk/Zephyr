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

    public function acceuil()
    {
        return view("acceuil");
    }

    public function profile()
    {
        return view("profile");
    }

    public function blank()
    {
        return view("blank");
    }

    public function fontawesome()
    {
        return view("fontawesome");
    }

    public function basic_table()
    {
        return view("basic_table");
    }

    public function map_google()
    {
        return view("map_google");
    }

    public function erreur()
    {
        return view("erreur");
    }
}
