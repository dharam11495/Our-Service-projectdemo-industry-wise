<?php
  
  class Login extends CI_Controller
  {

  	public function index()
	{
		if($this->session->userdata('level')=="admin"){
		  return redirect('admin/dashboard');
    }elseif($this->session->userdata('level')=="user"){
      return redirect('Welcome/dashboard');
    }
		$this->load->view('login');
	}
  	public function user()
  	{
      // $this->load->view('login');
  		 $this->load->library('form_validation');
         $this->form_validation->set_rules('username','Username','required');
         $this->form_validation->set_rules('password','Password','required|max_length[8]|min_length[3]');
         $this->form_validation->set_error_delimiters("<div style='color:red;'>","</div>");


         if ($this->form_validation->run()) 
         {
         	
         	$uname=$this->input->post('username');
         	$pass=$this->input->post('password');

        	$this->load->model('mymodel');
        
         
            $user_id=$this->mymodel->isvalidatemedical($uname,$pass);
         		if ($user_id) 
         		{


              foreach ($user_id as $row){
              $this->session->set_userdata('username',$row->username);
              $this->session->set_userdata('level',$row->level);
              $this->session->set_userdata('first_name',$row->first_name);
              $this->session->set_userdata('email',$row->email);
               
              }
              // $this->session->set_userdata($data);

              if($this->session->userdata('level')=="admin"){
                return redirect('admin/dashboard');
              }
              elseif($this->session->userdata('level')=="user")
              {
                return redirect('welcome/dashboard');
              }
             
         			
         		 } 
         		 else
         		 {
              $this->session->set_flashdata('Login_Failed','Invalid Username/Password');
         		 	return redirect('login');

         		 }
         }
         else
         {
           $this->load->view('login');
         	
         }
      
  	}
  }
?>