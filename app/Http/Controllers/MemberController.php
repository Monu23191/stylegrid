<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        return view('member.source-list');
    }

    public function memberSubmitRequest(Request $request){
        $member=new Member();
        $country_list=$member->getCountryList();
        $brand_list=$member->getBrandList();
        return view('member.member-submit-request',compact('country_list','brand_list'));
    }
}
