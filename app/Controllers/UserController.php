<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
class UserController extends BaseController
{
    protected $helpers=['Form'];
    public function index()
    {
        //
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }

    public function create()
    {
        $kelas = [
            [
                'id'            => 1,//sesuaikan dengan id kelas pada database
                'nama_kelas'    =>'A',
            ],
            [
                'id'            => 2,//sesuaikan dengan id kelas pada database
                'nama_kelas'    =>'B',
            ],
            [
                'id'            => 3,//sesuaikan dengan id kelas pada database
                'nama_kelas'    =>'C',
            ],
            [
                'id'            => 4,//sesuaikan dengan id kelas pada database
                'nama_kelas'    =>'D',
            ],
        ];

        $data =[
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store()
    {
        $userModel = new UserModel();

        if(!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'isi dulu bro'
                ]
                ],
            'npm' => [
                'rules' => 'required|is_unique[user.npm]',
                'errors' => [
                    'required' => 'isi dulu bro',
                    'is_unique' => 'npm udah ada'
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $userModel->saveUser([
            'nama'      => $this->request->getVar('nama'),
            'id_kelas'  => $this->request->getVar('kelas'),
            'npm'       => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas'),
        ];

        return view('profile', $data);
    }
}
