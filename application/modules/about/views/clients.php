<!-- Main content -->

        <section class="content">

          <div class="row">

            <!-- left column -->

            <div class="col-md-12">

              <!-- general form elements -->

              <div class="box box-primary">

                <div class="box-header" style="background-color: rgba(19, 17, 17, 0.21);">

                  <h3 class="box-title">Clients</h3>

                </div>

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
      <?php if( !empty($data) ){?>
					<form  action="<?php echo base_url()?>about/Clients/updateClients/" method="post" enctype="multipart/form-data">

					        <div class="form-group">
                     <label for="InputName">Title</label>
                     <input type="text" name="title" value="<?php echo isset($data[0]['title'])?$data[0]['title']:''?>" placeholder="Enter Title" class="form-control" >
                  </div>

                  <input type="hidden" name="id" value="<?php echo $data[0]['id']?>" >
                
              </div>
              
               <div class="form-group">
                      <label for="InputName">Partners</label>
                      <input type="file" name="files[]" value="" class="form-control" multiple="multiple">
                </div>
 <div id="gallery">
  
  <div id="thumbs">
    <?php if( !empty(json_decode($data[0]['images']))  ){ $i=0;?>
      <?php foreach(json_decode($data[0]['images']) as $key => $value) {?>
        <img src="<?php echo base_url()?>assets/img/about_us/clients/<?php echo $value ?>" alt="1st image description" style="width: 150px;margin:5px;" />
        <img src="<?php echo base_url()?>assets/img/home/cross.png" alt="1st image description" style="width: 20px;margin:5px; cursor: pointer;" id="<?php echo $key.'-'.$data[0]['id']?>" class="delete"/>
       <?php }} ?> 
  </div>

   
                  <div class="box-footer">
                    <center><input class="btn btn-success" type="submit" value="Update" name="submit"></center>
                  </div>

                 </form>
<?php } ?>
                </div><!-- /.box-body -->

              </div><!-- /.box -->

			        </div><!-- /.col (right) -->

           </div><!-- /.row -->

        </section><!-- /.content -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">  
 </script>  
 <?php require_once 'removeimageajax.php' ?>


       