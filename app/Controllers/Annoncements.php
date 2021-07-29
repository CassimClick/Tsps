<?php namespace App\Controllers;

use App\Models\AnnouncementModel;



class Announcements extends BaseController
{
	public $announcementModel;
	public $session;

	public function __construct()
	{
		$this->announcementModel = new AnnouncementModel();
		helper('date');
		$this->session = session();
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
	public function announcements()
	{
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		$data['page']=[
			'title'=>'Announcements',
			'heading'=>'Announcements',
		];

		$data['announcements'] = $this->announcementModel->getAllAnnouncements();

		return view('Admin/announcements',$data);
	}
//=================Publishing new Announcement====================
	public function publishAnnouncement(){
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		if($this->request->getMethod()=='post'){
		
			$announcement = [
				'title'=>$this->request->getVar('title'),
				'date'=>$this->request->getVar('date'),
				'description'=>$this->request->getVar('description'),
			];


			//echo json_encode($announcement);
			$request = $this->announcementModel->saveData($announcement);


			if($request){
				echo json_encode('Announcement Published');
			}else{
				echo json_encode('Something Went Wrong');
			}
			
		}
	}
	//=================Update existing announcement====================
	public function updateAnnouncement(){
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		if($this->request->getMethod()=='post'){
		     $theId = $this->request->getVar('theId');
			$announcement = [
				'title'=>$this->request->getVar('title'),
				'date'=>$this->request->getVar('date'),
				'description'=>$this->request->getVar('description'),
			];


			//echo json_encode($announcement);
			$request = $this->announcementModel->updateAnnouncement($theId,$announcement);


			if($request){
				echo json_encode('Announcement Updated');
			}else{
				echo json_encode('Something Went Wrong');
			}
			
		}
	}

	public function viewSingleAnnouncement(){
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		 if($this->request->getMethod()== 'post'){
			 $announcementId = $this->request->getVar('id');
			 $result = $this->announcementModel->singleAnnouncement($announcementId);
			 
			 echo json_encode($result);

			 
		 }
	}
	public function deleteAnnouncement(){
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		 if($this->request->getMethod()== 'post'){
			 $announcementId = $this->request->getVar('id');
			 $result = $this->announcementModel->deleteAnnouncement($announcementId);
			 
			 echo json_encode('Announcement Deleted...');

			 
		 }
	}

	
	public function events()
	{
		if(!$this->session->has('loggedUser')){
            return redirect()->route('login');
               }
		$data['page']=[
			'title'=>'Events',
			'heading'=>'Events',
		];
		return view('Admin/events',$data);
	}

	

	
	

	

}