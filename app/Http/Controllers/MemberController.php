<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
/*
@author-Sunil Kumar Mishra
date:19-10-2022
*/
class MemberController extends Controller
{
    public function index()
    {
      //  $member=new Member();
      //  $source_list=$member->getSourceList(['']);
        //return view('member.source-list',compact('source_list'));
        return view('member.source-list');
    }

    public function memberSubmitRequest(Request $request){
        $member=new Member();
        $country_list=$member->getCountryList();
        $brand_list=$member->getBrandList();
        return view('member.member-submit-request',compact('country_list','brand_list'));
    }

    public function memberSubmitRequestPost(Request $request){
        if($request->ajax()){
            $product_name=$request->product_name;
            $brand=$request->brand;
            $product_type=$request->product_type;
            $product_size=$request->product_size;
            $country=$request->country;
            $deliver_date=$request->deliver_date;
            $add_update_data=array(
                'id'=>0,
                'p_name'=>$product_name,
                'p_brand'=>$brand,
                'p_type'=>$product_type,
                'p_size'=>$product_size,
                'p_code'=>'',
                'p_status'=>'Pending',
                'p_country_deliver'=>$country,
                'p_deliver_date'=>$deliver_date,
                'member_stylist_type'=>0,
                'member_stylist_id'=>1
            );
            $member=new Member();
            $response=$member->addUpdateData($add_update_data,'sg_sourcing');
            return json_encode($response);
        }  
    }
}
