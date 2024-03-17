<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\registerformmodel;

class admincontroller extends Controller
{
    public function index(){
        $inquiry = registerformmodel::where('Status', 'Inquiry')->orderBy('id','desc')->get();
        return view('admin/index',compact('inquiry'));
    }

    public function mainsearch($mainsearch = null){
        return view('admin/registration/studentmanagement',compact('mainsearch'));
    }

    public function expenses(){
        return view('admin/expenses');
    }
}
