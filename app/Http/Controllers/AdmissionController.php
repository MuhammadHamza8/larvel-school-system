<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admissions = Admission::latest()->paginate(5);
    
        return view('admin.admissions.index',compact('admissions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);


        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return View('admin.admissions.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        
        $request->validate([
            'std_name' => 'required',
            'std_age' => 'required',
            'std_adress' => 'required',
       
        ]);
    
        Admission::create($request->all());
     
        return redirect()->route('admissions.index')
                        ->with('success','admission created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
        return view('admin.admissions.show',compact('admission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        //

        return view('admin.admissions.edit',compact('admission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        //

        $request->validate([
            'std_name' => 'required',
            'std_age' => 'required',
            'std_adress' => 'required',
            
        ]);
        $admission->update($request->all());
    
        return redirect()->route('admissions.index')
                        ->with('success','admission  updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        //
        $admission->delete();
    
        return redirect()->route('admissions.index')
                        ->with('success','admission deleted successfully');
    }
}
