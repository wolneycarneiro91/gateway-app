<?php

use App\Http\Utils\DefaultResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


Route::get('/casas',function(DefaultResponse $defaultResponse, Request $request){    
    $response = Http::withHeaders([
        'Accept'=>'application/json',        
    ])->get(config('microservices.avaliable.micro_01.url').'/api/casas',$request->all());    
    return $defaultResponse->response($response);//->json(json_decode($response->body()),$response->status());
});

Route::get('/casas/{id}',function(DefaultResponse $defaultResponse, Request $request){    
    $response = Http::withHeaders([
        'Accept'=>'application/json',        
    ])->get(config('microservices.avaliable.micro_01.url').'/api/casas/'.$request->id);   
   // dd($response);
    return $defaultResponse->response($response);//->json(json_decode($response->body()),$response->status());
});

Route::post('/casas',function(DefaultResponse $defaultResponse, Request $request){    
    $response = Http::withHeaders([
        'Accept'=>'application/json',        
    ])->post(config('microservices.avaliable.micro_01.url').'/api/casas',$request->all());    
    return $defaultResponse->response($response);//->json(json_decode($response->body()),$response->status());
});



Route::get('/',function(){
    return response()->json(['message'=>'success']);
});
