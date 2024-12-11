<?php

namespace App\Controllers;
use App\Models\AlternatifModel;

class alternatifController extends BaseController
{
    public function viewAlternatif()
    {
        $model = new AlternatifModel();
        $data['alternatif'] = $model->findAll();

        echo View('adminHeader');
        echo View('adminNavbar');
        echo view("adminSidebar");
        echo view('viewAlternatif', $data);
        echo View('adminFooter');
    }
    public function createAlternatif()
    {
        $model = new AlternatifModel();
        // Ambil data dari request
        $id_alternatif = $this->request->getPost('id_alternatif');
        $nama_alternatif = $this->request->getPost('nama_alternatif');
        $data = [
            'id_alternatif' => $id_alternatif,
            'nama_alternatif' => $nama_alternatif
        ];

        $model->createAlternatif($data);

        return redirect()->to('alternatifController/viewAlternatif');
    }

    public function updateAlternatif($id)
    {
        $model = new AlternatifModel();
        // Ambil data dari request
        $id_alternatif = $this->request->getPost('id_alternatif');
        $nama_alternatif = $this->request->getPost('nama_alternatif');
        $data = [
            'id_alternatif' => $id_alternatif,
            'nama_alternatif' => $nama_alternatif
        ];

        $model->updateAlternatif($id, $data);

        return redirect()->to('alternatifController/viewAlternatif');
    }

    public function deleteAlternatif($id)
    {
        $model = new AlternatifModel();
        $model->deleteAlternatif($id);

        return redirect()->to('alternatifController/viewAlternatif');
    }
}