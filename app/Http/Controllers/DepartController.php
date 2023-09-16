<?php

namespace App\Http\Controllers;
use App\Models\admin\Depart;

use Illuminate\Http\Request;

class DepartController extends Controller
{
    public function index(Request $request){   
        $search = $request['search'] ?? "";
        if ($search != "") {
                $departmentData = Depart::where('department','LIKE',"%$search%")->orwhere('name','LIKE', "%$search%")->get();
        } else {            
            $departmentData = Depart::all();
        }
         
        $url = url('admin/department');
        $data = compact('departmentData','url','search');
        return view('admin/department')->with($data);
    }

    public function save(Request $request){
        $request->validate(
            [
                'department' => 'required',
                'name' => 'required'
            ]
            );
        $department = new Depart;
        //print $department[''];
        $department->department = $request->department;
        $department->name = $request->name;
        $department->save();
        return redirect('admin/department');
    }
    public function delete($id){
       // echo $id;
        $department = Depart::find($id);
        if(!is_null($department)){
            $department->delete();
        }
        return redirect('admin/department/');
        
    }

    public function edit($id){
        $url =url('admin/department/update').'/'.$id;
        $departmentRow = Depart::find($id);
        // echo '<pre>';
        // print_r($departmentData->toArray());
        //exit();
        
        
        if(is_null($departmentRow)){
           // echo "not found";
            return redirect('admin/department');
        }else{
             
        $departmentData = Depart::all();
        $datas = compact('departmentData');
        $data = compact('departmentRow','departmentData','url');
            // echo 'found data';
             return view('admin/department')->with($data);
        }
    }

    public function update($id, Request $request){
        echo "in update function";
        
        $request->validate(
            [
                'department' => 'required'
            ]
            );
        $department = Depart::find($id);
        //print $department[''];
        $department->department = $request->department;
        $department->save();
        return redirect('admin/department');
    }
}
