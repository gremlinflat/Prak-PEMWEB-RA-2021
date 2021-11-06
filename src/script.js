$(document).ready(function(){

    $('#form-bg').hide()

    $('.add-btn').click(function(){
		$('#form-bg').show()
	});
	
	readWhole();

	function writeRowtoHtml(data){
		let template = `
		<tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm font-medium text-gray-900">
                                ${data["nama"]}
                              </div>
                              <div class="text-sm text-gray-500">
							  ${data["nim"]} 
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <div class="text-sm text-gray-900">${data["tanggallahir"]} </div>
                          <div class="text-sm text-gray-500">${data["tempat"]} </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${data["jeniskelamin"]=="Laki-laki" ? "bg-blue-100 text-blue-800" : "bg-red-100 text-red-800"}">
						  ${data["jeniskelamin"]} 
                          </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
						${data["prodi"]}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                          <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                          <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                      </tr>
		`
		$('.tabel-mahasiswa').append(template);
		console.log("template");
	}
	function readWhole(){
		clearform();
		$('.targetData').html('');
		$.ajax({
			type : 'GET',
			url : 'read.php',
			dataType : 'JSON',
			success : function(response){
				for( i=0; i<response.length; i++ ){
					writeRowtoHtml(response[i]);
				}
			}
		})
	}
	function clearform(){
		$('.nama').val('');
		$('.tempat').val('');
		$('.tanggallahir').val('');
		$('.gender').val('');
		$('.nim').val('');
		$('.prodi').val('');
	}
});