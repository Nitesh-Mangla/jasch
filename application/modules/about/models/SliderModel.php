<?php

class SliderModel extends CI_Model
{

	public function fetchData( $id = '' )
	{
		if( !empty($id) ) $this->db->where( array( 'id' => $id, 'status' => 0, 'type' => 'silder') );
		else $this->db->where( array('status' => 0, 'type' => 'silder'));		
		return $this->db->get('about_us')->result_array();
	}

	public function insertSliderData( $data, $image )
	{
		if( empty($data) ) return false;

		$status = $this->db->insert('about_us', array('type' => 'silder', 'images' => $image, 'description' => $data['desc'] ));

		if( $status ) return true;
		else false;
	}

	// updating slider data

	public function updateSliderData( $data, $image )
	{

		if( empty($data) ) return false;
		$this->db->where(  array( 'id' => $data['id'], 'type' => 'silder' ));
		if( !empty( $image ) )
		{
			
			$status = $this->db->update('about_us', array( 'images' => $image, 'description' => $data['desc']) );
		}
		else
		{
			$status = $this->db->update('about_us', array( 'description' => $data['desc']) );	
		}

		if( $status ) return true;
		else false;
	}

	public function deleteSlider( $id )
	{
			$this->db->where('id', $id);
			if( $this->db->update( 'about_us', array('status' => 1) ) ) return true;
			else false;
	}
}