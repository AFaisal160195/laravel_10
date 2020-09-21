<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;

class PositionApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Position::all();
        return response()->json([
            'code'=>200,
            'value'=>$data,
            'message'=>'SUCCESS!',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Position::create([
            'name'=>$request->name,
            'department_id'=>$request->department_id
        ]);

        return response()->json([
            'code'=>201,
            'message'=>'Great success! New Position Created',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Position::where('id','=',$request->id)->update([
            'name'=>$request->name,
            'department_id'=>$request->department_id
        ]);

        return response()->json([
            'code'=>202,
            'message'=>'Great success! Position wa Updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $position=Position::find($id);
        $position->delete();

        return response()->json([
            'code'=>202,
            'message'=>'Great success! Position wa Updated',

        ]);
    }
}
