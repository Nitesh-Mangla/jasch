<?php
class ManufatureMachineModel extends CI_Model
 {
	public function fetchData( $id = '' )
	{
		if( !empty($id) ) $this->db->where( array( 'id' => $id, 'status' => 0, 'type' => 'machine') );
		else $this->db->where( array('status' => 0, 'type' => 'machine'));		
		return $this->db->get('about_us')->result_array();
	}

	public function insertManufatureMachineData( $data )
	{
		if( empty($data) ) return false;

		$status = $this->db->insert('about_us', array('type' => 'machine', 'description' => $data['desc'], 'title' => $data['title'] ));

		if( $status ) return true;
		else false;
	}

	// updating ManufatureMachine data

	public function updateManufatureMachineData( $data )
	{

		if( empty($data) ) return false;
		$this->db->where(  array( 'id' => $data['id'], 'type' => 'machine' ));
			
			$status = $this->db->update('about_us', array('title' => $data['title'] ,'description' => $data['desc']) );

		if( $status ) return true;
		else false;
	}

	public function deleteManufatureMachine( $id )
	{
			$this->db->where('id', $id);
			if( $this->db->update( 'about_us', array('status' => 1) ) ) return true;
			else false;
	}
}