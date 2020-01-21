<?php 

namespace App\Http\Controllers;

use App\Proveedores;
use Illuminate\Http\request;

class ProveedoresController extends Controller{

public function index()
    {
        $proveedores = Proveedores::latest()->paginate(5);
        return view('proveedores.index',compact('proveedores'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


 public function create()
    {
        return view('proveedores.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
            'pr_nombre' => 'required',
            'pr_contacto' => 'required',
            'pr_calle' => 'required',
            'pr_colonia' => 'required',
            'pr_codigo' => 'required',
            'pr_correo' => 'required',
            'pr_telefono' => 'required',
            'pr_ciudad' => 'required',
            'pr_estado' => 'required',
            'pr_pais' => 'required',
        ]);

        
        Proveedores::create($request->all());


        return redirect()->route('proveedores.create')
                        ->with('success','Product created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        $product->update($request->all());


        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();


        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }



}