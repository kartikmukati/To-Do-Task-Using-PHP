<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Customer;
use App\ToDoTask;


class AdminController extends Controller
{
    //
    public function getUsers() {

        $customers = DB::table('customers')->get();
        return view('pages.admindashboard')->with('customers', $customers);
    }

    public function getTaskPage(Request $req) {
        return view('pages/assigntask')->with('userId', $req->userId);
    }

    public function postTask(Request $req) {

        $title = $req->title;
        $description = $req->description;
        $trainingname = $req->trainingname;
        $userId = $req->userId;


        if(strlen($title) == 0 || strlen($description) == 0 || strlen($trainingname) == 0 || strlen($userId) == 0 ) {
            Session::put('invalid-details','Please enter valid information');
            return redirect('/admin/getTask/'.$userId);
        } else {
            $toDoUser = new ToDoTask;
            
            $toDoUser->title = $title;
            $toDoUser->description = $description;
            $toDoUser->training_name = $trainingname;
            $toDoUser->user_id = $userId;

            $toDoUser->save();

            Session::put('success-task','You have successfully Assigned task.');
            return redirect('/admin');
        }
    }
}
