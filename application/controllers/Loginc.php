<?php
/**
* 
*/
class Loginc extends CI_controller
{
	
	public function index()
	{
         $user['mobile_no']=$this->input->get_post('email');
         $user['password']=$this->input->get_post('password');
       		#print_r($user);
       		$this->load->model('Loginm');
       		$this->Loginm->loginmodel($user);
	}
}


?>
