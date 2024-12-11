<?php

namespace App\Controllers;
use App\Models\vOptimasiModel;

class vOptimasiController extends BaseController
{
    public function viewOptimasi()
    {
        $model = new vOptimasiModel();
        $data['Optimasi'] = $model->findAll();

        echo view('adminHeader');
        echo view('adminNavbar');
        echo view('adminSidebar');
        echo view('viewOptimasi', $data);
        echo view('adminFooter');
    }
}