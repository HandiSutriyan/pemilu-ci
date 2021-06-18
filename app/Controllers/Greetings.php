<?php

namespace App\Controllers;
use App\Models\EventModel;

class Greetings extends BaseController
{
  public function __construct(){
		$this->eventModel = new EventModel();
  }
  
  public function index()
	{
		//return view('welcome_message');
    }
    public function notfound()
	{
		return view('errors/not-found');
    }
    public function timeover($id=NULL){
      $event = $this->eventModel->where(['event_id' => $id])->first(); 
      if($event){
        $data = [
          'event'=>$event
        ];
        return view('errors/timeover',$data);
      }else{
        return view('errors/not-found');
      }
    }

    public function forbidden(){
		return view('errors/forbidden');
    }

    public function voted(){
      $data = [
        'session'=> session()->user_name
      ];
      return view('errors/voted',$data);
	}
}
