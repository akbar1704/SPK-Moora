<?php

namespace App\Controllers;
use App\Models\vRankingModel;

class vRankingController extends BaseController
{
    public function viewRanking()
    {
        $model = new vRankingModel();
        $data['Ranking'] = $model->findAll();

        echo view('adminHeader');
        echo view('adminNavbar');
        echo view('adminSidebar');
        echo view('viewRanking', $data);
        echo view('adminFooter');
    }

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