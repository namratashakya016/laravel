<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;

class CrudController extends Controller
{
     public function index()
    {
        $cruds = Crud::all();    
        return view('select', compact('cruds'));  
    }

    public function store(Request $request)
    {
        $request->validate([  
            'full_name'=>'required',  
            'email'=>'required',  
            'mobile'=>'required',  
            'designation'=>'required',  
            'organisation'=>'required'  
        ]); 
        $crud = new Crud;  
        $crud->full_name =  $request->full_name;  
        $crud->email = $request->email;  
        $crud->mobile = $request->mobile;  
        $crud->designation = $request->designation;  
        $crud->organisation = $request->organisation;  
        $crud->save();  
        return redirect('show');
        
    }

      public function edit($id)
    {
         $crud =  Crud::find($id); 
         return view('edit', compact('crud')); 
        
    }

    public function update(Request $request)
    {  

        $crud = Crud::find($request['id']);  
        $crud->full_name =  $request->full_name;  
        $crud->email = $request->email;  
        $crud->mobile = $request->mobile;  
        $crud->designation = $request->designation;  
        $crud->organisation = $request->organisation;  
        $crud->save();  

        return back()->with('msg','Data Upated Successfully');
      
    }

    public function delete($id)
    {
         Crud::where('id',$id)->delete(); 
         return redirect('show');  
    }
}
