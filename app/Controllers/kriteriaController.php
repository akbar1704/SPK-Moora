<?php

namespace App\Controllers;
use App\Models\kriteriaModel;

class kriteriaController extends BaseController
{
    public function viewKriteria()
    {
        $model = new kriteriaModel();
        $data['kriteria'] = $model->findAll();

        echo View('adminHeader');
        echo View('adminNavbar');
        echo view("adminSidebar");
        echo view('viewKriteria', $data);
        echo View('adminFooter');
    }
    public function createKriteria()
    {
        $model = new kriteriaModel();
        // Get data from request
        $id_kriteria = $this->request->getPost('id_kriteria');
        $nama_kriteria = $this->request->getPost('nama_kriteria');
        $bobot = $this->request->getPost('bobot');
        $jenis_kriteria = $this->request->getPost('jenis_kriteria');
        $data = [
            'id_kriteria' => $id_kriteria,
            'nama_kriteria' => $nama_kriteria,
            'bobot' => $bobot,
            'jenis_kriteria' => $jenis_kriteria
        ];

        $model->createKriteria($data);

        return redirect()->to('kriteriaController/viewKriteria');
    }

    public function updateKriteria($id)
    {
        $model = new kriteriaModel();
        // Get data from request
        $id_kriteria = $this->request->getPost('id_kriteria');
        $nama_kriteria = $this->request->getPost('nama_kriteria');
        $bobot = $this->request->getPost('bobot');
        $jenis_kriteria = $this->request->getPost('jenis_kriteria');
        $data = [
            'id_kriteria' => $id_kriteria,
            'nama_kriteria' => $nama_kriteria,
            'bobot' => $bobot,
            'jenis_kriteria' => $jenis_kriteria
        ];

        $model->updateKriteria($id, $data);

        return redirect()->to('kriteriaController/viewKriteria');
    }

    public function deleteKriteria($id)
    {
        $model = new kriteriaModel();
        $model->deleteKriteria($id);

        return redirect()->to('kriteriaController/viewKriteria');
    }
}