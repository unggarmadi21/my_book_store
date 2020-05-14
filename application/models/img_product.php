<?php

/**
 * 
 */
class img_product extends CI_Model
{
	private $_table("product_img");

	public function uploadImg()
	{
		$query = "SELECT 'id_img', FROM 'product_img'";

        return $this->db->query($query)->result_array();
	}
	
}