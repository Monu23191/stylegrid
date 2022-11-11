<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Stylist;
use Illuminate\Support\Str;
use Session;
/*
@author-Sunil Kumar Mishra
date:09-11-2022
*/
class StylistController extends Controller
{
 
    public function __construct(){
            $this->middleware(function ($request, $next) {
            if(!Session::get("Stylistloggedin")) {
                return redirect("/stylist-login");
            }
            return $next($request);
        });
    }
    
    public function stylistDashboard(Request $request){
        return view('stylist.postloginview.dashboard');
    }

    public function stylistSourcing()
    {
        $stylist=new Stylist();
        $source_list=$stylist->getSourceList([]);
        return view('stylist.postloginview.stylist-sourcing',compact('source_list'));
    }
    public function stylistFulfillSourceRequest($id){
        $stylist=new Stylist();
        $source=$stylist->getSourceList(['s.p_slug'=>$id]);
        if(!count($source)){
            return redirect('/stylist-sourcing');
        }else{
            $source_data=$source[0];  
        }
        return view('stylist.postloginview.stylist-fulfill-source-request',compact('source_data'));
    }
    
    public function stylistFulfillSourceRequestPost(Request $request){
        if($request->ajax()){
            $member=new Member();
            $response=$member->addUpdateData(array(
                'id'=>0,
                'sourcing_id'=>$request->source_id,
                'stylelist_id'=>Session::get("stylist_id"),
                'price'=>$request->source_price,
                'offer_date'=>now()
            ),'sg_sourcing_offer');
            if($response['reference_id']>0){
                $response['status']=1;
                $response['message']="Source request sent Successfully!";
            }else{
                $response['status']=0;
                $response['message']="something went wrong!";
            }
            return json_encode($response);
        }  
    }

    public function stylistSourceRequestSubmit()
    {
        return view('stylist.postloginview.stylist-source-request-submit');
    }

    public function stylistCreateSourceRequest(Request $request){
        $member=new Member();
        $country_list=$member->getCountryList();
        return view('stylist.postloginview.stylist-create-source-request',compact('country_list'));
    }

    public function stylistSubmitRequestPost(Request $request){
        if($request->ajax()){
            $source_image_name='';
            $source_image= $request->file('source_image');
            if(!empty($source_image)){
                $new_name = rand() . '.' . $source_image->getClientOriginalExtension();
                $source_image->move(public_path('member/dashboard/attachments/source'), $new_name);
                $source_image_name=$new_name;
            }
            $member=new Member();
            $brand_data=$member->getBrandList(['b.name'=>$request->brand]);
            if(count($brand_data)){
                $brand=$brand_data[0]->id;
            }else{
                $brand_data=$member->addUpdateData(['id'=>0,'name'=>$request->brand,'brand_mg'=>1],'sg_brand');
                $brand=$brand_data['reference_id'];
            }
            $product_name=$request->product_name;
            $product_type=$request->product_type;
            $product_size=$request->product_size;
            $country=$request->country;
            $deliver_date=$request->deliver_date;
            $add_update_data=array(
                'id'=>0,
                'p_image'=>$source_image_name,
                'p_name'=>$product_name,
                'p_slug'=>Str::slug($product_name, '-'),
                'p_brand'=>$brand,
                'p_type'=>$product_type,
                'p_size'=>$product_size,
                'p_code'=>'',
                'p_status'=>'Pending',
                'p_country_deliver'=>$country,
                'p_deliver_date'=>date('Y-m-d',strtotime($deliver_date)),
                'member_stylist_type'=>1,
                'member_stylist_id'=>Session::get("stylist_id"),
            );
            
            $response=$member->addUpdateData($add_update_data,'sg_sourcing');   
            if($response['reference_id']>0){
                $member->addUpdateData(['id'=>$response['reference_id'],'p_slug'=>$add_update_data['p_slug'].'-'.$response['reference_id']],'sg_sourcing');   
            }
            return json_encode($response);
        }  
    }
    public function stylistSubmitRequestComplete(Request $request){
        return view('stylist.postloginview.stylist-source-request-submit');
    }















    public function memberSubmitRequest(Request $request){
        $member=new Member();
        $source_applicable=$member->sourceApplicable(['ms.member_id'=>Session::get("member_id")]);
        if($source_applicable){
            $day_left=$source_applicable->day_left;
            if($day_left<0){
                return redirect("/member-sourcing");
            }
            $country_list=$member->getCountryList();
            $brand_list=$member->getBrandList();
            return view('member.dashboard.member-submit-request',compact('country_list','brand_list'));
        }
    }
    

    public function getStylistBrandList(Request $request){
        if($request->ajax()){
            $member=new Member();
            $search_brand=$request->brand_search;
            if(!empty($search_brand)){
                $brand_list=$member->getBrandList([],$search_brand);
                if(count($brand_list)){
                    $response['status']=1;
                }else{
                    $response['status']=0;
                }
                $response['data']=$brand_list;
            }else{
                $response['status']=0;
            }
            return json_encode($response);
        }  
    }

    

    public function memberSubmitRequestComplete(Request $request){       
        return view('member.dashboard.member-submit-request-complete');
    }
    public function memberOfferReceived($id){
        $member=new Member();
        $offer_list=$member->memberOfferDetails(['s.p_slug'=>$id]);
        if(!count($offer_list)){
            return redirect('/member-sourcing');
        }
        return view('member.dashboard.multiple-offer-received',compact('offer_list'));
    }
    public function memberOfferAcceptedSuccessful(Request $request){
        return view('member.dashboard.member-offer-accepted');
    }

    public function memberAcceptOffer(Request $request){
        if($request->ajax()){
            $member=new Member();
            $selected_offer_id=$request->selected_offer_id;
            if(!empty($selected_offer_id)){
                $response['status']=$member->memberAcceptOffer($selected_offer_id);
            }else{
                $response['status']=0;
            }
            return json_encode($response);
        }  
    }

    public function memberDeclineOffer(Request $request){
        if($request->ajax()){
            $member=new Member();
            $decline_offer_id=$request->decline_offer_id;
            if(!empty($decline_offer_id)){
                $response['status']=$member->memberDeclineOffer($decline_offer_id);
            }else{
                $response['status']=0;
            }
            return json_encode($response);
        }  
    }
    
    
    
}
