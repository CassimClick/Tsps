<?php namespace App\Controllers;

use App\Models\EventsModel;
use App\Libraries\CommonTasks;



class Events extends BaseController
{
	public $eventModel;
	public $commonTask;
	public $session;

	public function __construct()
	{
		$this->eventModel = new EventsModel();
		$this->commonTask = new CommonTasks();
		$this->session = session();

		helper(['date','form']);
	}
	public function dashBoard()
	{
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		$data['page']=[
			'title'=>'Admin Dashboard',
			'heading'=>'Admin Dashboard',
		];
		return view('Admin/admin',$data);
	}
	public function events()
	{
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		$data['page']=[
			'title'=>'events',
			'heading'=>'events',
		];
		//$data['xxx'] = [3,69,6696,56];

		$data['events'] = $this->eventModel->getAllEvents();

		return view('Admin/events',$data);
	}
//=================Publishing new event====================
	public function publishEvent(){
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		if($this->request->getMethod()=='post'){
		  $file = $this->request->getFile('image-file');

		  if($file == ''){
			$event = [
				'title'=>$this->request->getVar('title'),
				'date'=>$this->request->getVar('date'),
				'description'=>$this->request->getVar('description'),
				'image_url'=>'',
			];

			$request = $this->eventModel->saveData($event);

			if($request){
				echo('event Published');
			}else{
				echo('Something Went Wrong');
			}  
		  }else{
			$event = [
				'title'=>$this->request->getVar('title'),
				'date'=>$this->request->getVar('date'),
				'description'=>$this->request->getVar('description'),
				'image_url'=>$this->commonTask->processFile($file),
			];

			$request = $this->eventModel->saveData($event);

			if($request){
				echo('event Published');
			}else{
				echo('Something Went Wrong');
			}
			
		  }

	
		  
		
			
		}
		return redirect()->to('events');
	//return view('Admin/events');
	}
//=================All events====================
	public function allEvents(){
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		$data['page']=[
			'title'=>'All Events',
			'heading'=>' All Events',
		];
		//$data['xxx'] = [3,69,6696,56];

		$data['allEvents'] = $this->eventModel->getAllEvents();

		return view('Pages/allEvents',$data);
	}
//=================get a single event events====================
	public function singleEvent($id){
		$data['page']=[
			'title'=>'Event',
			'heading'=> 'Event',
		];
		

	$data['theEvent'] = $this->eventModel->getSingleEvent($id);

		return view('pages/singleEvent',$data);
	}
	//=================Update existing event====================
	public function updateEvent(){
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		if($this->request->getMethod()=='post'){
		     $theId = $this->request->getVar('theId');
			$event = [
				'title'=>$this->request->getVar('title'),
				'date'=>$this->request->getVar('date'),
				'description'=>$this->request->getVar('description'),
			];


			//echo json_encode($event);
			$request = $this->eventModel->updateEvent($theId,$event);


			if($request){
				echo json_encode('event Updated');
			}else{
				echo json_encode('Something Went Wrong');
			}
			
		}
	}

	public function viewSingleEvent(){
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		 if($this->request->getMethod()== 'post'){
			 $eventId = $this->request->getVar('id');
			 $result = $this->eventModel->singleEvent($eventId);
			 
			 echo json_encode($result);

			 
		 }
	}
	public function deleteEvent(){
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		 if($this->request->getMethod()== 'post'){
			 $eventId = $this->request->getVar('id');
			 $result = $this->eventModel->deleteEvent($eventId);
			 
			 echo json_encode('event Deleted...');

			 
		 }
	}

	
	// public function events()
	// {
	// 	$data['page']=[
	// 		'title'=>'Events',
	// 		'heading'=>'Events',
	// 	];
	// 	return view('Admin/events',$data);
	// }

	

	
	

	

}