<?php 
namespace App\Models;
use CodeIgniter\Model;

class namajenis_model extends Model
{
    protected $table = 'data_alternatif';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampiljenis()
    {
        $dataquery=$this->db->query("select * from data_alternatif");
        return $dataquery->getResult();
    }

    
}