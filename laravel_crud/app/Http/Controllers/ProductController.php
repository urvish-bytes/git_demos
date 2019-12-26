<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::orderBy('id','desc')->paginate(0);
        return view('product.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        // echo "data";exit;
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'product_code' => 'required|unique:products',
            'description' => 'required',
        ]);
        Product::create($request->all());
        return Redirect::to('product')->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $where = array('id' => $id);
        // $data = Product::where($where)->first();

        $product_info = Product::find($id);

        if($product_info){
            return view('product.edit',compact('product_info'));
        }
        else
            dd("data not found");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product_info = Product::find($id);
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $update = ['title'=>$request->title,'description'=>$request->description];
        Product::where('id',$id)->update($update);
        return Redirect::to('product')->with('success','Product update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_info = Product::findOrFail($id);
        $product_info->delete();
        return Redirect::to('product')->with('success','Product deleted successfully');
    }
}
