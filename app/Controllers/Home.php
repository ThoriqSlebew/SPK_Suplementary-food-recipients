<?php

namespace App\Controllers;
use App\Models\namajenis_model;
use App\Models\dataumkm_model;
use App\Models\datakriteria_model;
use App\Models\databobot_model;
use App\Models\datakonversi_model;
use App\Models\datanormalisasi_model;
use App\Models\dataperankingan_model;
use App\Models\datakeputusan_model;
use Config\View;

class Home extends BaseController
{
    public function index()
    {
         echo View('admin_header');
         echo View('admin_nav');
         echo View ('home'); 
         echo View('admin_footer');
    }

    public function callviewjenisusaha()
    {
        $mb = new namajenis_model();
        $datamb = $mb->tampiljenis();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewjenisusaha',$data); 
        echo View('admin_footer');
    }
    public function callviewdataumkm()
    {
        $mb = new dataumkm_model();
        $datamb = $mb->tampildata();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewdataumkm',$data); 
        echo View('admin_footer');
    }
    public function callviewdatakriteria()
    {
        $mb = new datakriteria_model();
        $datamb = $mb->tampilkriteria();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewdatakriteria',$data); 
        echo View('admin_footer');
    }
    public function callviewdatabobot()
    {
        $mb = new databobot_model();
        $datamb = $mb->tampilbobot();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('viewdatabobot',$data); 
        echo View('admin_footer');
    }

    public function callviewhitung()
    {
        $mb = new datakonversi_model();
        $datamb = $mb->tampilminmax();
        $data = array('dataMb'=> $datamb,);

        echo View('admin_header');
        echo View('admin_nav');
        echo View ('view_hitung',$data); 
        echo View('admin_footer');
    }

    public function callviewnormalisasi()
    {
        $mb = new datanormalisasi_model();
        $datamb = $mb-> tampilnormalisasi();
        $data = array('dataMb'=> $datamb,);

        echo View ('admin_header');
        echo View ('admin_nav');
        echo View ('viewnormalisasi', $data);
        echo View ('admin_footer');
    }

    public function callviewranking()
    {
        $mb = new dataperankingan_model();
        $datamb = $mb-> tampilranking();
        $data = array ('dataMb'=> $datamb,);

        echo View ('admin_header');
        echo View ('admin_nav');
        echo View ('viewperankingan', $data);
        echo View ('admin_footer');
    }
    public function callviewkeputusan()
    {
        $mb = new datakeputusan_model();
        $datamb = $mb-> tampilkeputusan();
        $data = array ('dataMb'=> $datamb,);

        echo View ('admin_header');
        echo View ('admin_nav');
        echo View ('viewkeputusan', $data);
        echo View ('admin_footer');
    }
    



   
}
