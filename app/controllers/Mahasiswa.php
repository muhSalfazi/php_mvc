<?php

class Mahasiswa extends Controller
{
    public function index()
    {

        $data['judul'] = 'daftar mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllmahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {

        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
}