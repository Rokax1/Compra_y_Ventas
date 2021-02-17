<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Modelos\Product;
use App\Modelos\Images;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = User::find(Auth::id())->product()->paginate(5);

        //dd($products);
        return view('Dashboard.Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //dd($request->file('file'));
        $user = User::find(Auth::id());
        $product = Product::create($request->except('file'));
        $user->product()->attach($product->id);
        //obteniendo imagenes
        $images = $request->file;
        //guardar imagenes optimizar porfa
        foreach ($images as $key => $img) {
            Images::create([
                "product_id" => $product->id,
                "url" => $img->store('public/' . Auth::user()->name . '_' . Auth::user()->id)
            ]);
        }

        return redirect()->route('Products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($product);
        //  Product::find($id);

        // return view('Dashboard.Products.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $product->load('images');

        $images = Product::find($id)->images;

        // dd($images);
        $imagesURL = [];

        foreach ($images as $key => $img) {
            //dd($img->url);
            array_push($imagesURL, $img->url);
        }
        //dd($imagesURL);


        return view('Dashboard.Products.edit', compact('product', 'imagesURL'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = User::find(Auth::id())->product()->find($id);

        $product->update($request->except('file'));


        return redirect()->route('Products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->id_product);
        $product = User::find(Auth::id())->product()->find($request->id_product);
        $product->delete();

        return back();
    }

    public function restore($id)
    {
        $product = User::find(Auth::id())->product()->onlyTrashed()->find($id);

        //dd($product);
        if (!$product) {
            abort(404);
        }
        $product->restore();

        return redirect()->route('Products.papelera');
    }


    public function indexRestore()
    {
        $products = User::find(Auth::id())->product()->onlyTrashed()->paginate(5);

        return view('Dashboard.Products.restore', compact('products'));
    }

    public function getImages(Request $request, $id)
    {

        if ($request->ajax()) {


            $images = Product::find($id)->images;

            // dd($images);
            $imagesURL = [];

            foreach ($images as $key => $img) {
                //dd($img);
                array_push($imagesURL, $img->url);
            }


            return response()->json($imagesURL);
        }
    }
}
