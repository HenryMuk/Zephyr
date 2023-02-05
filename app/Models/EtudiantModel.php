<?php

namespace App\Models;

use CodeIgniter\Model;

class etudiantModel extends Model
{
    protected $table      = 'etudiant';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nom' , 'postnom' , 'prenom' , 'genre' , 'promotion' , 'date_naissance' , 'lieu_naissance'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'date_creation';
    protected $updatedField  = 'date_modification';
    protected $deletedField  = 'date_suppression';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
}