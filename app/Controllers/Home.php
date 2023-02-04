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

    public function etudiant()
    {
        return view("etudiant");
    }

    public function promotion()
    {
        return view("promotion");
    }

    
}
