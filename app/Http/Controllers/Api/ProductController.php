<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use Validator;

class ProductController extends Controller
{
    /**
     * Create a new ProductController instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'status' => 'OK',
            'result' => Product::all(),
            'errors' => new \stdClass()
        ]);
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
            'name' => 'required | string',
            'price' => 'required | integer',
            'imageurl' => 'required | string'
        ];

        $validator = Validator::make( $request->all(), $rules );

        if ( $validator->fails() ) { 
            return $validator->errors(); 
        } else {

            try {
                $product = new Product;
        
                $product->name = $request->input('name');
                $product->price = $request->input('price');
                $product->imageurl = $request->input('imageurl');
                
                $product->save();

            } catch ( \Exception $e ) {

                return response()->json([
                    'status' => 'NOT OK',
                    'result' => new \stdClass(),
                    'errors' => $e->errorInfo[2]
                ]);    
            }

            return response()->json([
                'status' => 'OK',
                'result' => $product,
                'errors' => new \stdClass()
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'status' => 'OK',
            'result' => Product::find($id),
            'errors' => new \stdClass()
        ]);
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
        $product = Product::find($id);

        if ( $product == null ) {
            
            return response()->json([
                'status' => 'NOT OK',
                'result' => new \stdClass(),
                'errors' => 'Resource not found'
            ], 404);

        } else {

            $product->update($request->all());

            return response()->json([
                'status' => 'OK',
                'result' => $product,
                'errors' => new \stdClass()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if ( $product == null ) {
            
            return response()->json([
                'status' => 'NOT OK',
                'result' => new \stdClass(),
                'errors' => 'Resource not found'
            ], 404);

        } else {

            $product->delete();

            return response()->json([
                'status' => 'OK',
                'result' => $id. ' deleted',
                'errors' => new \stdClass()
            ]);
        }
    }
}
