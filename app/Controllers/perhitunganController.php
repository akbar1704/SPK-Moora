<?php

namespace App\Controllers;
use App\Models\perhitunganModel;
use App\Models\alternatifModel;
use App\Models\kriteriaModel;

class perhitunganController extends BaseController
{
    public function viewPerhitungan()
    {
        $perhitunganModel = new perhitunganModel();
        $alternatifModel = new alternatifModel();
        $kriteriaModel = new kriteriaModel();

        $data['perhitungan'] = $perhitunganModel->findAll();
        $data['alternatif'] = $alternatifModel->findAll();
        $data['kriteria'] = $kriteriaModel->findAll();

        echo View('adminHeader');
        echo View('adminNavbar');
        echo view("adminSidebar");
        echo view('viewPerhitungan', $data);
        echo View('adminFooter');
    }

    public function createPerhitungan()
    {
        $model = new perhitunganModel();
        $id_alternatif = $this->request->getPost('id_alternatif');
        $id_kriteria = $this->request->getPost('id_kriteria');
        $value = $this->request->getPost('value');
        $data = [
            'id_alternatif' => $id_alternatif,
            'id_kriteria' => $id_kriteria,
            'value' => $value
        ];
        $model->createPerhitungan($data);

        return redirect()->to('perhitunganController/viewPerhitungan');
    }

    public function updatePerhitungan($id)
    {
        $model = new perhitunganModel();
        // Get data from request
        $id_alternatif = $this->request->getPost('id_alternatif');
        $id_kriteria = $this->request->getPost('id_kriteria');
        $value = $this->request->getPost('value');
        $data = [
            'id_alternatif' => $id_alternatif,
            'id_kriteria' => $id_kriteria,
            'value' => $value
        ];

        $model->updatePerhitungan($id, $data);

        return redirect()->to('perhitunganController/viewPerhitungan');
    }

    public function deletePerhitungan($id)
    {
        $model = new perhitunganModel();
        $model->deletePerhitungan($id);

        return redirect()->to('perhitunganController/viewPerhitungan');
    }
}