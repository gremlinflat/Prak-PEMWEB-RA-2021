$(document).ready(function(){

    $('#form-bg').hide()

    $('.add-btn').click(function(){
		$('#form-bg').show()
	});

	function clearform(){
		$('.nama').val('');
		$('.tempat').val('');
		$('.tanggallahir').val('');
		$('.gender').val('');
		$('.nim').val('');
		$('.prodi').val('');
	}
});