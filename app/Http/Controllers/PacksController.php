<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class PacksController extends Controller
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
        return view('createPack');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreatePackRequest $request)
    {
      $pack = \App\Models\Pack::create($request->all());
      $fileName = \Carbon\Carbon::now()->timestamp."_pack.jpg";
      $request->file('path')->move('img', $fileName);
      $pack->path = $fileName;
      $pack->save();
      return redirect('admin#PackAd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pack = \App\Models\Pack::find($id);
        return view('pack',compact('pack'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pack = \App\Models\Pack::find($id);
        return view('editPack',compact('pack'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\UpdatePackRequest $request, $id)
    {
        $pack = \App\Models\Pack::find($id);
        $pack->fill($request->all());
        if($request->hasFile("img")){
            $fileName = \Carbon\Carbon::now()->timestamp."_editpack.jpg";
            $request->file('path')->move('img', $fileName);
            $pack->path = $fileName;  
        }
        $pack->save();
        return redirect('admin#PackAd');
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
