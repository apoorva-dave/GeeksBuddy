<?php 

class Model_questions extends CI_Model
{
	public function getQuestionsbyCategory($category_slug)
	{
		if (!$category_slug) {
			return null;		
		}
		$this->db->select('*');
		$this->db->where('category_slug',$category_slug);
		$query=$this->db->get('objective_questions');
		return $query->result();
	}	

}