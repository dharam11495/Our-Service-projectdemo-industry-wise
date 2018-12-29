<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {   

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
		$this->load->view('admin/index');
	}

	function Search()
	{
		
		$this->load->model('mymodel');
		$articles=$this->mymodel->filtertable();
		$res=$this->mymodel->fetchdetailstoshow();
		$grade=$this->mymodel->fetchdetailsgrade();
		$user=$this->mymodel->fetchdetailsuser();
		$this->load->view('admin/show_user_details_filter',['articles'=>$articles,'res'=>$res,'grade'=>$grade,'user'=>$user]);
	}


	function Searchnew()
	{


		$this->load->model('mymodel');
		$res=$this->mymodel->fetchdetailstoshow();
		$articles=$this->mymodel->Searchnew();
		$this->load->view('admin/searchmail',['res'=>$res,'articles'=>$articles]);
		
	}

	function All_Details()
	{
		$this->load->model('Mymodel');
		$company=$this->Mymodel->fetchalldetails();
		echo json_encode($company);  
	}

	public function show()
	{
		$this->load->model('mymodel');
		$articles=$this->mymodel->fetchdetails();
		$res=$this->mymodel->fetchdetailstoshow();
		$grade=$this->mymodel->fetchdetailsgrade();
		$user=$this->mymodel->fetchdetailsuser();
		$this->load->view('admin/show_user_details',['articles'=>$articles,'res'=>$res,'grade'=>$grade,'user'=>$user]);
	}


	public function Editdetails($id)
	{


		$this->load->model('mymodel');
        $article=$this->mymodel->Editdetails($id);
        $this->load->view('admin/edit_details',['article'=>$article]);
    }


  public function import()
 {

			if(isset($_FILES["file"]["name"]))
			{
			$path = $_FILES["file"]["tmp_name"];
			$object = PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
			$highestRow = $worksheet->getHighestRow();
			$highestColumn = $worksheet->getHighestColumn();
			for($row=2; $row<=$highestRow; $row++)
			{
			$company_name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
			$company_type = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
			$city = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
			$address = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
			$pramoter_name = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
			$contact_person_name = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
			$person_type = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
			$contact_person_name1 = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
			$person_type1 = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
			$contact_person_name2 = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
			$person_type2 = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
			$mobile = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
			$email = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
			$image = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
			$image1 = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
			$image2 = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
			$grade = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
			$stage = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
			$intrest_type = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
			$follow_date = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
			$follow_email = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
			$follow_phone = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
			$product_intrest = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
			$remarks = $worksheet->getCellByColumnAndRow(23, $row)->getValue();
			$user_id = $worksheet->getCellByColumnAndRow(24, $row)->getValue();
			$data[] = array(
			'company_name'  => $company_name,
			'company_type'  => $company_type,
			'city'  => $city,
			'address'  => $address,
			'pramoter_name'  => $pramoter_name,
			'contact_person_name'  => $contact_person_name,
			'person_type'  => $person_type,
			'contact_person_name1'  => $contact_person_name1,
			'person_type1'  => $person_type1,
			'contact_person_name2'  => $contact_person_name2,
			'person_type2'  => $person_type2,
			'mobile'  => $mobile,
			'email'  => $email,
			'image'  => $image,
			'image1'  => $image1,
			'image2'  => $image2,
			'grade'  => $grade,
			'stage'  => $stage,
			'intrest_type'  => $intrest_type,
			'follow_date'  => $follow_date,
			'follow_email'  => $follow_email,
			'follow_phone'  => $follow_phone,
			'product_intrest'  => $product_intrest,
			'remarks'  => $remarks,
			'user_id'  => $user_id			
			);
			}
			}
			$this->load->model('mymodel');
			$this->mymodel->insertexcel($data);
			echo 'Data Imported successfully';
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

  	$html_content = "<h4>Greetings from Hitouch Technologies !</h4>
            <p>Many Thank for your precious time and showing interest in our products!</p>
            <p>With Reference to our discussion in IHGF fair regarding our products, I am attaching the product profile as requested.</p><br>
            <p>Many Thank for your precious time and showing interest in our products!</p>
            <p>At the outset, we would like to introduce ourselves as one of the leading ERP solution provider in India - of Manufacturers & Exporters.</p>
            <p>Let us grow together-<a href='http://hitouchtechnologies.com'>http://hitouchtechnologies.com/</a></p><br>
            <p>We look forward to hearing your requirement for our products.</p><br><br>
            <p><b>Wishing you a Good Day !!</b></p><br>

            <h5>Best Regards,</h5><br>
            <h4>Hitouch Technologies</h4>
            <p><b>Mob:8979303439 | Email: info@hitouchtechnologies.com</b></p>
            <p><b>Office:</b></p>
            <p>Hitouch Technologies (P) Ltd.</p>
            <p>C.O: 209, Padam Business Park,Sec 12A,</p>
            <p>Awas Vikas Sikandra Yojna, Agra, U.P.- 282007</p>
            <p><a href='www.hitouchtechnologies.com'>www.hitouchtechnologies.com</a></p>
            <p>Email: info@hitouchtechnologies.com</p>
            <p>Tel:(91)8218638954</p>";
  
  	
  	
  $this->load->library('email');
  $this->load->library('parser');
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


	


	public function Entry()
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
				// $data=$this->upload->data();

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
		 	return redirect('admin/Entry');
		 }
		 else
		 {
		 	$this->load->view('admin/entry_form');
		 }
	
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
		 	return redirect('admin/Entry_textile');
		 }
		 else
		 {
		 	$this->load->view('admin/entryform_textile');
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
		 	return redirect('admin/Entry_Home_furnishing');
		 }
		 else
		 {
		 	$this->load->view('admin/entry_form_home_furnishing');
		 }

		// $this->load->view('welcome/entry_form_home_furnishing');
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
		 	return redirect('admin/Show');



    }else
	  {
	    $this->Editdetails($id);
	    
	  }


	}


	public function Mailsend()
	{

		$data=$this->input->post();
		$this->load->model('mymodel');

		$res=$this->mymodel->fetchdetailstoshow();

		$this->load->view('admin/sendmail',['res'=>$res]);
	}

	public function section_mail()
	{
		$data=$this->input->post();

		
		
		$this->load->view('admin/mailsend',['data'=>$data]);

	}


	public function newmailsend()
	{

		$data=$this->input->post();
		print_r($data);
		exit;
		$email=$this->input->post('email');
		$subject=$this->input->post('subject');
		$html_content=$this->input->post('mailbody');





			$this->load->library('email');
			$this->load->library('parser');
			$this->email->from('sales@hitouchtechnologies.com', 'Hitouch Technologies');
			$this->email->to($email);
			$this->email->reply_to('sales@hitouchtechnologies.com', 'Hitouch Technologies');
			$this->email->subject('Regards Details Document');
			// $this->email->attach($files);
			// $this->email->attach($file);
			$this->email->message($html_content);

			if($this->email->send()){
			$this->session->set_flashdata('user','Mail Sent successfully');
			$this->session->set_flashdata('user_class','alert-success');
			}else{
			$this->session->set_flashdata('user','Not Sent Mail.  PLease Checkit! And Send Again');
			$this->session->set_flashdata('user_class','alert-danger');
			}
			return redirect('admin/section_mail');



	}

	

	 public function __construct()
		{
		parent::__construct();
		// $this->load->model('Mymodel');
		$this->load->library('excel');


		if( ! $this->session->userdata('level')=="admin" )
		return redirect('Login');
		}
	
}
