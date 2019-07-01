<?php

class HomeModel extends CI_Model
{
    
    public function fetchData()
    {
        return $this->db->get('home_page')->result_array();
    }
    
    public function updateHomeData( $data, $about, $ist, $fiandre, $fouri, $virtaul)
    {
        if( empty($data) ) return false;
        
        if(!empty($ist))
        {
            $this->db->update('home_page', array( 'ist_image' => $ist, 'ist_desc' => $data['istdesc'],'fiandre_desc' => $data['fiandesc'],
                 'fouri_desc' => $data['fouridesc'], 'Virtaul_desc' => $data['virtualddesc'], 'brand_desc' => $data['branddesc']));
        }
        
        if( !empty($about) )
        {
              $this->db->update('home_page', array( 'about_image' => $about, 'ist_desc' => $data['istdesc'],'fiandre_desc' => $data['fiandesc'],
                 'fouri_desc' => $data['fouridesc'], 'Virtaul_desc' => $data['virtualddesc'], 'brand_desc' => $data['branddesc']));
        }
        
         if( !empty($fiandre) )
        {
              $this->db->update('home_page', array( 'fiandre_image' => $fiandre, 'ist_desc' => $data['istdesc'],'fiandre_desc' => $data['fiandesc'],
                 'fouri_desc' => $data['fouridesc'], 'Virtaul_desc' => $data['virtualddesc'] , 'brand_desc' => $data['branddesc']));
        }
        
        if( !empty($fouri) )
        {
              $this->db->update('home_page', array( 'fouri_image' => $fouri, 'ist_desc' => $data['istdesc'],'fiandre_desc' => $data['fiandesc'],
                 'fouri_desc' => $data['fouridesc'], 'Virtaul_desc' => $data['virtualddesc'], 'brand_desc' => $data['branddesc']));
        }
        
        
        if( !empty($virtaul) )
        {
              $this->db->update('home_page', array( 'virtual_video' => $virtaul, 'ist_desc' => $data['istdesc'],'fiandre_desc' => $data['fiandesc'],
                 'fouri_desc' => $data['fouridesc'], 'Virtaul_desc' => $data['virtualddesc'], 'brand_desc' => $data['branddesc']));
        }
        
         $this->db->update('home_page', array( 'ist_desc' => $data['istdesc'],'fiandre_desc' => $data['fiandesc'],
                 'fouri_desc' => $data['fouridesc'], 'Virtaul_desc' => $data['virtualddesc'], 'brand_desc' => $data['branddesc']));
        return true;
        
    }
}