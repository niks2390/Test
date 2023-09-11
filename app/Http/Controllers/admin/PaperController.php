<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paper;

class PaperController extends Controller
{
    public function index(){
 
        return view('/admin/paper');
    }
    public function save(Request $request){

        $paper_Data = new Paper;
        $paper_Data->paper_name = $request['paper_name'];
        $paper_Data->question = $request['question'];
        $paper_Data->answer_a = $request['answer_a'];
        $paper_Data->answer_b = $request['answer_b'];
        $paper_Data->answer_c = $request['answer_c'];
        $paper_Data->answer_d = $request['answer_d'];
        $paper_Data->answer = $request['answer'];
        $paper_Data->save();
        

        return redirect('admin/exam_papers');
    }

    public function exam_papers(){
        echo 'this exam papers';   
        $exam_paper = Paper::all();
        echo '<pre>';
        print_r($exam_paper->toArray());
        
    }
}
