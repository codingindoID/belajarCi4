<?php

namespace App\Controllers;

use App\Models\ModelProduk;

class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new ModelProduk();
    }

    public function index()
    {
        // $model = new ModelProduk();
        $data = [
            'title'     => 'Home',
            'barang'    => $this->model->getProduct()
        ];
        return view('home/index', $data);
    }

    function tambahProduk()
    {
        $data = [
            'title'     => 'Form Tambah',
        ];
        return view('home/form', $data);
    }

    function simpanData()
    {
        // $model = new ModelProduk();
        $id  = $this->request->getPost('id-barang');
        $data = [
            'nama'      => strtoupper($this->request->getVar('nama')),
            'type'      => strtoupper($this->request->getVar('type')),
            'qty'       => $this->request->getVar('qty'),
            'harga'     => $this->request->getVar('harga'),
            'timestamp' => date('Y-m-d H:i:s')
        ];
        $cek = $this->model->simpanProduk($id, $data);
        return redirect()->to('home')->with($cek['kode'], $cek['msg']);
    }

    function getDataBarang($id)
    {
        // $model  = new ModelProduk();
        $data   = $this->model->getProduct($id)->getRow();
        echo json_encode($data);
    }

    function hapusBarang($id)
    {
        // $model  = new ModelProduk();
        $cek   = $this->model->hapusBarang($id);
        return redirect()->to('home')->with($cek['kode'], $cek['msg']);
    }
}
