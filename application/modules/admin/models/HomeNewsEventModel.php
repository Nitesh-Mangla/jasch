<?php

class HomeNewsEventModel extends CI_Model
{
	public function fetchData( $id = '' )
	{
		
		if( !empty($id) ) $this->db->where( array( 'type' => 'news_event', 'status' => 0, 'id' => $id ) );
		else $this->db->where( array( 'type' => 'news_event', 'status' => 0 ) );
		return $this->db->get( 'home' )->result_array();
	}

	public function updateNewsEventData( $data)
	{
			$v =array();
			$this->db->where( array( 'type' => 'news_event', 'status' => 0, 'id' => $data['id'] ) );			
					$status = $this->db->update( 'home', array( 'address' => $data['address'],'start_date' => $data['sdate'], 'end_date' => $data['edate'] ) );	

			if( $status ) return true;
			else false;
  	}
}