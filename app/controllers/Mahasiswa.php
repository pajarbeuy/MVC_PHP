<?php
class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllmahasiswa();
        $this->view('templates/header', $data);
        $this->view('Mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['detail'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('Mahasiswa/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location:'. BASEURL . '/Mahasiswa');
            exit;
        }
        else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('location:' . BASEURL . '/Mahasiswa');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id)>0){
            Flasher::setFlash('berhasil', 'dihapus', 'secondary');
            header('Location:' . BASEURL . '/Mahasiswa');
            exit;
        }
        else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:' . BASEURL . '/Mahasiswa');
            exit;
        }
    }

}