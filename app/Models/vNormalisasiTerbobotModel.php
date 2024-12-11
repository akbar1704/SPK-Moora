<?php

namespace App\Models;
use CodeIgniter\Model;

class vNormalisasiTerbobotModel extends Model
{
    protected $table = 'view_normalisasi_terbobot';
    protected $primaryKey = 'id_alternatif';
    protected $allowedFields = [
        'id_alternatif',
        'bobot_C1',
        'bobot_C2',
        'bobot_C3',
        'bobot_C4',
        'bobot_C5'
    ];

    // Read all records
    public function getAllNormalisasiTerbobot()
    {
        return $this->findAll();
    }
}