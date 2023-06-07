<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Api\loginRequest;
use App\Http\Requests\Api\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


/**
 * @group Authentication
 *
 * APIs for authentication
 *
 */

class Authenticationcontroller extends Controller
{

   /**
    * Login
    * @response {
    * "token":"3|F8rKXMlO9KzhvoavgxvYR35Jh46MBWurne3PUzTy"
    * }
    * @response 422 scenario="validation error " {

    "message": "The email field is required. (and 1 more error)",
    "errors": {
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
      }
}
    *
    *@response 401 scenario="email or password is wrong or user type is not user"{
      "message":"Email or password is wrong"
}
    *
    * @response 400 scenario="user send a valid token "{
    * "message": "you are already logged in"
    *  }
    */

   public function login(loginRequest $request)
    {
       if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password,'role_id'=>2]))
       {
        return response([
            'message'=>'email or password is wrong',
        ],401);
       }

       $token=auth()->user()->createToken("token")->plainTextToken;
       return response([
        'token'=>$token,

       ]);
    }



    /**
     * Register
     * @response {
     * "token":"3|F8rKXMlO9KzhvoavgxvYR35Jh46MBWurne3PUzTy"
     * }
     *
     *
     *@response 422 scenario="validation error " {

     "message": "The name field is required. (and 4 more errors)",
     "errors": {
        "name": [
            "The name field is required."
        ],
        "last_name": [
            "The last name field is required."
        ],
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
      }
}
     *
     *
     * @response 400 scenario="user send a valid token "{
     * "message": "you are already logged in"
     *  }
     *
     */
    public function register(RegisterRequest $request)
    {
       $user=User::create([

        'name'=>$request->name,
        'last_name'=>$request->last_name,
        'momile_phone'=>$request->momile_phone,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'role_id'=>2
       ]);

       Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
       $token=auth()->user()->createToken("token")->plainTextToken;
       return response([
        'token'=>$token,
       ]);
    }



     /**
      * Logout
      *
      *@response 204
      *
      *@response 401 scenario=" user not logged in "{
      "message":"Unauthenticated."
      }
      */
    public function logout()
    {
      auth()->User()->currentAccessToken()->delete();
      return response()->noContent();
    }
}


