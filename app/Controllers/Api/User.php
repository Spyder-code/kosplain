<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
    protected $modelName = 'App\Models\User';
    protected $format = 'json';
    protected $validationRules = [
        'email' => 'required|valid_email',
        'username' => 'required|min_length[3]|max_length[12]',
        'password' => 'required|min_length[8]|max_length[12]',
    ];
    protected $validationMessages = [
        'email' => 'Email tidak boleh kosong',
        'username' => 'Username tidak boleh kosong',
        'password' => 'Password tidak boleh kosong',
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
