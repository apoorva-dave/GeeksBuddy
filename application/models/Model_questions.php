<?php 

class Model_questions extends CI_Model
{
	public function getQuestionsbyCategory($category_slug = null)
	{
		if (!$category_slug) {
			return null;		
		}
		$query = $this->db->get('objective_questions');

		return $query->result();
	}	

}