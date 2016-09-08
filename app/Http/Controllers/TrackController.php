<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Track;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class TrackController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:34:50am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $tracks = Track::all();
        return view('track.index',compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('track.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $track = new Track();

        
        $track->document_id = $request->document_id;

        
        $track->fromdepartment = $request->fromdepartment;

        
        $track->fromemployee = $request->fromemployee;

        
        $track->todepartment = $request->todepartment;

        
        $track->toemployee = $request->toemployee;

        
        $track->state = $request->state;

        
        $track->remarks = $request->remarks;

        
        
        $track->save();

        return redirect('track');
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
            return URL::to('track/'.$id);
        }

        $track = Track::findOrfail($id);
        return view('track.show',compact('track'));
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
            return URL::to('track/'. $id . '/edit');
        }

        
        $track = Track::findOrfail($id);
        return view('track.edit',compact('track'  ));
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
        $track = Track::findOrfail($id);
    	
        $track->document_id = $request->document_id;
        
        $track->fromdepartment = $request->fromdepartment;
        
        $track->fromemployee = $request->fromemployee;
        
        $track->todepartment = $request->todepartment;
        
        $track->toemployee = $request->toemployee;
        
        $track->state = $request->state;
        
        $track->remarks = $request->remarks;
        
        
        $track->save();

        return redirect('track');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/track/'. $id . '/delete/');

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
     	$track = Track::findOrfail($id);
     	$track->delete();
        return URL::to('track');
    }
}
