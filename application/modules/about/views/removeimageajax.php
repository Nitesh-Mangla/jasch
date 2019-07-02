<script type="text/javascript">
	
	function removeImage( id, url,imageID )
{
	let promise = new Promise( (resolve, reject)=>{

		$.ajax({
			url: url,
			type:'GET',
			data: {'id': id, 'imageID': imageID },
			success:function( data ){
				resolve(data);
			},
			error:function( error ){
				reject(error);
			}
		});
	} );
	return promise;
}

$('.delete').click(function(){
	let id = this.id;	
    let v = id.split('-');
	let url = '<?php echo base_url()?>about/Clients/deleteClients';
	removeImage( v[1], url, v[0] ).then( (data)=>{
		alert('Image is succesfully deleted');
		window.location.href= "<?php echo base_url()?>about/Clients";
	} ).catch( (error)=>{
		console.log(error);
	} )
});



</script>