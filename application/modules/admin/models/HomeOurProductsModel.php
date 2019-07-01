<?php
class HomeOurProductsModel extends CI_Model
{

	public function updateProductData($data, $image )
	{
		if( empty($data) ) return false;
		$this->db->where( array( 'type' => 'our_products', 'title' => $data['product']) );
		if( $this->db->update( 'home', array( 'images' => $image ))) return true;
		else false;
	}
}