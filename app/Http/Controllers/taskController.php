<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\tasks;
use App\User;
use DB;
use Input;
use Session;
use Response;
use Redirect;
use Validator;
use Auth;

class taskController extends Controller
{

    var $data = array();

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //get all task
        $tasks = new tasks;
        $this->data['tasks'] = $tasks->getAllTasks();

        return view('tasks.index',$this->data);
    }

    public function getUserTasks(Request $request)
    {
        //
        $email = $request->get('email');

        // get users individual development tasks
        $usersTask = new tasks;
        $this->data['tasks'] = $usersTask->getIndividualTasks($email);

        return view('tasks.index',$this->data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Session::get('message')) {
            $this->data['message']   = Session::get('message');
        }

        return view('tasks.create',$this->data);
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

        $rules = array('task_title'=>'required','task_description'=>'required');
         // Validation
            $validator = Validator::make(Input::all(), $rules);
        
        if ($validator->fails())    
        {
            return Redirect::to('create-task')->withErrors($validator);
        }   


        $tasks = new tasks;
        if(Auth::check()){
            $tasks->users_id        = Auth::user()->id;
            $tasks->access_role     = Auth::user()->access_role;
        }
         $tasks->task_title         = $request->get('task_title');
         $tasks->task_description   = $request->get('task_description');
         $tasks->status   = $request->get('status');
         $tasks->save(); 

         $this->data['message'] = 'Task successfully added!';
         return view('tasks.create',$this->data);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
