<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorksRequest;
use App\Http\Requests\UpdateWorksRequest;
use App\Models\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function store(StoreWorksRequest $request){
        
        $works = Work::create($request->validated());
        
        return response()->json($works, 201);
    }
    
    public function update(UpdateWorksRequest $request, Work $works){

        $works->update($request->validated());

        return response()->json($works, 200);
    }
}
