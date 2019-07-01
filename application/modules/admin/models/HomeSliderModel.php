<?php

class HomeSliderModel extends CI_Model
{
	public function fetchData( $id = '' )
	{
		if( !empty($id) ) $this->db->where( array( 'id' => $id, 'status' => 0, 'type' => 'home silder') );
		else $this->db->where( array('status' => 0, 'type' => 'home silder'));		
		return $this->db->get('home')->result_array();
	}

	public function insertSliderData( $data, $image )
	{
		if( empty($data) ) return false;

		$status = $this->db->insert('home', array('type' => 'home silder', 'title' => $data['title'], 'images' => $image, 'description' => $data['desc'] ));

		if( $status ) return true;
		else false;
	}

	// updating slider data

	public function updateSliderData( $data, $image )
	{

		if( empty($data) ) return false;
		$this->db->where(  array( 'id' => $data['id'], 'type' => 'home silder' ));
		if( !empty( $image ) )
		{
			
			$status = $this->db->update('home', array( 'images' => $image, 'title' => $data['title'], 'description' => $data['desc']) );
		}
		else
		{
			$status = $this->db->update('home', array( 'title' => $data['title'], 'description' => $data['desc']) );	
		}

		if( $status ) return true;
		else false;
	}

	public function deleteSlider( $id )
	{
			$this->db->where('id', $id);
			if( $this->db->update( 'home', array('status' => 1) ) ) return true;
			else false;
	}
}