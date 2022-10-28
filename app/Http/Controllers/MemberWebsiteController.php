<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Str;
/*
@author-Sunil Kumar Mishra
date:27-10-2022
*/
class MemberWebsiteController extends Controller
{
    public function index()
    {
        return view('member.website.member-registration');
    }
    public function memberLogin(){
        return view('member.website.member-login');

    }

     
}
