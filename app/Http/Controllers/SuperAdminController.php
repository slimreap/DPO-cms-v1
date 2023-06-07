<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;

    class SuperAdminController extends Controller
{
    

    public function show()
    {
        return view('super-admin.admincreation');
    }

    public function createAdmin(Request $request)

    {
        
        // Validation for user creation of Super Admin
        $validated = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'string|email|unique:users',
                'role' => ['required','integer'],
                'password' => 'required',

            ]
        );

        dd($validated);
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'role' => $validated['role'],
            'password' => $validated['name'],
        ]);

        return view('home');
    }

    //show list of admin and editor
    public function superadminHome()
    {
        $users = User::where('role', '!=', 'Super Admin')->get();
        $superadmin = User::where('role','Super Admin')->first();
        return view('super-admin.superad-dashboard',
            [
                "users" => $users,
                "superadmin" => $superadmin
            ]
        );
    }

    //update roles

    public function update(Request $request) {


       //loop through user id input to update role
        $role = $request->validate([
           'role' => 'required|integer',
           'userid' => 'required'
        ]);


        // dd($role);
        $user = User::where('id', $role['userid'])->update([
            'role' => $role['role'],   
        ]);


        return back()->with('message', 'Updated successfully');
    }

}
