<?php namespace App\Controllers;

use App\Libraries\CommonTasks;
use App\Models\GalleryModel;

class Gallery extends BaseController
{
    public $galleryModel;
    public $commonTask;
    public $session;

    public function __construct()
    {
        $this->galleryModel = new GalleryModel();
        $this->commonTask = new CommonTasks();
        $this->session = session();

        helper(['date', 'form']);
    }
    public function jjjj()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        $data['page'] = [
            'title' => 'Gallery',
            'heading' => 'Gallery',
        ];
        $data['photos'] = $this->galleryModel->getAll();
        return view('Admin/galleryAdmin', $data);
    }
    public function events()
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        $data['page'] = [
            'title' => 'events',
            'heading' => 'events',
        ];
        //$data['xxx'] = [3,69,6696,56];

        return view('Admin/events', $data);
    }
//=================Publishing new event====================
    public function index()
    {
        $data = [];
        $data['page'] = [
            'title' => 'Gallery',
            'heading' => 'Gallery',
        ];
        $data['photos'] = $this->galleryModel->getAll();

        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }
        if ($this->request->getMethod() == 'post') {
            // print_r($_FILES);
            // exit;

            // $rules = [
            //     'photo' => 'uploaded[photo]|max_size[photo,1024]|ext_in[photo,png,jpeg,jpg]',
            // ];

            $rules = [
                'photo' => [
                    'label' => 'photo',
                    'rules' => 'uploaded[photo]|max_size[photo,1024]|ext_in[photo,png,jpeg,jpg]',
                    'errors' => [
                        'required' => 'You Must Select A Photo',
                        'max_size' => 'Photo Must  Not Exceed 1 Mb',
                        'ext_in[photo,png,jpeg,jpg]' => 'Invalid Image Format Please Try Again',
                    ],
                ],
            ];

            // if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                $file = $this->request->getFile('photo');
                if ($file->isValid() && !$file->hasMoved()) {
                    $randomName = $file->getRandomName();
                    if ($file->move(FCPATH . '/uploads/gallery/', $randomName)) {

                        $path = base_url() . '/uploads/gallery/' . $randomName;
                        $category = $this->request->getVar('category');
                        $image = [
                            'category' => $category,
                            'url' => $path,
                        ];

                        $upload = $this->galleryModel->saveData($image);
                        if ($upload) {
                            $this->session->setFlashdata('uploaded', 'Photo Uploaded');
                            return redirect()->to(current_url());
                        } else {
                            $this->session->setFlashdata('error', 'Fail to Upload Photo');
                            return redirect()->to(current_url());
                        }
                    }
                } else {

                    $this->session->setFlashdata('error', $file->getErrorString() . '' . $file->getError());
                }
            } else {
                $data['validation'] = $this->validator;
            }

        }
        return view('Admin/galleryAdmin', $data);
    }

    public function deletePhoto($id)
    {
        if (!$this->session->has('loggedUser')) {
            return redirect()->route('login');
        }

        $result = $this->galleryModel->deletePhoto($id);

        if ($result) {
            $this->session->setFlashdata('deleted', 'Photo Deleted');
            return redirect()->to('galleryAdmin');

        }

    }

}