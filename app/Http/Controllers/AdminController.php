<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        return view("admin.admin_dash",compact("users"));
    }

    //users
    public function users(){
        $users = User::all();
        $roles = Role::all();
        return view("admin.users",compact("users","roles"));
    }
    //update role 
    public function updateRole(Request $request, $userId)
    {
        $user = User::find($userId);
        $roleName = $request->input('role');
    
        // Update the user's role
        $user->syncRoles([$roleName]);
    
        // Redirect or return a response
        return redirect()->back()->with('success', 'Role updated successfully');
    }
    //delete user
    public function destroy(User $user){
        $user->delete();
        return redirect()->back();
    }

    // products
    public function products(){
        $products = Product::all();
        return view("admin.products",compact("products"));
    }
}
