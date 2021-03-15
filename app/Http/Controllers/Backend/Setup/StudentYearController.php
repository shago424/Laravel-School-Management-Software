<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\StudentYear;
use DB;

class StudentYearController extends Controller

{
     public function view(){
    	$data['alldata'] = StudentYear::all();
    	
    return view('backend.setup.studentyear.view-year',$data);
    }
    
    public function add(){

    	return view('backend.setup.studentyear.add-year');
    }
    
     public function store(Request $request){

        $this->validate($request,[
            'name'=>'unique:student_years,name'

        ]);

    	$data = new StudentYear();
    	$data->name = $request->name;
    	$data->save();

    	return redirect()->route('years.student.year.view')->with('success','Data Inserted Successfully');
    }
        
        public function edit($id){
            $editdata = StudentYear::find($id);
            return view('backend.setup.studentyear.add-year',compact('editdata'));

        }

        public function update(Request $request,$id){
            $data = StudentYear::find($id);
             $this->validate($request,[
            'name'=>'unique:student_years,name,'.$data->id
        ]);
        $data->name = $request->name;
        $data->save();

    return redirect()->route('years.student.year.view')->with('success','Data Updated Successfully');

    }

          public function delete(Request $request){
            $data = StudentYear::find($request->id); 
             $data->delete();
            return redirect()->route('years.student.year.view')->with('success','Data Deleted Successfully');


     }  
}
