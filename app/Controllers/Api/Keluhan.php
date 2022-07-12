<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class Keluhan extends ResourceController
{
    protected $modelName = 'App\Models\Keluhan';
    protected $format = 'json';
    protected $validationRules = [
        'no_kamar' => 'required',
        'judul' => 'required|min_length[8]',
        'isi' => 'required|min_length[15]',
    ];
    protected $validationMessages = [
        'no_kamar' => 'Nomor kamar tidak boleh kosong',
        'judul' => 'Judul tidak boleh kosong dan minimal 8 karakter',
        'isi' => 'Judul tidak boleh kosong dan minimal 15 karakter',
    ];

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function create()
    {
        $data = $this->validate($this->request->getPost(), $this->validationRules, $this->validationMessages);
        $this->model->save($data);
        return $this->respondCreated($data);
    }

    public function update($id = null)
    {
        $data = $this->validate($this->request->getPost(), $this->validationRules, $this->validationMessages);
        $this->model->save($data, $id);
        return $this->respond($data);
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted($id);
    }

    public function show($id = null)
    {
        return $this->respond($this->model->find($id));
    }
}
