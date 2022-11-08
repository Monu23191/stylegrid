<?php
// namespace App\Http\Controllers\Api;
namespace App\Http\Controllers;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Http\Request;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Validator,Redirect;
use Config;
use Storage;

class CreateGridController extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct(){
        $this->middleware(function ($request, $next) {
        if(!Session::get("Stylistloggedin")) {
            return redirect("/stylist-login");
        }
        return $next($request);
    });
}
	  public function index()
    {
      
        return view('stylist.postloginview.dashboard');
    }
	
	public function loadgridview()
	{
		
		return view('stylist.postloginview.create_grid');
	}
	
	public function add_grid(Request $request)
	{
	if($request->isMethod('post'))
	{
		
	print_r($request->file());
	print_r($request->all());

	
	          $mj_explode=explode('_',$request->grid_block);
			  echo '<pre>';
			  print_r($mj_explode[0]);
			  	die;
				$grid=$mj_explode[0];
				$block=$mj_explode[3];
	        $prdimg = $request->file('prdimg');
            $prdimg_name='';
            
            if(!empty($prdimg)){
                $orgname = rand() . '.' . $prdimg->getClientOriginalExtension();
                $prdimg->move(public_path('stylist/grid_images'), $orgname);
                $prdimg_name=$orgname;
            }
            $grid=new Grid();
            
            // $prdname_row=$request->prdname_row;
            
            // $product_type=$request->product_type;
            // $product_size=$request->product_size;
            // $country=$request->country;
            // $deliver_date=$request->deliver_date;
            // $add_update_data=array(
                // 'id'=>0,
                // 'p_image'=>$source_image_name,
                // 'p_name'=>$product_name,
                // 'p_slug'=>Str::slug($product_name, '-'),
                // 'p_brand'=>$brand,
                // 'p_type'=>$product_type,
                // 'p_size'=>$product_size,
                // 'p_code'=>'',
                // 'p_status'=>'Pending',
                // 'p_country_deliver'=>$country,
                // 'p_deliver_date'=>date('Y-m-d',strtotime($deliver_date)),
                // 'member_stylist_type'=>0,
                // 'member_stylist_id'=>1,
            // );
            
            // $response=$member->addUpdateData($add_update_data,'sg_sourcing');   
            // if($response['reference_id']>0){
                // $member->addUpdateData(['id'=>$response['reference_id'],'p_slug'=>$add_update_data['p_slug'].'-'.$response['reference_id']],'sg_sourcing');   
            // }
            // return json_encode($response);
        
	}
	}
}
