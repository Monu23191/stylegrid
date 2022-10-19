<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class Member extends Model
{
    public $db;
	function getCountryList($where=[]){
		$this->db = DB::table('sg_country AS c');
		$this->db->select([
			"c.id",
			"c.country_code",
            "c.country_name",
			"c.status"
		]);
        if(count($where)){
			$this->db->where($where);
        }
		$response_data=$this->db->get();
		return $response_data;
	}
	function getBrandList($where=[]){
		$this->db = DB::table('sg_brand AS b');
		$this->db->select([
			"b.id",
			"b.name",
            "b.logo",
			"b.status"
		]);
        if(count($where)){
			$this->db->where($where);
        }
		$response_data=$this->db->get();
		return $response_data;
	}
	
	
}