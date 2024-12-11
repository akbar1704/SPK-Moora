<?php

namespace App\Controllers;
use App\Models\vNormalisasiModel;

class vNormalisasiController extends BaseController
{
    public function viewNormalisasi()
    {
        $model = new vNormalisasiModel();
        $data['normalisasi'] = $model->findAll();

        echo view('adminHeader');
        echo view('adminNavbar');
        echo view('adminSidebar');
        echo view('viewNormalisasi', $data);
        echo view('adminFooter');
    }
}