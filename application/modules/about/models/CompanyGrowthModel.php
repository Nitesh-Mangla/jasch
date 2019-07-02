<?php
class CompanyGrowthModel extends CI_Model
{
	public function fetchData( $id = '' )
	{
		if( !empty($id) ) $this->db->where( array( 'id' => $id, 'status' => 0, 'type' => 'company_growth') );
		else $this->db->where( array('status' => 0, 'type' => 'company_growth'));		
		return $this->db->get('about_us')->result_array();
	}

	public function insertCompanyGrowthData( $data, $image )
	{
		if( empty($data) ) return false;

		$status = $this->db->insert('about_us', array('type' => 'company_growth', 'images' => $image, 'description' => $data['desc'], 'title' => $data['title'], 'year' => $data['year'] ));

		if( $status ) return true;
		else false;
	}

	// updating slider data

	public function updateCompanyGrowthData( $data, $image )
	{

		if( empty($data) ) return false;
		$this->db->where(  array( 'id' => $data['id'], 'type' => 'company_growth' ));
		if( !empty( $image ) )
		{
			
			$status = $this->db->update('about_us', array( 'images' => $image, 'description' => $data['desc'], 'title' => $data['title'], 'year' => $data['year']) );
		}
		else
		{
			$status = $this->db->update('about_us', array( 'description' => $data['desc'], 'title' => $data['title'], 'year' => $data['year']) );	
		}

		if( $status ) return true;
		else false;
	}

	public function deleteCompanyGrowth( $id )
	{
			$this->db->where( array('id'=> $id, 'type' => 'company_growth'));
			if( $this->db->update( 'about_us', array('status' => 1) ) ) return true;
			else false;
	}
}