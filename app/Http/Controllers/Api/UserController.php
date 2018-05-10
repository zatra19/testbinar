<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\User;

class UserController extends Controller
{

    /**
     * Create a new UserController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['store']]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'email' => 'required | string',
            'name' => 'required | string',
            'password' => 'required | string'
        ];

        $validator = Validator::make( $request->all(), $rules );

        if ( $validator->fails() ) { 
            return $validator->errors(); 
        } else {

            try {
                $user = new User;
        
                $user->email = $request->input('email');
                $user->name = $request->input('name');
                $user->password = bcrypt($request->input('password'));
                
                $user->save();

            } catch ( \Exception $e ) {

                return response()->json([
                    'status' => 'NOT OK',
                    'result' => new \stdClass(),
                    'errors' => $e->errorInfo[2]
                ]);    
            }

            return response()->json([
                'status' => 'OK',
                'result' => $user,
                'errors' => new \stdClass()
            ], 201);
        }
    }
    
}
