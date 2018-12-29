<?php

class Mymodel extends CI_Model
{

public function isvalidatemedical($username,$password)
{
			$this->db->select('username,password,level,first_name,email');
			$this->db->from('login_users');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$this->db->limit(1);

  			$user_id=$this->db->get();

  			if($user_id->num_rows()==1)
  			{
  				return $user_id->result();
  			}else{
  				return false;
  			}

	            	





}

public function section_mail()
{

	foreach($this->input->post("vehicle") as $day){
    
        }

$this->db->select('email');
$this->db->from('company_reg');
$this->db->where('id',$day);



	$user_id=$this->db->get();


	if($user_id->num_rows()> 0)
  			{
  				return $user_id->result();
  			}else{
  				return false;
  			}

	
}


public function insertcompany($array)
{
	
   

	return $this->db->insert('company_reg',$array);
}

public function insertexcel($data)
{
  $this->db->insert_batch('company_reg', $data);
}

public function fetchalldetails()
{
	$query = $this->db->get('company_reg');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
}


public function updatecompany($article_id,Array $post)
{
	return $this->db->where('id',$article_id)
                     ->update('company_reg',$post);
}

public function Editdetails($articleid)
{
	$q=$this->db->select('*')
            ->where('id',$articleid)
            ->get('company_reg');
            return $q->row();
}

public function fetchdetails()
{
	$this->db->select('*');
	$this->db->from('company_reg');
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}

public function fetchdetailsbyuser()
{ 
	$username=$this->session->userdata('username');
	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where('user_id',$username);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}


public function fetchdetailstoshow()
{
	
	$this->db->select('city');
	$this->db->from('company_reg');
	$this->db->group_by('city');
	
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}

public function fetchdetailsgrade()
{
	
	$this->db->select('grade');
	$this->db->from('company_reg');
	$this->db->group_by('grade');
	
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}


public function fetchdetailsuser()
{
	
	$this->db->select('user_id');
	$this->db->from('company_reg');
	$this->db->group_by('user_id');
	
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}

public function filtertablewelcome()
{
$username=$this->session->userdata('username');
$this->db->where('user_id',$username);

$industry=$this->input->post('industry');
	$city=$this->input->post('city');
	$grade=$this->input->post('grade');
	$username=$this->input->post('username');
	
	if($industry!=null && $city!=null && $grade!=null && $username!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['user_id'=>$username,'company_type'=>$industry,'city'=>$city,'grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}

}elseif($industry!=null && $city!=null && $grade!=null){
	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['company_type'=>$industry,'city'=>$city,'grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}elseif($industry!=null && $city!=null){
	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['company_type'=>$industry,'city'=>$city]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}elseif($industry!=null){
	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['company_type'=>$industry]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}elseif($city!=null && $grade!=null && $username!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['user_id'=>$username,'city'=>$city,'grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}


}elseif($grade!=null && $username!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['user_id'=>$username,'grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}



}elseif($username!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['user_id'=>$username]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}



}elseif($city!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['city'=>$city]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}



}elseif($grade!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}



}

}

public function filtertable()
{
	$industry=$this->input->post('industry');
	$city=$this->input->post('city');
	$grade=$this->input->post('grade');
	$username=$this->input->post('username');
	
	if($industry!=null && $city!=null && $grade!=null && $username!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['user_id'=>$username,'company_type'=>$industry,'city'=>$city,'grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}

}elseif($industry!=null && $city!=null && $grade!=null){
	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['company_type'=>$industry,'city'=>$city,'grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}elseif($industry!=null && $city!=null){
	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['company_type'=>$industry,'city'=>$city]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}elseif($industry!=null){
	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['company_type'=>$industry]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}elseif($city!=null && $grade!=null && $username!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['user_id'=>$username,'city'=>$city,'grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}


}elseif($grade!=null && $username!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['user_id'=>$username,'grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}



}elseif($username!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['user_id'=>$username]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}



}elseif($city!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['city'=>$city]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}



}elseif($grade!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['grade'=>$grade]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}



}

}


public function Searchnew()
{
   $industry=$this->input->post('industry');
	$city=$this->input->post('city');
	$product_intrest=$this->input->post('product_intrest');
	

	
	if($industry!=null && $city!=null && $product_intrest!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['company_type'=>$industry,'city'=>$city,'product_intrest'=>$product_intrest]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}


}elseif($industry!=null && $city!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['company_type'=>$industry,'city'=>$city]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}elseif($city!=null && $product_intrest!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['city'=>$city,'product_intrest'=>$product_intrest]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
	

}elseif($city!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['city'=>$city]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
	

}elseif($product_intrest!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['product_intrest'=>$product_intrest]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
	

}elseif($industry!=null){

	$this->db->select('*');
	$this->db->from('company_reg');
	$this->db->where(['company_type'=>$industry]);
	$rest=$this->db->get();
	if($rest->num_rows() > 0)
	{
	return $rest->result();

	}
}



}


}




?>