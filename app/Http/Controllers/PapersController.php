<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PapersController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['only' => ['create','edit','store','update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pack = \App\Models\Pack::all()->sortBy('create_at')->get();
        return view('pack',compact('pack'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createPaper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreatePaperRequest $request)
    {
      $paper = \App\Models\Paper::create($request->all());
      $fileName = \Carbon\Carbon::now()->timestamp."_paper.jpg";
      $request->file('path')->move('img', $fileName);
      $paper->path = $fileName;
      $paper->save();
      return redirect('admin#PaperAd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paper = \App\Models\Paper::find($id);
        return view('paper',compact('paper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paper = \App\Models\Paper::find($id);
        return view('editPaper',compact('paper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\UpdatePaperRequest $request, $id)
    {
        $paper = \App\Models\Paper::find($id);
        $paper->fill($request->all());
        if($request->hasFile('path')){
            $paper = \App\Models\Paper::find($id);
            $paper->fill($request->all());
            $fileName = \Carbon\Carbon::now()->timestamp.'_editpaper.jpg';
            $request->file('path')->move('img', $fileName);
            $paper->path = $fileName;
        }
        $paper->save();
        return redirect('admin#PaperAd');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
