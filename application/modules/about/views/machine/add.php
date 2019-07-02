        <!-- Main content -->

        <section class="content">

          <div class="row">

            <!-- left column -->

            <div class="col-md-12">

              <!-- general form elements -->

              <div class="box box-primary">

                <div class="box-header" style="background-color: rgba(19, 17, 17, 0.21);">

                  <h3 class="box-title">Add Slider</h3>

                </div><!-- /.box-header -->

                <!-- form start -->

                  <div class="box-body">

					<form  action="<?php echo base_url();?>about/ManufatureMachine/insertManufatureMachine" method="post" enctype="multipart/form-data">

					                    


                    <div class="form-group">
                      <label for="InputName">Title</label>
                        <input type="text" name="title"value="" placeholder="Enter Title" class="form-control">
                    </div>   
               
				           <div class="form-group">

                      <label for="InputName">Description</label>
           
                      <textarea id="editor1" name="desc" cols="3" rows="2" placeholder="Enter Description"  ></textarea>

                    </div>
        

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


