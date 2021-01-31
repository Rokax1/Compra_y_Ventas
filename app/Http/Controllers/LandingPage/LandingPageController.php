<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Modelos\Products;
use App\Modelos\ProductUser;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){

        return view('LandinPage.index');
    }

    public function show($id){

        $detalle = ProductUser::where('product_id',$id)->get();

        $detalle->load('product','user');

        $product = $detalle[0];


        return view('LandinPage.show',compact('product'));
    }
}
