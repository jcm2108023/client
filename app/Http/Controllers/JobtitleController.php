<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobtitle;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class JobtitleController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:14:47am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class JobtitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $jobtitles = Jobtitle::all();
        return view('jobtitle.index',compact('jobtitles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('jobtitle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobtitle = new Jobtitle();

        
        $jobtitle->jobtitle = $request->jobtitle;

        
        $jobtitle->description = $request->description;

        
        
        $jobtitle->save();

        return redirect('jobtitle');
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
            return URL::to('jobtitle/'.$id);
        }

        $jobtitle = Jobtitle::findOrfail($id);
        return view('jobtitle.show',compact('jobtitle'));
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
            return URL::to('jobtitle/'. $id . '/edit');
        }

        
        $jobtitle = Jobtitle::findOrfail($id);
        return view('jobtitle.edit',compact('jobtitle'  ));
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
        $jobtitle = Jobtitle::findOrfail($id);
    	
        $jobtitle->jobtitle = $request->jobtitle;
        
        $jobtitle->description = $request->description;
        
        
        $jobtitle->save();

        return redirect('jobtitle');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/jobtitle/'. $id . '/delete/');

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
     	$jobtitle = Jobtitle::findOrfail($id);
     	$jobtitle->delete();
        return URL::to('jobtitle');
    }
}
