<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Response;
use Barryvdh\DomPDF\Facade as PDF;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

     function __construct()
    {
       /*  $this->middleware('permission:Listar_Usuarios');
         $this->middleware('permission:Agregar_Usuarios', ['only' => ['create','store']]);
         $this->middleware('permission:Editar_Usuarios', ['only' => ['edit','update']]);
         $this->middleware('permission:Eliminar_Usuarios', ['only' => ['destroy']]);
         */
         $this->middleware('auth');
    }

	public function index(Request $request){
        $search = $request->get('search'); 
        $data=User::orderBy('id','DESC')
        ->nombre($search)
        ->correo($search)
        ->rol($search)
        ->paginate(10);
        return view('users.index',compact('data'))->with('i',($request->input('page',1)-1)*5);

	}

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }

	public function store(Request $request){
		$this->validate($request,[
			'name'=>'required',
		    'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required']);
		$input = $request->all();
        $input['password'] = Hash::make($input['password']);


        $user = User::create($input);
        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success',__('Sucess'));
	}
    

 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        return view('users.edit',compact('user','roles','userRole'));
    }

     public function editar(Request $request)
    {
        $data=$request->input('id');

        return view('users.editar',compact('data'));
    }

     public function ejemplo(Request $request)
    {
       
if($request->ajax()) {
       
        return response()->json(['message' => 'Insertado correctamente']);
    }else{



        return view('users.ejemplo');
        }
    }

    public function getAjax()
{
    $id = $_POST['id'];
    $test = new TestModel();
    $result = $test->getData($id);

    foreach($result as $row)
    {
        $html =
              '<tr>
                 <td>' . $row->name . '</td>' .
                 '<td>' . $row->address . '</td>' .
                 '<td>' . $row->age . '</td>' .
              '</tr>';
    }
    return view('users.destroy');
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
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required',
            'confirm-password' => 'required',
            'roles' => 'required'
        ]);


        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }


        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();


        $user->assignRole($request->input('roles'));


        return redirect()->route('users.index')
                        ->with('success','Usuario Actualizado con Exíto');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','Usuario Eliminado con Exíto');
    }

}
