<?php

namespace App\Models;
use CodeIgniter\Model;

class vOptimasiModel extends Model
{
    protected $table = 'view_optimasi';
    protected $primaryKey = 'id_alternatif';
    protected $allowedFields = [
        'id_alternatif',
        'nilai_max',
        'nilai_min',
        'nilai_optimasi'
    ];

    // Read all records
    public function getAllOptimasi()
    {
        return $this->findAll();
    }
}