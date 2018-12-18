<?php

namespace App\Http\Controllers;

use App\Department;
use App\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Designation List';
        $designations= new Designation();
        $designations=$designations->with('relDepartment');
        $render=[];
        if(isset($request->name))
        {
            $designations=$designations->where('name','like','%'.$request->name.'%');
            $render['name']=$request->name;
        }
        if(isset($request->department_id))
        {
            $designations=$designations->where('department_id',$request->department_id);
            $render['department_id']=$request->department_id;
        }
        if(isset($request->status))
        {
            $designations=$designations->where('status',$request->status);
            $render['status']=$request->status;
        }
        $designations= $designations->paginate(10);
        $designations= $designations->appends($render);
        $data['designations'] = $designations;
        $data['departments']=Department::where('status','Active')->pluck('name','id');
        return view('admin.designation.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='Add New Designation';
        $data['departments']=Department::where('status','Active')->pluck('name','id');
        return view('admin.designation.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'status' => 'required',
            'department_id'=>'required'
        ]);
        $designation = new Designation();
        $designation->name= $request->name;
        $designation->status= $request->status;
        $designation->department_id= $request->department_id;
        $designation->save();
        session()->flash('success','Designation stored successfully');
        return redirect()->route('designation.index');
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
        $data['title']='Edit Designation';
        $data['departments']=Department::where('status','Active')->pluck('name','id');
        $data['designation'] = Designation::findOrFail($id);
        return view('admin.designation.edit',$data);
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
        $request->validate([
            'name'=>'required',
            'status' => 'required',
            'department_id'=>'required'
        ]);
        $designation = Designation::findOrFail($id);
        $designation->name= $request->name;
        $designation->status= $request->status;
        $designation->department_id= $request->department_id;
        $designation->save();
        session()->flash('success','Designation updated successfully');
        return redirect()->route('designation.index');
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
