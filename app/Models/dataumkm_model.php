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

    function savedata($tabel,$data)
    {
        $this->db->table($tabel)->insert($data);
        return true;
    }

    public function getdata($id){
        $dataquery=$this->db->query("select * from data_nilaialternatif where id_nilai=".$id);
        return $dataquery->getResult();

    }
    
    function prosesEditData($table,$data,$where){
        $this->db->table($table)->update($data,$where);
    return true;    
    }
    
    function hapusData ($id){
        $dataquery=$this->db->query("delete from data_nilaialternatif where id_nilai=".$id);
        return true;
    }

    
}