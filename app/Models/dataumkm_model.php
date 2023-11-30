<?php 
namespace App\Models;
use CodeIgniter\Model;

class dataumkm_model extends Model
{
    protected $table = 'data_nilaialternatif';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        $dataquery=$this->db->query("select * from data_nilaialternatif");
        return $dataquery->getResult();
    }

    
}