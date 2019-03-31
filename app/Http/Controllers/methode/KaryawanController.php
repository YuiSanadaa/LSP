<?php

namespace App\Http\Controllers\methode;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class KaryawanController extends Controller
{
    /**\    
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['semuauser'] = User::All();
        return view('admin.karyawan.index')->with($data);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $add = new User;
       $add->name = $r->input('nama');
       $add->username = $r->input('user');
       $add->telp = $r->input('no');
       $add->alamat = $r->input('alm');
       $add->password = bcrypt($r->input('pwd'));

       $add->save();
       return redirect('karyawan');
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
            $user = User::find($id);
        return view('admin.karyawan.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
                $edit = User::find($id);
         $edit->name = $r->input('nama');
       $edit->username = $r->input('user');
       $edit->telp = $r->input('no');
       $edit->alamat = $r->input('alm');
       $edit->password = bcrypt($r->input('pwd'));
       $edit->save();
       return redirect('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = User::find($id);        
        $table->delete();//delete table
        return back();
    }
}
