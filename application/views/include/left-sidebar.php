  <style>
  .main-sidebar{
    background-color: rgb(242, 244, 247); border-right: 3px double rgb(70, 150, 146);
  }
  .skin-red .sidebar-menu>li:hover>a, .skin-red .sidebar-menu>li.active>a {
    color: #fff;
    background: #1e282c;
    border-left-color: #469692;
}

</style>
<aside class="main-sidebar" style="background: rgb(18, 65, 140);">
  <section class="sidebar" >
      <!-- Sidebar user panel -->
     
      <div class="user-panel">
         <div class="pull-left image">
            <img src="<?php echo base_url() ?>assets/admin/profile_pic/establish.png" class="img-circle" alt="User Image" />
         </div>
         <div class="pull-left info">
            <p>example</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
         </div>
      </div>
      <br/>
      <?php
        $one = $this->uri->segment(1);
        $two =   $this->uri->segment(2);
      ?>
 <ul class="sidebar-menu" >
   <!-- <li class="treeview <?php if($two == 'HomePage'){ echo 'active';} ?>">
     <a href="<?php echo base_url(); ?>admin/HomePage" >
	     <i class="fa fa-list-alt"></i> <span>Home</span> 
	   </a>
   </li>

    <li class="treeview <?php if($two == 'BannerDesc'){ echo 'active';} ?>">
    	<a href="<?php echo base_url(); ?>admin/BannerDesc" >
	      <i class="fa fa-list-alt"></i> <span>Page Banner</span> 
	    </a>
   </li> -->

	<li class="treeview <?php if($two == 'HomeSilder' || $two == 'HomeCompanyProfile' || $two == 'HomeOurProducts' || $two == 'HomeRSD' || $two == 'HomePartner' || $two == 'HomePresence' || $two == 'HomeNewsEvent'){ echo 'active';} ?>">
	  <a>
	    <i class="fa fa-files-o"></i>
	    <span>Home</span>
	    <span class="label label-primary pull-right"><i class="fa fa-angle-down"></i></span>
	  </a>
	  <ul class="treeview-menu">
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/HomeSlider" ><i class="fa fa-list-alt"></i>
	    	  <span>Home Slider</span>
	        </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/HomeCompanyProfile" ><i class="fa fa-list-alt"></i>
	          <span>Company Profile</span> 
	        </a>
	   </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/HomeOurProducts" ><i class="fa fa-list-alt"></i>
	    	  <span>Our Products</span> 
	        </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/HomeRSD" ><i class="fa fa-list-alt"></i>
	           <span>Research & Development</span> 
	        </a>
	   </li>

	   <li>
	    	<a href="<?php echo base_url(); ?>admin/HomePartner" ><i class="fa fa-list-alt"></i>
	           <span>Our Partners</span> 
	        </a>
	   </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/HomePresence" ><i class="fa fa-list-alt"></i>
	           <span>Our Presence</span> 
	        </a>
	   </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/HomeNewsEvent" ><i class="fa fa-list-alt"></i>
	           <span>News Event</span> 
	        </a>
	   </li>
	  </ul>
	</li>

  <li class="treeview <?php if($two == 'Slider' || $two == 'FstTileFeatures' || $two == '1stTile/ProductionTechnics' || $two == 'BrandCollection?id=0'){ echo 'active';} ?>">
	  <a>
	    <i class="fa fa-files-o"></i>
	    <span>About</span>
	    <span class="label label-primary pull-right"><i class="fa fa-angle-down"></i></span>
	  </a>
	  <ul class="treeview-menu">
	    <li>
	    	<a href="<?php echo base_url(); ?>about/Slider" >
		     <i class="fa fa-list-alt"></i> <span>Slider</span> 
		   </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>1stTile/FstTileFeatures" >
		     <i class="fa fa-list-alt"></i> <span>Features</span> 
		   </a>
	   </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>1stTile/ProductionTechnics" >
		     <i class="fa fa-list-alt"></i> <span>Product Technique</span> 
		   </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>1stTile/BrandCollection?id=0" >
		     <i class="fa fa-list-alt"></i> <span>Collection</span> 
		   </a>
	   </li>
	 </ul>
</li>

<li class="treeview <?php if($two == 'BrandCollection?id=1' || $two == 'FiandreDetails' || $two == 'FiandreFeatures'){ echo 'active';} ?>">
	  <a>
	    <i class="fa fa-files-o"></i>
	    <span>Fiandre</span>
	    <span class="label label-primary pull-right"><i class="fa fa-angle-down"></i></span>
	  </a>
	  <ul class="treeview-menu">
	    <li>
	    	<a href="<?php echo base_url(); ?>fiandre/FiandreDetails" >
		     <i class="fa fa-list-alt"></i> <span>Details</span> 
		   </a>
	   </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>fiandre/FiandreFeatures" >
		     <i class="fa fa-list-alt"></i> <span>Features</span> 
		   </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>1stTile/BrandCollection?id=1" >
		     <i class="fa fa-list-alt"></i> <span>Collection</span> 
		   </a>
	    </li>
	 </ul>
</li>
<li class="treeview <?php if($two == 'FuoriformatoDetails' || $two == 'FuoriformatoFeatures' || $two == 'BrandCollection?id=2' || $two == 'fuoriformato/ProductionTechnics'){ echo 'active';} ?>">
	  <a>
	    <i class="fa fa-files-o"></i>
	    <span>Fuoriformato</span>
	    <span class="label label-primary pull-right"><i class="fa fa-angle-down"></i></span>
	  </a>
	  <ul class="treeview-menu">
	    <li>
	    	<a href="<?php echo base_url(); ?>fuoriformato/FuoriformatoDetails" >
		     <i class="fa fa-list-alt"></i> <span>Details</span> 
		   </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>fuoriformato/FuoriformatoFeatures" >
		     <i class="fa fa-list-alt"></i> <span>Features</span> 
		   </a>
	   </li>
	     <li>
	    	<a href="<?php echo base_url(); ?>fuoriformato/ProductionTechnics" >
		     <i class="fa fa-list-alt"></i> <span>Product Technique</span> 
		   </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>1stTile/BrandCollection?id=2" >
		     <i class="fa fa-list-alt"></i> <span>Collection</span> 
		   </a>
	    </li>
	 </ul>
</li>

  <li class="treeview <?php if($two == 'VideoController'){ echo 'active';} ?>">
   <a href="<?php echo base_url(); ?>admin/VideoController" >
     <i class="fa fa-list-alt"></i> <span>Brand Video</span> 
   </a>
 </li>

 <li class="treeview <?php if($two == 'Product'){ echo 'active';} ?>">
   
   <a href="<?php echo base_url(); ?>admin/Product" >
     <i class="fa fa-list-alt"></i> <span>Brand Products</span> 
   </a>
 </li>

 <li class="treeview <?php if($two == 'DownloadTechnical'){ echo 'active';} ?>">
   
   <a href="<?php echo base_url(); ?>admin/DownloadTechnical" >
     <i class="fa fa-list-alt"></i> <span>Download Brochure</span> 
   </a>
 </li>

 <li class="treeview <?php if($two == 'Certificate'){ echo 'active';} ?>">
   
   <a href="<?php echo base_url(); ?>1stTile/Certificate" >
     <i class="fa fa-list-alt"></i> <span>Brand Certificates</span> 
   </a>
 </li>

 <li class="treeview <?php if($two == 'VirtualReality'){ echo 'active';} ?>">
   
   <a href="<?php echo base_url(); ?>virtualworld/VirtualReality" >
     <i class="fa fa-list-alt"></i> <span>3D Virtual Reality</span> 
   </a>
 </li>

<li class="treeview <?php if($two == 'ProjectSlider' || $two == 'Projects' || $two == 'projects/Clients'){ echo 'active';} ?>">
	  <a>
	    <i class="fa fa-files-o"></i>
	    <span>Portfolio</span>
	    <span class="label label-primary pull-right"><i class="fa fa-angle-down"></i></span>
	  </a>
	  <ul class="treeview-menu">
	    <li>
	    	   <a href="<?php echo base_url(); ?>projects/ProjectSlider" >
				 <i class="fa fa-list-alt"></i> <span>Project Slider</span> 
			   </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>projects/Projects" >
		     <i class="fa fa-list-alt"></i> <span>Project List</span> 
		   </a>
	   </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>projects/Clients" >
		     <i class="fa fa-list-alt"></i> <span>Client List</span> 
		   </a>
	    </li>
	 </ul>
</li>

<li class="treeview <?php if($two == 'NewEvent' || $two == 'PressCoverage' || $two == 'Blogs' || $two == 'Newsletter' || $two == 'testimonial'){ echo 'active';} ?>">
	  <a>
	    <i class="fa fa-files-o"></i>
	    <span>Media</span>
	    <span class="label label-primary pull-right"><i class="fa fa-angle-down"></i></span>
	  </a>
	  <ul class="treeview-menu">
	  	<li>
	    	<a href="<?php echo base_url(); ?>admin/NewEvent" >
		     <i class="fa fa-list-alt"></i> <span>New and Event</span> 
		   </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/PressCoverage" >
		     <i class="fa fa-list-alt"></i> <span>Press & Coverage</span> 
		   </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/Blogs" >
		     <i class="fa fa-list-alt"></i> <span>Blogs</span> 
		   </a>
	    </li>
	    <li>
	    	   <a href="<?php echo base_url(); ?>admin/Newsletter" >
			     <i class="fa fa-list-alt"></i> <span>Newsletter</span> 
			   </a>
	    </li>
	    <li>
		   <a href="<?php echo base_url(); ?>admin/testimonial" >
		     <i class="fa fa-list-alt"></i> <span>Testimonial</span> 
		   </a>
		</li>
	 </ul>
</li>
<li class="treeview <?php if($two == 'ContactDetails' || $two == 'enquiryFormData' || $two == 'CustomerSupport'){ echo 'active';} ?>">
	  <a>
	    <i class="fa fa-files-o"></i>
	    <span>Contact</span>
	    <span class="label label-primary pull-right"><i class="fa fa-angle-down"></i></span>
	  </a>
	  <ul class="treeview-menu">
	  	<li>
	    	<a href="<?php echo base_url(); ?>admin/ContactDetails" >
		     <i class="fa fa-list-alt"></i> <span>Contact Form</span> 
		   </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/ContactDetails/enquiryFormData" >
		     <i class="fa fa-list-alt"></i> <span>Enquiry Form</span> 
		    </a>
	    </li>
	    <li>
	    	<a href="<?php echo base_url(); ?>admin/CustomerSupport">
              <i class="fa fa-user"></i> <span>Customer Support</span>
            </a>
	    </li>
	 </ul>
</li>
 <li class="treeview <?php if($two == 'newsletterSubscribe'){ echo 'active';} ?>">
  <a href="<?php echo base_url(); ?>admin/ContactDetails/newsletterSubscribe" >
     <i class="fa fa-list-alt"></i> <span>Subscribe List</span> 
   </a>
</ul>
</section>
</aside>