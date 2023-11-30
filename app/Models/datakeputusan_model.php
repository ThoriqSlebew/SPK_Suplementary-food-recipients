<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakeputusan_model extends Model
{
    protected $table = 'data_nilaialternatif';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkeputusan()
    {
        $dataquery1=$this->db->query("select max(c1) as maxminK1, max(c2) as maxminK2, min(c3) as maxminK3, max(c4) as maxminK4 from data_nilaialternatif");
        $rdataquery1=$dataquery1->getResult();

        $dataquery2=$this->db->query("select * from data_nilaialternatif");
        $rdataquery2=$dataquery2->getResult();

        //proses ambil bobot 
        $dataquery3=$this->db->query("select nilai_kriteria from data_kriteria where kode_kriteria='C1'");
        $rdataquery3=$dataquery3->getResult();
        $dataquery4=$this->db->query("select nilai_kriteria from data_kriteria where kode_kriteria='C2'");
        $rdataquery4=$dataquery4->getResult();
        $dataquery5=$this->db->query("select nilai_kriteria from data_kriteria where kode_kriteria='C3'");
        $rdataquery5=$dataquery5->getResult();
        $dataquery6=$this->db->query("select nilai_kriteria from data_kriteria where kode_kriteria='C4'");
        $rdataquery6=$dataquery6->getResult();
        
        return array('maxmin' => $rdataquery1, 'all' => $rdataquery2,'B1' => $rdataquery3,'B2' => $rdataquery4,'B3' => $rdataquery5, 'B4' => $rdataquery6) ;
    }

    
}