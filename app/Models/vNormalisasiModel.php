<?php

namespace App\Models;
use CodeIgniter\Model;

class vNormalisasiModel extends Model
{
    protected $table = 'view_normalisasi';
    protected $primaryKey = 'id_alternatif';
    protected $allowedFields = [
        'id_alternatif',
        'norm_C1',
        'norm_C2',
        'norm_C3',
        'norm_C4',
        'norm_C5'
    ];

    // Read all records
    public function getAllNormalisasi()
    {
        return $this->findAll();
    }
}