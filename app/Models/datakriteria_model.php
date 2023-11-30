<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakriteria_model extends Model
{
    protected $table = 'data_kriteria';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkriteria()
    {
        $dataquery=$this->db->query("select * from data_kriteria");
        return $dataquery->getResult();
    }

    
}