<header class="site_header ">
    <div class="col-sm-10 mx-auto">
        <div class="top_bar ">
            <div class="row">
                <div class="col-lg-6 col-8">
                    <div class=" f__12">
                        <ul class="list-inline">
                            <li class="list-inline-item ">
                                <a href="mailto:info@jaschindustries.com" target="_top"><i class="fas fa-envelope-open-text"></i> info@jaschindia.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-4 text-right">
                    <ul class="list-inline ">
                        <li class="list-inline-item ">
                            <a href="<?php echo base_url();?>press_coverage" class="">Press <span class="sub">Coverage</span></a>
                        </li>
                    </ul>               
                </div>
            </div>
        </div>  
    </div>
</header>
<div id="navbar" class="header_navigation ">
        <div class="col-sm-10 mx-auto">
            <nav class="navbar navbar-expand-lg navbar-light p0">
                <a class="navbar-brand" href="<?php echo base_url();?>">
                    <div class="site_logo">
                        <img src="<?php echo base_url();?>assets/img/logo.png" alt="">
                    </div>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url();?>">Home</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url();?>about" id="navbarDropdown" data-toggle="dropdown">
                        About <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url();?>about#company-profile">Company Profile</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>about#management">Management Team</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>about#growth-inception">Company Growth  & Inception</a>
                            <a class="dropdown-item" href="<?php echo base_url();?>about#infrastructure">Infrastructure & Technology</a>
                            <!-- <a class="dropdown-item" href="<?php echo base_url();?>about#organization-stucture">Organization Stucture</a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>product">Our Products</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>research_development">R&D</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>crs">CSR</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>careers">Career</a>
                    </li> 
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filings & Disclosures <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="<?php echo base_url();?>notices" class="dropdown-item">Notices</a>
                         <a href="unpaid.php" class="dropdown-item">Unpaid Dividend</a>                    
                         <a href="annual_report.php" class="dropdown-item">Annual Reports</a>
                         <a href="shareholding_pattern.php" class="dropdown-item">Shareholding Pattern</a>
                         <a href="financial_results.php" class="dropdown-item">Financial Results</a>
        		         <a href="corporate_governance.php" class="dropdown-item">Corporate Governance</a>
                         <a href="subsidiaries.php" class="dropdown-item">Subsidiaries</a>
        		         <a href="committees.php" class="dropdown-item">Board Committees</a>
        		         <a href="codes&amp;policies.php" class="dropdown-item">Policies, Codes of Conduct &amp; Fair Practices</a>
        		         <a href="terms_and_conditions.php" class="dropdown-item">Appointment &amp; Training of IDs</a>
        		         <a href="other_services.php" class="dropdown-item">Other Investor Services</a>
                        <a href="invester_details.php" class="dropdown-item">Contact Points for Investors</a>
                        </div>
                    </li>
                    </ul>
                    <div class="form-inline my-2 my-lg-0 search_bar web">
                        <button class="btn-search btn  my-2 my-sm-0" data-toggle="modal" data-target="#search_form">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="mobile">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="type to search">
                                 <div class="input-group-append">
                                   <button class="btn btn-info" type="submit"><i class="fas fa-search"></i></button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>        
    </div>

 <!-- Pre Loader -->
<div id="preloader">
    <img src="<?php echo base_url();?>assets/img/jasch_logo.gif">
</div>
<!-- Search Popup -->
  <div class="modal fade" id="search_form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <form>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="type to search">
                     <div class="input-group-append">
                       <button class="btn btn-info" type="submit"><i class="fas fa-search"></i></button> 
                    </div>
                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
<!-- Search Popup close -->