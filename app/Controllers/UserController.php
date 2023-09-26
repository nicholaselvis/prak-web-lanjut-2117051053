<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;
use CodeIgniter\Commands\Utilities\Publish;
class UserController extends BaseController
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }

    protected $helpers=['Form'];

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
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
        $kelas = $this->kelasModel->getKelas();

        $data =[
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    public function store()
    {

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

        $this ->userModel->saveUser([
            'nama'      => $this->request->getVar('nama'),
            'id_kelas'  => $this->request->getVar('kelas'),
            'npm'       => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'npm' => $this->request->getVar('npm'),
            'kelas' => $this->request->getVar('kelas'),
        ];

        return redirect()->to('/user');
    }
}
