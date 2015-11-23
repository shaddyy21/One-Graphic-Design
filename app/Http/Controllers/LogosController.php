<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class LogosController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createLogo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreateLogoRequest $request)
    {
      $logo = \App\Models\Logo::create($request->all());
      $fileName = \Carbon\Carbon::now()->timestamp."_logo.jpg";
      $request->file('path')->move('img', $fileName);
      $logo->path = $fileName;
      $logo->save();
      return redirect('admin#logoAd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logo = \App\Models\Logo::find($id);
        return view('logo',compact('logo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logo = \App\Models\Logo::find($id);
        return view('editLogo',compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\UpdateLogoRequest $request, $id)
    {
        $logo = \App\Models\Logo::find($id);
        $logo->fill($request->all());
        if($request->hasFile("img")){
            $fileName = \Carbon\Carbon::now()->timestamp."_editlogo.jpg";
            $request->file('path')->move('img', $fileName);
            $logo->path = $fileName;  
        }
        $logo->save();
        return redirect('admin#LogoAd');
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
