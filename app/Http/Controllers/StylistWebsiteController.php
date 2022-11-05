<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Str;
use Session;

/*
@author-Sunil Kumar Mishra
date:5-11-2022
*/
class StylistWebsiteController extends Controller
{
    public function stylistRegistration()
    {
        $member=new Member();
        $country_list=$member->getCountryList();
        //$brand_list=$member->getBrandList();
        return view('stylist.website.stylist-registration',compact('country_list'));
       // echo "hello";
        //die;
        //if(!Session::get('Stylistloggedin')){
        //    $member=new Member();
       //     $country_list=$member->getCountryList();
       //     $brand_list=$member->getBrandList();
       //     return view('member.website.member-registration',compact('country_list','brand_list'));
       // }
        //return redirect('/stylist-dashboard');
    }  
    public function checkStylistExistance(Request $request){
        if($request->ajax()){
            $member=new Member();
            $key=$request->key;
            $value=$request->value;
            $status=$member->checkStylistExistance(['s.'.$key=>$value]);
            if(!$status){
                return json_encode(['status'=>1,'message'=>'Success']);
            }else{
                return json_encode(['status'=>0,'message'=>$key .' already exists!']);
            }
        }  
    }
    public function addStylist(Request $request){
        if($request->ajax()){
            $member=new Member();
            if($member->checkStylistExistance(['s.email'=>$request->email])){
                return json_encode(['status'=>0,'message'=>'Email already exists!']);
            }
            if($member->checkStylistExistance(['s.phone'=>$request->phone])){
                return json_encode(['status'=>0,'message'=>'Phone already exists!']);
            }
            $save_data=array(
                'id'=>0,
                'full_name'=>$request->full_name,
                'slug'=>Str::slug($request->full_name, '-'),
                'email'=>$request->email,
                'phone'=>$request->phone,
                'country_id'=>$request->country_id,
                'token'=>sha1(time().sha1(Str::slug($request->full_name, '-').time())),
                'shop'=>$request->shop?$request->shop:'',
                'style'=>$request->style?$request->style:'',
                'source'=>$request->source?$request->source:'',
            );
            $response=$member->addUpdateData($save_data,'sg_stylist'); 
            if($response['reference_id']){
                $member->addUpdateData(['id'=>$response['reference_id'],'slug'=>$save_data['slug'].'-'.$response['reference_id']],'sg_stylist');   
               // $verification_url=URL::to("/").'/stylist-account-confirmation/'.$save_data['token'];
                return json_encode(['status'=>1,'message'=>'Stylist Added Successfully!']);
            }
            return json_encode(['status'=>0,'message'=>'Something went wrong!']);
        }  
    }
    
    
}
