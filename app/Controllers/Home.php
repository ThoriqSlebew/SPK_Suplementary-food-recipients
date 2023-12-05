<?php

namespace App\Controllers;

use App\Models\dataalternatif_model;
use App\Models\datakriteria_model;
use App\Models\datakonversi_model;
use App\Models\datanormalisasi_model;
use App\Models\dataperankingan_model;
use App\Models\datakeputusan_model;
use App\Models\datanilaialternatif_model;
use Config\View;

class Home extends BaseController
{
    public function index()
    {
        echo View('admin_header');
        echo View('admin_nav');
        echo View('home');
        echo View('admin_footer');
    }

    public function callviewalternatif()
    {
        $mb = new dataalternatif_model();
        $datamb = $mb->tampildata();
        $data = array('dataMb' => $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('viewalternatif', $data);
        echo View('admin_footer');
    }

    public function callviewnilaialternatif()
    {
        $mb = new datanilaialternatif_model();
        $datamb = $mb->tampildata();
        $data = array('dataMb' => $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('viewnilaialternatif', $data);
        echo View('admin_footer');
    }

    public function callviewdatakriteria()
    {
        $mb = new datakriteria_model();
        $datamb = $mb->tampilkriteria();
        $data = array('dataMb' => $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('viewdatakriteria', $data);
        echo View('admin_footer');
    }

    public function callviewhitung()
    {
        $mb = new datakonversi_model();
        $datamb = $mb->tampilminmax();
        $data = array('dataMb' => $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('view_hitung', $data);
        echo View('admin_footer');
    }

    public function callviewnormalisasi()
    {
        $mb = new datanormalisasi_model();
        $datamb = $mb->tampilnormalisasi();
        $data = array('dataMb' => $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('viewnormalisasi', $data);
        echo View('admin_footer');
    }

    public function callviewranking()
    {
        $mb = new dataperankingan_model();
        $datamb = $mb->tampilranking();
        $data = array('dataMb' => $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('viewperankingan', $data);
        echo View('admin_footer');
    }

    public function callviewkeputusan()
    {
        $mb = new datakeputusan_model();
        $datamb = $mb->tampilkeputusan();
        $data = array('dataMb' => $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View('viewkeputusan', $data);
        echo View('admin_footer');
    }

    public function forminput()
    {
        echo View('admin_header');
        echo View('admin_nav');
        echo View('input_alternatif');
        echo View('admin_footer');
    }

    public function simpandata()
    {
        $kode = $this->request->getPost('kode');
        $nama = $this->request->getPost('nama');
        $kriteria1 = $this->request->getPost('kriteria1');
        $kriteria2 = $this->request->getPost('kriteria2');
        $kriteria3 = $this->request->getPost('kriteria3');
        $kriteria4 = $this->request->getPost('kriteria4');

        $data = [
            'kode_alternatif' => $kode,
            'nama_alternatif' => $nama,
            'c1' => $kriteria1,
            'c2' => $kriteria2,
            'c3' => $kriteria3,
            'c4' => $kriteria4,
        ];

        $dataModel = new datanilaialternatif_model();
        $tabeldata = "data_nilaialternatif";
        $dataModel->savedata($tabeldata, $data);
        return redirect()->to(site_url());
    }

    public function formeditdata($id)
    {
        $dataModel = new datanilaialternatif_model();
        $datadata = $dataModel->getdata($id);
        $data = array('dataNilai' => $datadata,);
        echo View('admin_header');
        echo View('admin_nav');
        echo View('edit_alternatif', $data);
        echo View('admin_footer');
    }

    public function editdata($id)
    {
        $kode = $this->request->getPost('kode');
        $nama = $this->request->getPost('nama');
        $kriteria1 = $this->request->getPost('kriteria1');
        $kriteria2 = $this->request->getPost('kriteria2');
        $kriteria3 = $this->request->getPost('kriteria3');
        $kriteria4 = $this->request->getPost('kriteria4');

        $data = [
            'kode_alternatif' => $kode,
            'nama_alternatif' => $nama,
            'c1' => $kriteria1,
            'c2' => $kriteria2,
            'c3' => $kriteria3,
            'c4' => $kriteria4,
        ];

        $where = ['id_nilai' => $id];

        $dataModel = new datanilaialternatif_model();
        $tabeldata = "data_nilaialternatif";
        $simpan = $dataModel->prosesEditData($tabeldata, $data, $where);
        return redirect()->to(site_url());
    }
    public function deletedata($id)
    {
        $dataModel = new datanilaialternatif_model();
        $tabeldata = "data_nilaialternatif";
        $hapus = $dataModel->hapusData($id);
        return redirect()->to(site_url());
    }
}
