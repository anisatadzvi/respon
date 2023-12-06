<?php

namespace App\Controllers;

use App\Models\Tabeldatalokasiobjek;
use App\Controllers\BaseController;

class Home extends BaseController
{
    protected $tabeldatalokasiobjek;

    public function __construct()
    {
        $this->tabeldatalokasiobjek = new Tabeldatalokasiobjek();
    }
    
    public function index()
    {
        return view('v_peta');
    }

    public function input()
    {
        return view('v_input');
    }

    public function simpan_tambah_data()
    { 
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Harus Diisi'
            ]
        ],
        'latitude' => [
            'rules' => 'required',
                'errors' => [
                    'required' => 'Latitude Harus Diisi'
            ]
        ],
        'longitude' => [
            'rules' => 'required',
                'errors' => [
                    'required' => 'Longitude Harus Diisi'
            ]
        ],


        ])) {
            return redirect()->to(base_url('home/input'))
            ->with(
                'message', array(
                    'type' => 'danger',
                    'content' => $this->validator->listErrors()
                ));
        }

        // menangkap file upload
        $foto = $this->request->getFile('foto');

        if($foto->getError() == 4) {
            $nama_foto = NULL;
        } else {
            // membuat folder upload/foto
            $foto_dir = 'upload/foto/';
            if (!is_dir($foto_dir)) {
                mkdir($foto_dir, 0777, TRUE);
        }

            // get foto name
            $nama_foto = preg_replace('/\s+/', '_', $foto->getName());

            // memindahkan file
            $foto->move($foto_dir, $nama_foto);
        }

        $data = [
            'nama' => $_POST['nama'], 
            'deskripsi' => $_POST['deskripsi'],
            'latitude' => $_POST['latitude'],
            'longitude' => $_POST['longitude'],
            'foto' => $nama_foto,
        ];

        if (!$this->tabeldatalokasiobjek->save($data)) {
            return redirect()->to(base_url('home/input'))
            ->with(
                'message', array(
                    'type' => 'danger',
                    'content' => 'Data Gagal Disimpan'
                ));
        } 

        return redirect()->to(base_url('home/input'))
        ->with(
            'message', array(
                'type' => 'success',
                'content' => 'Data Berhasil Disimpan'
            ));
    } 

    public function table()
    {
        $data['dataobjek'] = $this->tabeldatalokasiobjek->findAll();

        return view('v_tabel', $data);
    }

    public function hapus_data($id)
    {
        $this->tabeldatalokasiobjek->delete($id);
        return redirect()->to(base_url('home/table'))
        ->with(
            'message', 
            array(
                'type' => 'success',
                'content' => 'Data Berhasil Dihapus'
            ));
    } 
    
    public function edit_data($id)
    {
        $data['dataobjek'] = $this->tabeldatalokasiobjek->find($id);

        return view('v_edit', $data);
    }

    public function simpan_edit_data($id)
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Harus Diisi'
            ]
        ],
        'latitude' => [
            'rules' => 'required',
                'errors' => [
                    'required' => 'Latitude Harus Diisi'
            ]
        ],
        'longitude' => [
            'rules' => 'required',
                'errors' => [
                    'required' => 'Longitude Harus Diisi'
            ]
        ],


        ])) {
            return redirect()->to(base_url('home/input'))
            ->with(
                'message', array(
                    'type' => 'danger',
                    'content' => $this->validator->listErrors()
                ));
        }

        // menangkap file upload
        $foto = $this->request->getFile('foto');
        $fotolama = $_POST['fotolama'];

        if($foto->getError() == 4) {
            $nama_foto = $fotolama;
        } else {
            // membuat folder upload/foto
            $foto_dir = 'upload/foto/';
            if (!is_dir($foto_dir)) {
                mkdir($foto_dir, 0777, TRUE);
        }

        if ($fotolama !="") {
            unlink($foto_dir . $fotolama);
        }


            // get foto name
            $nama_foto = preg_replace('/\s+/', '_', $foto->getName());

            // memindahkan file
            $foto->move($foto_dir, $nama_foto);
        }


        $data = [
            'id' => $id,
            'nama' => $_POST['nama'], 
            'deskripsi' => $_POST['deskripsi'],
            'latitude' => $_POST['latitude'],
            'longitude' => $_POST['longitude'],
            'foto' => $nama_foto,
        ];

        if (!$this->tabeldatalokasiobjek->save($data)) {
            return redirect()->to(base_url('home/table'))
            ->with(
                'message', array(
                    'type' => 'danger',
                    'content' => 'Data Gagal Diedit'
                ));
        } 

        return redirect()->to(base_url('home/table'))
        ->with(
            'message', array(
                'type' => 'success',
                'content' => 'Data Berhasil Diedit'
            ));
    }

    public function peta()
    {
        return view('v_peta');
    }

    public function test()
    {
        if (auth()->loggedIn()) {
            echo "Akan muncul tombol log out";
        } else {
            echo "Akan muncul tombol log in";
        }
    }
}
