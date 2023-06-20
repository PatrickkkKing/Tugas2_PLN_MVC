<?php

namespace App\Controllers;

use App\Core\Controller;

class Pelanggan extends Controller
{

	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Pelanggan();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('pelanggan/index', $data);
	}

	public function input()
	{
		$this->dashboard('pelanggan/input');
	}

	public function simpan()
	{
		$this->model->simpan();
		header('location:' . URL . '/pelanggan');
	}

	public function edit($id)
	{
		$data = $this->model->edit($id);
		$this->dashboard('pelanggan/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/pelanggan');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/pelanggan');
	}
}