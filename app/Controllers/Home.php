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



    public function ajout_promotion()
    {
        $intitule = $this->request->getVar('nom');
        $session = session();

        $model_promotion = new PromotionModel();
        $donnees = ['intitule' => $intitule];
        if($id = $model_promotion->insert($donnees))
        {
            
            $session->setFlashdata('success', 'Ok');
            return redirect()->to(site_url('Home/promotion'));
        }
        else
        {
            $session->setFlashdata('error', 'No');
            return redirect()->to(site_url('Home/promotion'));
        }
    }



    
}
