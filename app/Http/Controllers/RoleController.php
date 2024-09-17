<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use function Laravel\Prompts\alert;

class RoleController extends Controller
{
    public function index()
    {
    
    }

    public function create()
    {
        $roles = Role::orderBy('name', 'ASC')->get();
        $permission = Permission::orderBy('name', 'ASC')->get();

        // $role = Role::findById($id);
        
        // // Get all permissions
        // $allPermissions = Permission::all();
        // $rolePermissions = $role->permissions->pluck('id')->toArray();

        return view('assignPermission',[
            'roles'=>$roles ,
            'permission'=>$permission,
        ]);
    }

    public function store(Request $request)
    {
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required'
        // ]);

        // if($validator->passes()){
            // $role = Role::create(['name' =>$request->name]);  want to create role 
            
            $role = Role::where('name', $request->role)->firstOrFail(); //combo box na role
            if(!empty($request->permission)){
                foreach($request->permission as $name){
                    $role->givePermissionTo($name);
                }
            }return redirect('user');
    }
    
}