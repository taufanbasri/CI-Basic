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

	public function get_news($slug = FALSE)
	{
		if ($slug == FALSE) {
			$query = $this->db->get('news');

			return $query->result_array();
		}

		$query = $this->db->get_where('news', ['slug' => $slug]);

		return $query->row_array();
	}
}
