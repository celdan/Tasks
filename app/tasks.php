<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class tasks extends Model
{
    //
    protected $table = "tasks";

    protected $fillable = ['user_id', 'access_role','task_title','task_description','status'];
	var $data = array();
    
    public function getAllTasks(){
    		$this->data = DB::table('tasks')
		            ->join('users', 'tasks.users_id', '=', 'users.id')
		            ->join('roles', 'tasks.access_role', '=', 'roles.id')
		            ->select('tasks.id as task_id','users.id as users_id','roles.id as roles.id','tasks.created_at as tasks_created_at','tasks.*','users.*','roles.*')
		            ->get();
    	return $this->data;
    }

    public function getIndividualTasks($email){
    		$this->data = DB::table('tasks')
		            ->join('users', 'tasks.users_id', '=', 'users.id')
		            ->join('roles', 'tasks.access_role', '=', 'roles.id')
					->select('tasks.id as task_id','users.id as users_id','roles.id as roles.id','tasks.created_at as tasks_created_at','tasks.*','users.*','roles.*')		            ->where('email','=',$email)
		            ->get();
    	return $this->data;
    }
}
