<?php

namespace App\Models;
use CodeIgniter\Model;

class perhitunganModel extends Model
{
    protected $table = 'perhitungan';
    protected $primaryKey = 'id_perhitungan';
    protected $allowedFields = [
        'id_perhitungan',
        'id_alternatif',
        'id_kriteria',
        'value'
    ];
    public function createPerhitungan($data)
    {
        return $this->insert($data);
    }
    // Read all records
    public function getAllPerhitungan()
    {
        return $this->findAll();
    }

    // Update a record by ID
    public function updatePerhitungan($id, $data)
    {
        return $this->update($id, $data);
    }

    // Delete a record by ID
    public function deletePerhitungan($id)
    {
        return $this->delete($id);
    }
}