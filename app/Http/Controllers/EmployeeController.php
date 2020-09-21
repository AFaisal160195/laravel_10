<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data=Employee::all();
        return view('employee.home',[
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

        $position=Position::all();
        return view('employee.create',[
            'position'=>$position
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
        Employee::create([
            'name'=>$req->name,
            'alamat'=>$req->alamat,
            'phone'=>$req->phone,
            'email'=>$req->email,
            'position_id'=>$req->position_id,
            'picture'=>$req->picture
        ]);

        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee=Employee::find($id);
        //ss($employee->inventory);
        return view('employee.show',[
            'data'=>$employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $position = Position::all();
        //$department=Department::where('id','=',$id->first();
        return view('employee.edit',[
            'data'=>$employee,
            'position'=>$position
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
        Employee::where('id','=',$req->id)->update([
            'name'=>$req->name,
            'alamat'=>$req->alamat,
            'phone'=>$req->phone,
            'email'=>$req->email,
            'position_id'=>$req->position_id,
            'picture'=>$req->picture
        ]);

        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Employee::find($id);
        $data->delete();

        return redirect('/employee');
    }
}
