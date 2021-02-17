<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Modelos\Product;
use App\Modelos\Products;
use App\Modelos\ProductUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index(){

        return view('LandinPage.index');
    }

    public function show($id){

        $product=User::find(Auth::id())->product()->find($id);


        return view('LandinPage.show',compact('product'));
    }
}
