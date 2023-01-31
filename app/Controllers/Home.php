<?php

namespace App\Controllers;
use App\Models\PromotionModel;


class Home extends BaseController
{
    public function index()
    {
       



        return view("acceuil");
    }

    public function acceuil()
    {
        return view('acceuil');
    }

    public function profile()
    {
        return view("profile");
    }

    public function blank()
    {
        return view("blank");
    }

    Public function fontawesome()
    {
        return view("fontawesome");
    }

    public function basic_table()
    {
        return view("basic-table");
    }

    public function map_google()
    {
        return view("map-google");
    }

    public function file_not_find()
    {
        return view("404");
    }
}
