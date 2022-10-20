<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
/*
@author-Sunil Kumar Mishra
date:19-10-2022
*/
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
	function addUpdateData($add_update_data,$table){
		if(count($add_update_data)>0){
			if(!empty($table)){
				if($add_update_data['id']>0){
					DB::table($table)
					->update($add_update_data);
					$reference_id= $add_update_data['id'];
					$response=['status'=>1,'reference_id'=>$reference_id,'message'=>'Data successfully updated'];
				}else{
					DB::table($table)
					->insert($add_update_data);
					$reference_id= DB::getPdo()->lastInsertId();
					$response=['status'=>1,'reference_id'=>$reference_id,'message'=>'Data successfully added'];
				}
			}else{
				$response=['status'=>1,'reference_id'=>0,'message'=>'table missing'];
			}
		}else{
			$response=['status'=>1,'reference_id'=>0,'message'=>'Request data missing'];
		}
		return $response;
	}
	
	
}