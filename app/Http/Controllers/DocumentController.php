<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Document;
use Amranidev\Ajaxis\Ajaxis;
use URL;

use App\Purpose;


/**
 * Class DocumentController
 *
 * @author  The scaffold-interface created at 2016-09-08 07:30:45am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        return view('document.index',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        
        $purposes = Purpose::all()->lists('purpose','id');
        
        return view('document.create',compact('purposes'  ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document = new Document();

        
        $document->din = $request->din;

        
        $document->title = $request->title;

        
        $document->description = $request->description;

        
        $document->priority = $request->priority;

        
        $document->type = $request->type;

        
        $document->due = $request->due;

        
        
        $document->purpose_id = $request->purpose_id;

        
        $document->save();

        return redirect('document');
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
            return URL::to('document/'.$id);
        }

        $document = Document::findOrfail($id);
        return view('document.show',compact('document'));
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
            return URL::to('document/'. $id . '/edit');
        }

        
        $purposes = Purpose::all()->lists('purpose','id');

        
        $document = Document::findOrfail($id);
        return view('document.edit',compact('document' ,'purposes' ) );
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
        $document = Document::findOrfail($id);
    	
        $document->din = $request->din;
        
        $document->title = $request->title;
        
        $document->description = $request->description;
        
        $document->priority = $request->priority;
        
        $document->type = $request->type;
        
        $document->due = $request->due;
        
        
        $document->purpose_id = $request->purpose_id;

        
        $document->save();

        return redirect('document');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/document/'. $id . '/delete/');

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
     	$document = Document::findOrfail($id);
     	$document->delete();
        return URL::to('document');
    }
}
