
        <!-- Main content -->

        <section class="content">

          <div class="row">

            <!-- left column -->

            <div class="col-md-12">

              <!-- general form elements -->

              <div class="box box-primary">

                <div class="box-header" style="background-color: rgba(19, 17, 17, 0.21);">

                  <h3 class="box-title">Edit Company Profile</h3>

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
					<form  action="<?php echo base_url();?>admin/HomeOurProducts/updateProduct" method="post" enctype="multipart/form-data">

          <div class="form-group">
                     <label for="InputName">Select Product</label>
                     <select class="form-control" name="product" required>
                        <option value="">--SELECT--</option>
                             <option value="Coated Fabrics">Coated Fabrics</option>
                             <option value="PU Resin">PU Resin</option>          
                             <option value="Industrial Gauges">Industrial Gauges</option> 
                     </select>
            </div>

            <div class="form-group">
                     <label for="InputName">Image</label>
                     <input type="file" name="files" value="" class="form-group" required>
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