<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakonversi_model extends Model
{
    protected $table = 'data_nilaialternatif';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkonversi()
    {
        $dataquery=$this->db->query("select * from data_nilaialternatif");
        return $dataquery->getResult();
    }

    function tampilminmax()
    {
       
        $dataquery1=$this->db->query("select max(c1) as maxminK1, max(c2) as maxminK2, min(c3) as maxminK3, min(c4) as maxminK4 from data_nilaialternatif");
        return $rdataquery1=$dataquery1->getResult();
       
    }

    
}

