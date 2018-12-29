<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function dashboard()
	{
		$this->load->view('welcome/index');
	}
	public function Entry()
	{


		

	     

		 if ($post=$this->input->post()) { 

		 		
		 		

		 		$filesCount = count($_FILES['userfile']['name']);
				$post1="";
				for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['userfile']['name'][$i];
				$_FILES['file']['type']     = $_FILES['userfile']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'][$i];
				$_FILES['file']['error']     = $_FILES['userfile']['error'][$i];
				$_FILES['file']['size']     = $_FILES['userfile']['size'][$i];


				date_default_timezone_set("Asia/Kolkata");
				$config['upload_path'] = './upload/';
				$config['allowed_types']        = 'gif|jpg|png';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$this->upload->do_upload('file');
				// $data=$this->upload->data();

				$data['upload'][$i] = $this->upload->data();
				$upload_data=$data['upload'][$i];
				$image_path= base_url("upload/".$upload_data['raw_name'].$upload_data['file_ext']);

				$post1=$post1.","."$image_path";


				}

				$myArray = explode(',',$post1); 
				$doc1 = $myArray[0]; 
				$doc2 = $myArray[1]; 
				$doc3 = $myArray[2]; 
				$doc4 =  $myArray[3]; 



				$post=$this->input->post();

				$post['image'] = $doc2;
				$post['image1'] = $doc3;
				$post['image2'] = $doc4;
		 	
		 	$this->load->model('mymodel');
		 	if ($this->mymodel->insertcompany($post)) {
		 		// echo "done";
				$this->session->set_flashdata('user','Submit successfully');
				$this->session->set_flashdata('user_class','alert-success');
		 	}
		 	else
		 	{	
		 		// echo "not";

				$this->session->set_flashdata('user','Not Sumbit!!!');
				$this->session->set_flashdata('user_class','alert-success');
		 	}
		 	return redirect('welcome/Entry');
		 }
		 else
		 {
		 	$this->load->view('welcome/entry_form');
		 }
	
	}





	 public function mycontroller()
  {
  	$message='Company Profile';
  	$email=$this->input->post('email_send');
    $files='assets/document/company_profile.pdf';
  	$file='assets/document/product_profile.pdf';

  	$html_content = '<h4>Greetings from Hitouch Technologies !</h4>
            <p>Many Thank for your precious time and showing interest in our products!</p>
            <p>With Reference to our discussion in IHGF fair regarding our products, I am attaching the product profile as requested.</p><br>
            <p>Many Thank for your precious time and showing interest in our products!</p>
            <p>At the outset, we would like to introduce ourselves as one of the leading ERP solution provider in India - of Manufacturers & Exporters.</p>
            <p>Let us grow together-<a href="http://hitouchtechnologies.com">http://hitouchtechnologies.com/</a></p><br>
            <p>We look forward to hearing your requirement for our products.</p><br><br>
            <p><b>Wishing you a Good Day !!</b></p><br>

            <h5>Best Regards,</h5><br>
            <h4>Hitouch Technologies</h4>
            <p><b>Mob:8979303439 | Email: info@hitouchtechnologies.com</b></p>
            <p><b>Office:</b></p>
            <p>Hitouch Technologies (P) Ltd.</p>
            <p>C.O: 209, Padam Business Park,Sec 12A,</p>
            <p>Awas Vikas Sikandra Yojna, Agra, U.P.- 282007</p>
            <p><a href="www.hitouchtechnologies.com">www.hitouchtechnologies.com</a></p>
            <p>Email: info@hitouchtechnologies.com</p>
            <p>Tel:(91)8218638954</p>
            ';
  
  	
  	
  $this->load->library('email');
  $this->email->from('sales@hitouchtechnologies.com', 'Hitouch Technologies');
  $this->email->to($email);
  $this->email->reply_to('sales@hitouchtechnologies.com', 'Hitouch Technologies');
  $this->email->subject('Regards Details Document');
  $this->email->attach($files);
  $this->email->attach($file);
  $this->email->message($html_content);
 
  if($this->email->send()){
         $this->session->set_flashdata('user','Mail Sent successfully');
         $this->session->set_flashdata('user_class','alert-success');
  }else{
  	$this->session->set_flashdata('user','Not Sent Mail.  PLease Checkit! And Send Again');
    $this->session->set_flashdata('user_class','alert-danger');
  }
  return redirect('admin/Entry');
 
  
}



public function mycontrollertextile()
  {
  	$message='Company Profile';
  	$email=$this->input->post('email_send');
  $files='assets/document/company_profile.pdf';
  	$file='assets/document/product_profile.pdf';

  	$html_content = '<h4>Greetings from Hitouch Technologies !</h4>
            <p>Many Thank for your precious time and showing interest in our products!</p>
            <p>With Reference to our discussion in IHGF fair regarding our products, I am attaching the product profile as requested.</p><br>
            <p>Many Thank for your precious time and showing interest in our products!</p>
            <p>At the outset, we would like to introduce ourselves as one of the leading ERP solution provider in India - of Manufacturers & Exporters.</p>
            <p>Let us grow together-<a href="http://hitouchtechnologies.com">http://hitouchtechnologies.com/</a></p><br>
            <p>We look forward to hearing your requirement for our products.</p><br><br>
            <p><b>Wishing you a Good Day !!</b></p><br>

            <h5>Best Regards,</h5><br>
            <h4>Hitouch Technologies</h4>
            <p><b>Mob:8979303439 | Email: info@hitouchtechnologies.com</b></p>
            <p><b>Office:</b></p>
            <p>Hitouch Technologies (P) Ltd.</p>
            <p>C.O: 209, Padam Business Park,Sec 12A,</p>
            <p>Awas Vikas Sikandra Yojna, Agra, U.P.- 282007</p>
            <p><a href="www.hitouchtechnologies.com">www.hitouchtechnologies.com</a></p>
            <p>Email: info@hitouchtechnologies.com</p>
            <p>Tel:(91)8218638954</p>
            ';
  
  	
  	
  $this->load->library('email');
  $this->email->from('sales@hitouchtechnologies.com', 'Hitouch Technologies');
  $this->email->to($email);
  $this->email->reply_to('sales@hitouchtechnologies.com', 'Hitouch Technologies');
  $this->email->subject('Regards Details Document');
  $this->email->attach($files);
  $this->email->attach($file);
  $this->email->message($html_content);
 
  if($this->email->send()){
         $this->session->set_flashdata('user','Mail Sent successfully');
         $this->session->set_flashdata('user_class','alert-success');
  }else{
  	$this->session->set_flashdata('user','Not Sent Mail.  PLease Checkit! And Send Again');
    $this->session->set_flashdata('user_class','alert-danger');
  }
  return redirect('admin/Entry_textile');
  
}







	public function mycontrollerhomefurnishing()
  {
  	$message='Company Profile';
  	$email=$this->input->post('email_send');
  	$files='assets/document/company_profile.pdf';
  	$file='assets/document/product_profile.pdf';

  	$html_content = '<h4>Greetings from Hitouch Technologies !</h4>
            <p>Many Thank for your precious time and showing interest in our products!</p>
            <p>With Reference to our discussion in IHGF fair regarding our products, I am attaching the product profile as requested.</p><br>
            <p>Many Thank for your precious time and showing interest in our products!</p>
            <p>At the outset, we would like to introduce ourselves as one of the leading ERP solution provider in India - of Manufacturers & Exporters.</p>
            <p>Let us grow together-<a href="http://hitouchtechnologies.com">http://hitouchtechnologies.com/</a></p><br>
            <p>We look forward to hearing your requirement for our products.</p><br><br>
            <p><b>Wishing you a Good Day !!</b></p><br>

            <h5>Best Regards,</h5><br>
            <h4>Hitouch Technologies</h4>
            <p><b>Mob:8979303439 | Email: info@hitouchtechnologies.com</b></p>
            <p><b>Office:</b></p>
            <p>Hitouch Technologies (P) Ltd.</p>
            <p>C.O: 209, Padam Business Park,Sec 12A,</p>
            <p>Awas Vikas Sikandra Yojna, Agra, U.P.- 282007</p>
            <p><a href="www.hitouchtechnologies.com">www.hitouchtechnologies.com</a></p>
            <p>Email: info@hitouchtechnologies.com</p>
            <p>Tel:(91)8218638954</p>
            ';
  
  	
  	
  $this->load->library('email');
  $this->email->from('sales@hitouchtechnologies.com', 'Hitouch Technologies');
  $this->email->to($email);
  $this->email->reply_to('sales@hitouchtechnologies.com', 'Hitouch Technologies');
  $this->email->subject('Regards Details Document');
  $this->email->attach($files);
  $this->email->attach($file);
  $this->email->message($html_content);
 
  if($this->email->send()){
         $this->session->set_flashdata('user','Mail Sent successfully');
         $this->session->set_flashdata('user_class','alert-success');
  }else{
  	$this->session->set_flashdata('user','Not Sent Mail.  PLease Checkit! And Send Again');
    $this->session->set_flashdata('user_class','alert-danger');
  }
  return redirect('admin/Entry_Home_furnishing');
  
}







	public function Entry_textile()
	{


		  $this->form_validation->set_rules('company_name','Company Name','required');
		 $this->form_validation->set_rules('city','City Name','required');
		 $this->form_validation->set_rules('address','Address','required');
		 $this->form_validation->set_rules('pramoter_name','Pramoter Name','required');
		 $this->form_validation->set_rules('contact_person_name','Contact Person','required');
		 $this->form_validation->set_rules('person_type','Contact Person Type','required');
		 $this->form_validation->set_rules('mobile','Mobile','required');
		 $this->form_validation->set_rules('email','Email','required');
		 $this->form_validation->set_rules('grade','grade','required');
		 $this->form_validation->set_rules('stage','stage','required');
		 $this->form_validation->set_rules('intrest_type','intrest type','required');
		 $this->form_validation->set_rules('follow_date','date','required');
		 $this->form_validation->set_rules('product_intrest','Product Intrest','required');
		 $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		 if ($post=$this->input->post()) {

		 		
		 		

		 		$filesCount = count($_FILES['userfile']['name']);
				$post1="";
				for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['userfile']['name'][$i];
				$_FILES['file']['type']     = $_FILES['userfile']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'][$i];
				$_FILES['file']['error']     = $_FILES['userfile']['error'][$i];
				$_FILES['file']['size']     = $_FILES['userfile']['size'][$i];

				date_default_timezone_set("Asia/Kolkata");
				$config['upload_path'] = './upload/';
				$config['allowed_types']        = 'gif|jpg|png';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$this->upload->do_upload('file');
				

				$data['upload'][$i] = $this->upload->data();
				$upload_data=$data['upload'][$i];
				$image_path= base_url("upload/".$upload_data['raw_name'].$upload_data['file_ext']);

				$post1=$post1.","."$image_path";


				}		 	 
		 	$myArray = explode(',',$post1); 
			$doc1= $myArray[0]; 
			$doc2 = $myArray[1]; 
			$doc3 = $myArray[2]; 
			$doc4 =  $myArray[3]; 



		 	 $post=$this->input->post();

		 	 $post['image'] = $doc2;
		 	 $post['image1'] = $doc3;
		 	 $post['image2'] = $doc4;
		 	
		 	
		 	$this->load->model('mymodel');
		 	if ($this->mymodel->insertcompany($post)) {
		 		// echo "done";
				$this->session->set_flashdata('user','Submit successfully');
				$this->session->set_flashdata('user_class','alert-success');
		 	}
		 	else
		 	{	
		 		// echo "not";

				$this->session->set_flashdata('user','Not Sumbit!!!');
				$this->session->set_flashdata('user_class','alert-success');
		 	}
		 	return redirect('welcome/Entry_textile');
		 }
		 else
		 {
		 	$this->load->view('welcome/entryform_textile');
		 }
	
		// $this->load->view('welcome/entryform_textile');
	}

   public function Entry_Home_furnishing()
	{


		  $this->form_validation->set_rules('company_name','Company Name','required');
		 $this->form_validation->set_rules('city','City Name','required');
		 $this->form_validation->set_rules('address','Address','required');
		 $this->form_validation->set_rules('pramoter_name','Pramoter Name','required');
		 $this->form_validation->set_rules('contact_person_name','Contact Person','required');
		 $this->form_validation->set_rules('person_type','Contact Person Type','required');
		 $this->form_validation->set_rules('mobile','Mobile','required');
		 $this->form_validation->set_rules('email','Email','required');
		 $this->form_validation->set_rules('grade','grade','required');
		 $this->form_validation->set_rules('stage','stage','required');
		 $this->form_validation->set_rules('intrest_type','intrest type','required');
		 $this->form_validation->set_rules('follow_date','date','required');
		 $this->form_validation->set_rules('product_intrest','Product Intrest','required');
		 $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		 if ($post=$this->input->post()) {

		 		
		 		

		 		$filesCount = count($_FILES['userfile']['name']);
				$post1="";
				for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['userfile']['name'][$i];
				$_FILES['file']['type']     = $_FILES['userfile']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'][$i];
				$_FILES['file']['error']     = $_FILES['userfile']['error'][$i];
				$_FILES['file']['size']     = $_FILES['userfile']['size'][$i];

				date_default_timezone_set("Asia/Kolkata");
				$config['upload_path'] = './upload/';
				$config['allowed_types']        = 'gif|jpg|png';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$this->upload->do_upload('file');
				

				$data['upload'][$i] = $this->upload->data();
				$upload_data=$data['upload'][$i];
				$image_path= base_url("upload/".$upload_data['raw_name'].$upload_data['file_ext']);

				$post1=$post1.","."$image_path";


				}		 	 
		 	$myArray = explode(',',$post1); 
			$doc1= $myArray[0]; 
			$doc2 = $myArray[1]; 
			$doc3 = $myArray[2]; 
			$doc4 =  $myArray[3]; 



		 	 $post=$this->input->post();

		 	 $post['image'] = $doc2;
		 	 $post['image1'] = $doc3;
		 	 $post['image2'] = $doc4;
		 	
		 	
		 	$this->load->model('mymodel');
		 	if ($this->mymodel->insertcompany($post)) {
		 		// echo "done";
				$this->session->set_flashdata('user','Submit successfully');
				$this->session->set_flashdata('user_class','alert-success');
		 	}
		 	else
		 	{	
		 		// echo "not";

				$this->session->set_flashdata('user','Not Sumbit!!!');
				$this->session->set_flashdata('user_class','alert-success');
		 	}
		 	return redirect('welcome/Entry_Home_furnishing');
		 }
		 else
		 {
		 	$this->load->view('welcome/entry_form_home_furnishing');
		 }

		// $this->load->view('welcome/entry_form_home_furnishing');
	}


	public function Editdetails($id)
	{


		$this->load->model('mymodel');
        $article=$this->mymodel->Editdetails($id);
        $this->load->view('welcome/edit_details',['article'=>$article]);
    }

	
	function Search()
	{
		
		$this->load->model('mymodel');
		$articles=$this->mymodel->filtertablewelcome();
		$res=$this->mymodel->fetchdetailstoshow();
		$grade=$this->mymodel->fetchdetailsgrade();
		$user=$this->mymodel->fetchdetailsuser();
		$this->load->view('welcome/show_user_details_filter',['articles'=>$articles,'res'=>$res,'grade'=>$grade,'user'=>$user]);
	}

	public function show()
	{
		$this->load->model('mymodel');
		$articles=$this->mymodel->fetchdetailsbyuser();
		$res=$this->mymodel->fetchdetailstoshow();
		$grade=$this->mymodel->fetchdetailsgrade();
		$user=$this->mymodel->fetchdetailsuser();
		$this->load->view('welcome/show_user_details',['articles'=>$articles,'res'=>$res,'grade'=>$grade,'user'=>$user]);
	}


	public function update($article_id)
	{


		 if ($post=$this->input->post()) {


		       $filesCount = count($_FILES['userfile']['name']);
				$post1="";
				for($i = 0; $i < $filesCount; $i++){
				$_FILES['file']['name']     = $_FILES['userfile']['name'][$i];
				$_FILES['file']['type']     = $_FILES['userfile']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['userfile']['tmp_name'][$i];
				$_FILES['file']['error']     = $_FILES['userfile']['error'][$i];
				$_FILES['file']['size']     = $_FILES['userfile']['size'][$i];

				date_default_timezone_set("Asia/Kolkata");
				$config['upload_path'] = './upload/';
				$config['allowed_types']        = 'gif|jpg|png';

				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				$this->upload->do_upload('file');
				

				$data['upload'][$i] = $this->upload->data();
				$upload_data=$data['upload'][$i];
				$image_path= base_url("upload/".$upload_data['raw_name'].$upload_data['file_ext']);

				$post1=$post1.","."$image_path";


				}


			$myArray = explode(',',$post1); 
			$doc1= $myArray[0]; 
			$doc2 = $myArray[1]; 
			$doc3 = $myArray[2]; 
			$doc4 =  $myArray[3]; 



		 	 $post=$this->input->post();
		 	 $email=$this->input->post('follow_email');
		 	 $phone=$this->input->post('follow_phone');
		 	if($doc2 != 'http://localhost/Anup-Sir-Project/upload/'){
		 	 $post['image'] = $doc2;
		 	}
		 	if($doc3 != 'http://localhost/Anup-Sir-Project/upload/'){
		 	 $post['image1'] = $doc3;
		 	}
		if($doc4 != 'http://localhost/Anup-Sir-Project/upload/'){
		 	 $post['image2'] = $doc4;
		 	}

		 	if($email != 'email'){
		 		$post['follow_email'] = null;
		 	}

		 	if($phone != 'phone'){
		 		$post['follow_phone'] = null;
		 	}
		
		

		$this->load->model('mymodel');
		 	if ($this->mymodel->updatecompany($article_id,$post)) {
		 		// echo "done";
				$this->session->set_flashdata('user','Update successfully');
				$this->session->set_flashdata('user_class','alert-success');
		 	}
		 	else
		 	{	
		 		// echo "not";

				$this->session->set_flashdata('user','Not Update!!!');
				$this->session->set_flashdata('user_class','alert-success');
		 	}
		 	return redirect('Welcome/Show');



    }else
	  {
	    $this->Editdetails($id);
	    
	  }


	}
	
	public function logout()
	  {
	    $this->session->unset_userdata('level');
	    $this->session->unset_userdata('username');
	    $this->session->unset_userdata('first_name');
	    $this->session->unset_userdata('email');
	    return redirect('Login');
	  }

	  public function __construct()
		{
		parent::__construct();
		// $this->load->model('Mymodel');

		if( ! $this->session->userdata('level')=="user" )
		return redirect('Login');
		}
}
