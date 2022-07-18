<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'barang' =>  $this->modelbarang->getBarang(),
        ];

        return view('data_barang', $data);
    }

    public function tambahData()
    {
        $name = $this->request->getPost('name');
        $qty = $this->request->getPost('qty');
        $price = $this->request->getPost('price');

        $data = [
            'name'        => $name,
            'qty'       => $qty,
            'price'       => $price,
        ];

        $this->modelbarang->save($data);
        session()->setFlashdata('success', 'Tambah <b>' . $name . '</b> berhasil.');
        return redirect()->to('/');
    }
}
