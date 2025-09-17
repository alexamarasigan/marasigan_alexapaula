<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: UsersController
 * 
 * Automatically generated via CLI.
 */
class UsersController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $page = $this->io->get('page');
        if (!$page || !is_numeric($page) || $page < 1) {
            $page = 1;
        }
        $per_page = 10; // Number of users per page

        // Get paginated users data
        $pagination_data = $this->UsersModel->paginate($per_page, $page);

        // Load Pagination library and initialize
        $this->call->library('Pagination');
        $pagination = new Pagination();
        $pagination->set_theme('tailwind');
        $pagination->set_options(['page_delimiter' => '?page=']);
        $pagination_array = $pagination->initialize(
            $pagination_data['total'],
            $per_page,
            $page,
            'users/index'
        );

        $data['users'] = $pagination_data['data'];
        $data['pagination'] = $pagination->paginate();

        $this->call->view('users/index', $data);
    }
    
   public function create()
   {
        if($this->io->method()== 'post')
            {
           $first_name = $this->io->post('first_name');
           $last_name  = $this->io->post('last_name');
           $email      = $this->io->post('email');


        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
        );

       if ($this->UsersModel->insert($data)) {
            redirect();
       } else {
         echo "Error";
       }
    } else {
            $this->call->view('users/create');
        }        
    }

    function update($id)
    {
        $user = $this-> UsersModel->find($id);
    if(!$user)
    {
        echo "User not found";
        return;
    }
        if($this->io->method()=='post')
        {
            $first_name = $this->io->post('first_name');
            $last_name = $this->io->post('last_name');
            $email = $this->io->post('email');

            $data=array('first_name' => $first_name, 'last_name' => $last_name,
            'email' => $email);

            if($this->UsersModel->update($id, $data))
            {
                redirect();
            }
            else {
                echo "error updating";
            }
        }
        else
        {
            $data['user'] = $user;
            $this->call->view('users/update', $data);
        }
    }

    function delete($id)
    {
        if($this->UsersModel->delete($id))
        {
            redirect();
        }
        else{
            echo "Error deleteng";
        }
    }
    
}