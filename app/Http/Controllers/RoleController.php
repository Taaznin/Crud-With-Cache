<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Cache;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sl']= 1;
        $data['role'] = Role::get();
        
        $roles = Cache::rememberForever('role', function () {
            return Role::all();
      });

        return view('role.rolelist',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.create');
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
            'role' => 'required'
        ]);

        $input = [
            'role' =>$request->role
        ];
        Role::create($input);
        return redirect()->route('role.create')->with('msg', 'Success,Data Inserted');
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
        $data['role'] = Role::find($id);
        return view('role.edit',$data);
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
       $request->validate([
            'role' => 'required'
        ]);

        $input = [
            'role' => $request->role
        ];

        Role::where('id', $id)->update($input);
        return redirect()->route('role.edit', $id)->with('msg', 'Success,Data Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::where('id', $id)->delete();
        return redirect()->route('role.index');
    }
}
