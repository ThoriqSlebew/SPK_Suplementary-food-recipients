<?php 
namespace App\Models;
use CodeIgniter\Model;

class databobot_model extends Model
{
    protected $table = 'data_bobot';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilbobot()
    {
        $dataquery=$this->db->query("select * from data_bobot");
        return $dataquery->getResult();
    }

    
}