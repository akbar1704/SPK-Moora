<?php

namespace App\Models;
use CodeIgniter\Model;

class alternatifModel extends Model
{
    protected $table = 'alternatif';
    protected $primaryKey = 'id_alternatif';
    protected $allowedFields = [
        'id_alternatif',
        'nama_alternatif'
    ];

    // Read all records
    public function getAllAlternatif()
    {
        return $this->findAll();
    }
    public function createAlternatif($data)
    {
        return $this->insert($data);
    }
    public function updateAlternatif($id, $data)
    {
        return $this->update($id, $data);
    }

    // Delete a record by ID
    public function deleteAlternatif($id)
    {
        return $this->delete($id);
    }
}