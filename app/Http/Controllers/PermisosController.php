<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;


class permisosController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search'); 
        $permissions = Permission::orderBy('id','DESC')
           ->orWhere('name', 'like', '%' . $search . '%')
           ->orWhere('descripcion', 'like', '%' . $search . '%')
           ->orWhere('modulo', 'like', '%' . $search . '%')
           ->paginate(11);; 
          

        return view('permisos.index',compact('permissions'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('permisos.create',compact('permission'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'descripcion' => 'required',
            'modulo' => 'required',
        ]);

        $input = $request->all();
        $user = Permission::create($input);
        /*$role = Permission::create(['name' => $request->input('name')]);*/
        


        return redirect()->route('permission.index')
                        ->with('success','Permiso Creado con exíto');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::find($id);
        

        return view('permisos.show',compact('permission'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
       
        return view('permisos.edit',compact('permission'));
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
        $this->validate($request, [
            'name' => 'required',
            'descripcion' => 'required',
            'modulo' => 'required',
        ]);

        
        $permission = Permission::find($id);
        $inputs = $request->all();
        $permission->update($inputs); 
        $permission->save();


      
        return redirect()->route('permission.index')
                        ->with('success','Permiso Actulizado con exíto');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::find($id)->delete();
        return redirect()->route('permission.index')
                        ->with('success','Permiso Eliminado con Exíto');
        
    }
}
