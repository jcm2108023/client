<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Client;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class ClientController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:18:11am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();

        
        $client->eid = $request->eid;

        
        $client->name = $request->name;

        
        $client->mobile = $request->mobile;

        
        $client->email = $request->email;

        
        $client->department_id = $request->department_id;

        
        $client->position_id = $request->position_id;

        
        $client->user_id = $request->user_id;

        
        
        $client->save();

        return redirect('client');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('client/'.$id);
        }

        $client = Client::findOrfail($id);
        return view('client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('client/'. $id . '/edit');
        }

        
        $client = Client::findOrfail($id);
        return view('client.edit',compact('client'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $client = Client::findOrfail($id);
    	
        $client->eid = $request->eid;
        
        $client->name = $request->name;
        
        $client->mobile = $request->mobile;
        
        $client->email = $request->email;
        
        $client->department_id = $request->department_id;
        
        $client->position_id = $request->position_id;
        
        $client->user_id = $request->user_id;
        
        
        $client->save();

        return redirect('client');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/client/'. $id . '/delete/');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$client = Client::findOrfail($id);
     	$client->delete();
        return URL::to('client');
    }
}
