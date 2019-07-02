<?php

class ClientsModel extends CI_Model
{

	public function fetchData()
	{
		$this->db->where( array('type' => 'clients', 'status' => 0) );
		return $this->db->get('about_us')->result_array();
	}

	public function updateClientsData( $data, $images )
	{
		if( empty($data) ) return false;

		$this->db->where( array('type' => 'clients', 'status' => 0) );
		
		if( !empty($images[0]) ){
				$imageExist = $this->db->select('images')->get('about_us')->result_array();
					if( !empty(json_decode($imageExist[0]['images'] ))){						
						foreach (json_decode($imageExist[0]['images']) as  $value) {
							$cerft[] = $value;
						}
						$cerft = array_merge($images, $cerft);								
					}else{
						$cerft = $images;
					}
			$this->db->where( array('type' => 'clients', 'status' => 0) );
			$status = $this->db->update('about_us', array( 'title' => $data['title'], 'images' => json_encode($cerft)));
		}
		else{
				$status = $this->db->update('about_us', array( 'title' => $data['title']));
		}

		if( $status ) return true;
		else false;
	}

	public function updatePartnerAfterDelete( $images )
	{		
    $this->db->where( array('type' => 'clients', 'status' => 0) );
		$status = $this->db->update('about_us', array( 'images' => json_encode($images) ));
		if( $status ) return true;
		else false;
	}
}