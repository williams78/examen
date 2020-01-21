<?php 

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\request;
use Response;
class ClientesController extends Controller{

public function index()
    {
        $clientes = Clientes::latest()->paginate(5);
        return view('clientes.index',compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


 public function create()
    {
        return view('clientes.create');
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

        
        Clientes::create($request->all());


        return redirect()->route('clientes.create')
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
        return view('clientes.show',compact('clientes'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Clientes::find($id);
         return view('clientes.edit',compact('clientes'));
        /**return Response::json($clientes);*/
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $clientes)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        $clientes->update($request->all());


        return redirect()->route('clientes.index')
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


        return redirect()->route('clientes.index')
                        ->with('success','Product deleted successfully');
    }



}