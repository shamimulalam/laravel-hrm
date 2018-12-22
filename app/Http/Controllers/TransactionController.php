<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\TransactionHead;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title']='Transaction Details';
        $transaction= new Transaction();
        $transaction= $transaction->with('relTransactionHead');
        $render=[];
        if(isset($request->transaction_id)){
            $transaction= $transaction->where('transaction_id','like','%'.$request->transaction_id.'%');
            $render['transaction_id']=$request->transaction_id;
        }
        if(isset($request->client_name)){
            $transaction= $transaction->where('client','like','%'.$request->client_name.'%');
            $render['client_name']=$request->client_name;
        }
        if(isset($request->transaction_head_id)){
            $transaction= $transaction->where('transaction_head_id',$request->transaction_head_id);
            $render['transaction_head_id']=$request->transaction_head_id;
        }
        $transaction= $transaction->orderBy('id','DESC');
        $transaction= $transaction->paginate(10);
        $transaction= $transaction->appends($render);
        $data['transactions']= $transaction;
        $data['transaction_heads']=TransactionHead::where('type','Income')->where('status','Active')->pluck('name','id');
        return view('admin.transaction.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']='Create new transaction';
        $data['transaction_heads']=TransactionHead::where('type','Income')->where('status','Active')->pluck('name','id');
        return view('admin.transaction.create',$data);
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
            'transaction_head_id'=>'required',
            'client_name'=>'required',
            'description'=>'required',
            'date'=>'required',
            'amount'=>'required'
        ]);
        $transaction= new Transaction();
        $transaction->transaction_id= 'IN'.time();
        $transaction->transaction_head_id=$request->transaction_head_id;
        $transaction->client=$request->client_name;
        $transaction->type='Income';
        $transaction->description=$request->description;
        $transaction->date=$request->date;
        $transaction->amount=$request->amount;
        $transaction->save();
        session()->flash('success','Income added successfully');
        return redirect()->route('transaction.index');
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
        $data['title']='Edit transaction';
        $data['transactions']= Transaction::findOrFail($id);
        $data['transaction_heads']=TransactionHead::where('type','Income')->where('status','Active')->pluck('name','id');
        return view('admin.transaction.edit',$data);
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
