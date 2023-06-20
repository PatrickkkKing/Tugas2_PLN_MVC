<?php

namespace App\Controllers;

use App\Core\Controller;

class Produk extends Controller
{

    public object $model;

    public function __construct()
    {

        $this->model = new \App\Models\Produk();
    }

    public function index()
    {

        $data['rows'] = $this->model->tampil();
        $this->dashboard('produk/index', $data);
    }

    public function input()
    {
        $this->dashboard('produk/input');
    }

    public function simpan()
    {
        $this->model->simpan();
        header('location:' . URL . '/produk');
    }

    public function edit($id)
    {
        $data = $this->model->edit($id);
        $this->dashboard('produk/edit', $data);
    }

    public function update()
    {
        $this->model->update();
        header('location:' . URL . '/produk');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location:' . URL . '/produk');
    }
}