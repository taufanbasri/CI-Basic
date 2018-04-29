<?php

/**
 * NewsModel
 */
class News_model extends CI_Model
{
	function __construct()
	{
		$this->load->database();
	}

	public function get_news()
	{
		$query = $this->db->get('news');

		return $query->result_array();
	}
}
