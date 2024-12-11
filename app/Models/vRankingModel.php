<?php

namespace App\Models;
use CodeIgniter\Model;

class vRankingModel extends Model
{
    protected $table = 'view_ranking';
    protected $primaryKey = 'id_alternatif';
    protected $allowedFields = [
        'id_alternatif',
        'nama_alternatif',
        'nilai_optimasi',
        'ranking'
    ];

    // Read all records
    public function getAllRanking()
    {
        return $this->findAll();
    }

    // Get top ranking
    public function getTopRanking()
    {
        $query = $this->db->query("
            SELECT `vo`.`id_alternatif` AS `id_alternatif`,
                   `alt`.`nama_alternatif` AS `nama_alternatif`,
                   `vo`.`nilai_optimasi` AS `nilai_optimasi`,
                   rank() OVER (ORDER BY `vo`.`nilai_optimasi` DESC) AS `ranking`
            FROM `view_optimasi` `vo`
            JOIN `alternatif` `alt` ON `vo`.`id_alternatif` = `alt`.`id_alternatif`
            ORDER BY `vo`.`nilai_optimasi` DESC
            LIMIT 1
        ");
        return $query->getRowArray();
    }
}