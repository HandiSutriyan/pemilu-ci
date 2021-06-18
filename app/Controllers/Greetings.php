<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

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
      //dd($id);
      if($event){
        $now = strtotime(Time::now('Asia/Jakarta'));
        $event_start = strtotime($event['event_start']);
        $event_stop = strtotime($event['event_stop']);
        $return = 'errors/not-found';

        //CEK WAKTU
        if($event_start > $now){
          $return = 'errors/soon';
        }else if($event_start < $now && $event_stop > $now) {
          $return = 'errors/timeover';
        }
        $data = [
          'event'=>$event
        ];
        return view($return,$data);

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
