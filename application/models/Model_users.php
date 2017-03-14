<?php 

/**
* 
*/
class Model_users extends CI_Model
{
	// this function hashes Password and returns the hashed password
	public function hashPassword($password){
		$salt = substr(strtr(base64_encode(openssl_random_pseudo_bytes(22)), '+', '.'), 0, 22);
		$hash = crypt($password, '$2y$12$' . $salt);
		return $hash;
	}

	public function insert_user($data){
		if ($query = $this->db->insert('users', $data)) {
			return true;
		}else{
			return false;
		}
	}
	
	public function isValidPassword($email, $password)
		{
			$this->db->where('email', $email);
			$query = $this->db->get('users');

			if ($query->num_rows() == 1) {
				$result  = $query->result();
				// no for each needed as there is only one row in the result.
				$hash =  $result[0]->password;

				if($hash == crypt($password,$hash)){
					return true;
					// user has entered a valid password and email combination
				}else{
					return false;
					// user has entered an invalid password and email combination
				}
			}else{
				return false;
				// user has entered an invalid email.
			}		
		}	


}