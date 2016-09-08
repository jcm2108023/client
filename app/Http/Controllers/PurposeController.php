<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Purpose;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class PurposeController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:21:36am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PurposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $purposes = Purpose::all();
        return view('purpose.index',compact('purposes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('purpose.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $purpose = new Purpose();

        
        $purpose->purpose = $request->purpose;

        
        $purpose->description = $request->description;

        
        
        $purpose->save();

        return redirect('purpose');
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
            return URL::to('purpose/'.$id);
        }

        $purpose = Purpose::findOrfail($id);
        return view('purpose.show',compact('purpose'));
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
            return URL::to('purpose/'. $id . '/edit');
        }

        
        $purpose = Purpose::findOrfail($id);
        return view('purpose.edit',compact('purpose'  ));
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
        $purpose = Purpose::findOrfail($id);
    	
        $purpose->purpose = $request->purpose;
        
        $purpose->description = $request->description;
        
        
        $purpose->save();

        return redirect('purpose');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/purpose/'. $id . '/delete/');

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
     	$purpose = Purpose::findOrfail($id);
     	$purpose->delete();
        return URL::to('purpose');
    }
}
