<?php

namespace App\Models;
use CodeIgniter\Model;

class kriteriaModel extends Model
{
    protected $table = 'kriteria';
    protected $primaryKey = 'id_kriteria';
    protected $allowedFields = [
        'id_kriteria',
        'nama_kriteria',
        'bobot',
        'jenis_kriteria'
    ];

    // Read all records
    public function getAllKriteria()
    {
        return $this->findAll();
    }
    public function createKriteria($data)
    {
        return $this->insert($data);
    }

    // Update a record by ID
    public function updateKriteria($id, $data)
    {
        return $this->update($id, $data);
    }

    // Delete a record by ID
    public function deleteKriteria($id)
    {
        return $this->delete($id);
    }
}