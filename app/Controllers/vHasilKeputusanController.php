<?php

namespace App\Controllers;
use App\Models\vRankingModel;

class vHasilKeputusanController extends BaseController
{
    public function viewHasilKeputusan()
    {
        $model = new vRankingModel();
        $data['TopRanking'] = $model->getTopRanking();

        echo view('adminHeader');
        echo view('adminNavbar');
        echo view('adminSidebar');
        echo view('viewHasilKeputusan', $data);
        echo view('adminFooter');
    }
}