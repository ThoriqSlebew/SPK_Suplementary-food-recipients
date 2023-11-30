<?php 
namespace App\Models;
use CodeIgniter\Model;

class datanormalisasi_model extends Model
{
    protected $table = 'data_nilaialternatif';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilnormalisasi()
    {
        $dataquery1=$this->db->query("select max(c1) as maxminK1, max(c2) as maxminK2, min(c3) as maxminK3, min(c4) as maxminK4 from data_nilaialternatif");
        $rdataquery1=$dataquery1->getResult();

        $dataquery2=$this->db->query("select * from data_nilaialternatif");
        $rdataquery2=$dataquery2->getResult();

        return array('maxmin' => $rdataquery1, 'all' => $rdataquery2);
    }

    
}