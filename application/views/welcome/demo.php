$filesCount = count($_FILES['userfile']['name']);
	$post="";
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

          $post=$post.","."$image_path";
         
         
          }