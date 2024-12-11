<?php

namespace App\Controllers;
use App\Models\vNormalisasiTerbobotModel;

class vNormalisasiTerbobotController extends BaseController
{
    public function viewNormalisasiTerbobot()
    {
        $model = new vNormalisasiTerbobotModel();
        $data['normalisasiTerbobot'] = $model->findAll();

        echo view('adminHeader');
        echo view('adminNavbar');
        echo view('adminSidebar');
        echo view('viewNormalisasiTerbobot', $data);
        echo view('adminFooter');
    }
}