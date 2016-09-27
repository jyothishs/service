
<?php
/**
* 
*/
class Loginm extends CI_model
{
	
	public function loginmodel($user)
	{
		$query=$this->db->select('*')
				->from('user_tb')
				->where($user)
				->get();
			$result=$query->result_array();
			#print_r($result);
	
			if ($query->num_rows()==1) 
			{
     $response=array('ResponseCode'=>200,'message'=>'success');
     echo	json_encode($response);

}
 else
{
	$query=$this->db->select('*')
				->from('user_tb')
				->where('mobile_no',$user['mobile_no'])
				->get();
			$result=$query->result_array();
			if ($query->num_rows()==1) 
			{
	
			$response= array('ResponseCode' =>500,'message'=>'passwrd error' );
	            echo	json_encode($response);
			}



         else
         {
         	$response= array('ResponseCode' =>404,'message'=>'paswrd and user name error');
	 echo	json_encode($response);
         }


			}
		}
	}

?>