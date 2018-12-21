<?php

namespace App\Http\Controllers;

use App\TransactionHead;
use Illuminate\Http\Request;

class TransactionHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Transaction Head List';
        $transaction_heads= new TransactionHead();
        $render=[];
        if(isset($request->name))
        {
            $transaction_heads=$transaction_heads->where('name','like','%'.$request->name.'%');
            $render['name']=$request->name;
        }
        if(isset($request->type))
        {
            $transaction_heads=$transaction_heads->where('type',$request->type);
            $render['type']=$request->type;
        }
        if(isset($request->status))
        {
            $transaction_heads=$transaction_heads->where('status',$request->status);
            $render['status']=$request->status;
        }
        $transaction_heads= $transaction_heads->paginate(10);
        $transaction_heads= $transaction_heads->appends($render);
        $data['transaction_heads'] = $transaction_heads;
        return view('admin.transaction_head.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='Add New Transaction Head';
        return view('admin.transaction_head.create',$data);
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
            'type'=>'required'
        ]);
        $transaction_head = new TransactionHead();
        $transaction_head->name= $request->name;
        $transaction_head->status= $request->status;
        $transaction_head->type= $request->type;
        $transaction_head->save();
        session()->flash('success','Transaction head stored successfully');
        return redirect()->route('transaction-head.index');
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
        $data['title']='Edit Transaction Head';
        $data['transaction_head'] = TransactionHead::findOrFail($id);
        return view('admin.transaction_head.edit',$data);
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
            'type'=>'required'
        ]);
        $transaction_head = TransactionHead::findOrFail($id);
        $transaction_head->name= $request->name;
        $transaction_head->status= $request->status;
        $transaction_head->type= $request->type;
        $transaction_head->save();
        session()->flash('success','Transaction head updated successfully');
        return redirect()->route('transaction-head.index');
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
