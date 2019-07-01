<?php

class HomePartnerModel extends CI_Model
{

	public function fetchData()
	{
		$this->db->where( array('type' => 'our_partner', 'status' => 0) );
		return $this->db->get('home')->result_array();
	}

	public function updatePartnerData( $data, $images )
	{
		if( empty($data) ) return false;

		$this->db->where( array('type' => 'our_partner', 'status' => 0) );
		
		if( !empty($images[0]) ){
				$imageExist = $this->db->select('images')->get('home')->result_array();
					if( !empty(json_decode($imageExist[0]['images'] ))){						
						foreach (json_decode($imageExist[0]['images']) as  $value) {
							$cerft[] = $value;
						}
						$cerft = array_merge($images, $cerft);								
					}else{
						$cerft = $images;
					}
			$this->db->where( array('type' => 'our_partner', 'status' => 0) );
			$status = $this->db->update('home', array( 'title' => $data['title'], 'images' => json_encode($cerft), 'description' => $data['desc'] ));
		}
		else{
				$status = $this->db->update('home', array( 'title' => $data['title'], 'description' => $data['desc'] ));
		}

		if( $status ) return true;
		else false;
	}

	public function updatePartnerAfterDelete( $images )
	{		
    $this->db->where( array('type' => 'our_partner', 'status' => 0) );
		$status = $this->db->update('home', array( 'images' => json_encode($images) ));
		if( $status ) return true;
		else false;
	}
}