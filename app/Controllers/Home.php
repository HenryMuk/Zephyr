<?php

namespace App\Controllers;
use App\Models\PromotionModel;
use App\Models\EtudiantModel;


class Home extends BaseController
{
    public function index()
    {
       



        return view("acceuil");
    }

    public function acceuil()
    {
        $model_promotion = new PromotionModel();
        $model_etudiant = new EtudiantModel();
        $donnees ['total_promotions'] = count($model_promotion->findAll());
        $donnees ['total_etudiants'] = count($model_etudiant->findAll());
        return view("acceuil", $donnees);
    }

    public function etudiant()
    {
        $model_etudiant = new EtudiantModel();
        $donnees ['etudiants'] = $model_etudiant->findAll();
        return view("etudiant", $donnees);
    }

    public function promotion()
    {
        $model_promotion = new PromotionModel();
        $donnees ['promotions'] = $model_promotion->findAll();
        return view("promotion", $donnees);
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

    public function modifier_promotion($id = null)
    {
        $model_promotion = new PromotionModel();
        if($id != null)
        {
            $donnees ['la_promotion'] = $model_promotion->where(['id' =>$id])->first();
            $donnees ['promotions'] = $model_promotion->findAll();
            return view("promotion", $donnees);
        }
         
    }

    public function enregistrer_modification_promotion($id = null)
    {
        if($id != null)
        {
        $intitule = $this->request->getVar('nom');
        $session = session();

        $model_promotion = new PromotionModel();
        $donnees = ['intitule' => $intitule];
        if($model_promotion->update($id, $donnees))
        {
            
            $session->setFlashdata('success_update', 'Ok');
            return redirect()->to(site_url('Home/promotion'));
        }
        else
        {
            $session->setFlashdata('error_update', 'No');
            return redirect()->to(site_url('Home/promotion'));
        }
    }
    }

    public function supprimer_promotion($id = null)
    {
        $session = session();
        if($id != null)
        {
            $model_promotion = new PromotionModel();
            if($model_promotion->delete($id))
            {
                $session->setFlashdata('success_delete', 'Ok');
                return redirect()->to(site_url('Home/promotion'));
            }
            else
            {
                $session->setFlashdata('error_delete', 'No');
                return redirect()->to(site_url('Home/promotion'));
            }
        }
       else{

       }
    }



    












    public function ajout_etudiant()
    {
        $nom = $this->request->getVar('nom');
        $postnom = $this->request->getVar('postnom');
        $prenom = $this->request->getVar('prenom');
        $genre = $this->request->getVar('genre');
        $promotion = $this->request->getVar('promotion');
        $date_naissance = $this->request->getVar('date_naissance');
        $lieu_naissance = $this->request->getVar('lieu_naissance');

        $session = session();

        $model_etudiant = new EtudiantModel();

        
        $donnees = ['nom'=> $nom , 'postnom'=> $postnom , 'prenom'=> $prenom , 'genre'=> $genre , 'promotion'=> $promotion , 'date_naissance'=> $date_naissance , 'lieu_naissance'=> $lieu_naissance];
        

        
        if($id = $model_etudiant->insert($donnees))
        {
            
            $session->setFlashdata('success', 'Ok');
            return redirect()->to(site_url('Home/etudiant'));
        }
        else
        {
            $session->setFlashdata('error', 'No');
            return redirect()->to(site_url('Home/etudiant'));
        }
    }

    public function modifier_etudiant($id = null)
    {
        $model_etudiant = new EtudiantModel();
        if($id != null)
        {
            $donnees ['l_etudiant'] = $model_etudiant->where(['id' =>$id])->first();
            $donnees ['etudiants'] = $model_etudiant->findAll();
            return view("etudiant", $donnees);
        }
         
    }

    public function enregistrer_modification_etudiant($id = null)
    {
        if($id != null)
        {
        $nom = $this->request->getVar('nom');
       
        $session = session();

        $model_etudiant = new EtudiantModel();
        $donnees = ['nom' => $nom];
        

        if($model_etudiant->update($id, $donnees))
        {
            
            $session->setFlashdata('success_update', 'Ok');
            return redirect()->to(site_url('Home/etudiant'));
        }
        else
        {
            $session->setFlashdata('error_update', 'No');
            return redirect()->to(site_url('Home/etudiant'));
        }
    }
    }

    public function supprimer_etudiant($id = null)
    {
        $session = session();
        if($id != null)
        {
            $model_etudiant = new EtudiantModel();
            if($model_etudiant->delete($id))
            {
                $session->setFlashdata('success_delete', 'Ok');
                return redirect()->to(site_url('Home/etudiant'));
            }
            else
            {
                $session->setFlashdata('error_delete', 'No');
                return redirect()->to(site_url('Home/etudiant'));
            }
        }
       else{

       }
    }

    
    


    
}
