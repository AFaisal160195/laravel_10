<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=Position::all();
        return view('position.home',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $department=Department::all();
        return view('position.create',[
            'department'=>$department
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //dd($req);

        //Menggunakan Mass Assignment
        Position::create([
            'name'=>$req->name,
            'department_id'=>$req->department_id
        ]);

        return redirect('/position');
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
        $position = Position::find($id);
        $department = Department::all();
        //$department=Department::where('id','=',$id)->first();
        return view('position.edit',[
            'data'=>$position,
            'department'=>$department
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        // $position=Position::find($req->id);
        // $position->name=$req->name;
        // $position->save();

        Position::where('id','=',$req->id)->update([
            'name'=>$req->name,
            'department_id'=>$req->department_id
        ]);

        return redirect('/position');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Position::find($id);
        $data->delete();

        return redirect('/position');
    }
}
