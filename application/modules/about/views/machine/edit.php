
        <!-- Main content -->

        <section class="content">

          <div class="row">

            <!-- left column -->

            <div class="col-md-12">

              <!-- general form elements -->

              <div class="box box-primary">

                <div class="box-header" style="background-color: rgba(19, 17, 17, 0.21);">

                  <h3 class="box-title">Edit ManufatureMachine</h3>

                </div><!-- /.box-header -->

                <!-- form start -->

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
					<form  action="<?php echo base_url();?>about/ManufatureMachine/updateManufatureMachine" method="post" enctype="multipart/form-data">

    

				
  <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">
              <div class="form-group">

                      <label for="InputName">Title</label>
                      <input type="text" name="title" value="<?=  $data[0]['title'] ?>" class="form-control" placeholder ="Enter Title">
                    </div>        
					<div class="form-group">

                      <label for="InputName">Description</label>
           
                      <textarea id="editor1" name="desc" cols="3" rows="2" required><?php echo $data[0]['description']?></textarea>

                    </div>
				
					
					
                 <script>
                     function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
                 </script>  
                  <div class="box-footer">

                    <center><input class="btn btn-success" type="submit" value="Submit" name="submit"></center>

                  </div>

                </form>

                </div><!-- /.box-body -->

              </div><!-- /.box -->

			  </div><!-- /.col (right) -->

          </div><!-- /.row -->

        </section><!-- /.content -->
		
		
		
		
<script>
function convertToSlug(Text)
{
var v=Text
.toLowerCase()
.replace(/[^\w ]+/g,'')
.replace(/ +/g,'-')
;
$('#slug').val(v);  

}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>