$(document).ready(function(){
	
	$('#table-actors').DataTable({
		"dom": 'Blfrtip',
		"ordering": false,
		"searching": false,
		"paging": false,
		"responsive": true,
		"ajax":{
			url:"voice-actor-action.php",
			type:"POST",
			data:{
					action:'listVoiceActors'
				 },
			dataType:"json"
		}
	});
	
});