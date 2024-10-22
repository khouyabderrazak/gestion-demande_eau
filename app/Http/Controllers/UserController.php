<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //
    public function register(Request $req){
        $this->validate($req,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
            ]);
            $act = User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' =>  Hash::make($req->password)
            ]);
            return response()->json([
                'mssg' => 'hhhhhh'
            ]);
    }
    public function login(Request $req){
        $this->validate($req,[
            'email' => 'required',
            'password' => 'required'
            ]);
       $user = User::where('email', $req->email)->get()->first();
       if(isset($user->id)){
            if(Hash::check($req->password, $user->password)){
                // $token = $user->createToken('auth_token')->plainTextToken;
                $token = $user->createToken('auth_token')->plainTextToken;
                return response()->json([
                    'mssge' => 'cncted ssssc',
                    'token' => $token
                ]);
            }else{
                return response()->json([
                    'mssge' => 'invalid password'
                ]); 
            }
       }else{
        return response()->json([
            'mssge' => 'invalid email'
        ]); 
       }
    // return response()->json($user->emai);
     }

}
