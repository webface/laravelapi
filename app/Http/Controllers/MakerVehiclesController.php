<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Maker;
use App\Vehicle;


class MakerVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        //
        $maker= Maker::find($id);
        
        if(!$maker){
            return response()->json(['message'=>'This maker does not exist','code'=> 404],404);
        }
        
        return response()->json(['data'=>$maker->vehicles],200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$vehicleId)
    {
        //
        $maker= Maker::find($id);
        
        if(!$maker){
            return response()->json(['message'=>'This maker does not exist','code'=> 404],404);
        }
        
        $vehicle=$maker->vehicles->find($vehicleId);
        
        if(!$vehicle){
            return response()->json(['message'=>'A vehicle does not exist for this  maker does not exist','code'=> 404],404);
        }
        
        return response()->json(['data'=>$vehicle],200);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
