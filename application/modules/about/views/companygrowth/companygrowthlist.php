    
        <!-- Main content -->

        <section class="content">

          <div class="row">

            <div class="col-xs-12">

              <div class="box">

                <div class="box-header">

                  <h3 class="box-title">Slider</h3>

                </div><!-- /.box-header -->

        <div class="box-body">
 <?php  if( $this->session->flashdata('msg') ){ ?>
        <div class="alert alert-success alert-dismissible ">
          <strong>Success!</strong> <?php echo $this->session->flashdata('msg') ?>.
          <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
      <?php }?>
      <?php  if( $this->session->flashdata('error') ){ ?>
        <div class="alert alert-danger alert-dismissible ">
          <strong>Error!</strong> <?php echo $this->session->flashdata('error') ?>.
          <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
      <?php }?>
        
              <div class="dataTables_length" id="example1_length">
                <button  type="button" class="btn btn-success" style="float:right;margin-top:-35px" onclick="window.location.href='<?php echo base_url(); ?>about/CompanyGrowth/addCompanyGrowth'" />Add Company Growth</button>
              </div>
                  <table id="example1" class="table table-bordered table-striped">

                    <thead>
                      <tr>
                        <th>S No.</td>
                        <th>Tilte</th>
                        <th>Year</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                     <tbody>
                        <?php if( $data ){
                          $i = 1;
                          foreach ($data as $value) { ?>
                            <tr>
                            <td><?php echo $i++?></td>
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['year'] ?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td><img src="<?php echo base_url()?>assets/img/about_us/growth/<?php echo $value['images'] ?>" style="width:150px"></td>
                            <td> <a href="<?php echo base_url()?>about/CompanyGrowth/updateCompanyGrowth?id=<?php echo $value['id']?>" class="btn btn-primary a-btn-slide-text">
                              <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                              <span>Edit</span>            
                              </a>
                              <a href="<?php echo base_url()?>about/CompanyGrowth/delete?id=<?php echo $value['id']?>" class="btn btn-primary a-btn-slide-text">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                                <span><strong>Delete</strong></span>            
                            </a>
                          </td>
                         </tr> 
              <?php } }?>
                  </table>

                </div><!-- /.box-body -->

              </div><!-- /.box -->

            </div><!-- /.col -->

          </div><!-- /.row -->

        </section><!-- /.content -->