$(document).ready(function () {
  $("#form-bg").hide();

  $(".add-btn").click(function () {
    $("#form-bg").show();
    $("#header").text("Tambah Data Mahasiswa");
    $("#form-button").text("Tambah!");
  });

  function addNewMhs() {
    var formData = {
      nama : $("#nama").val(),
      tempat : $("#tempat").val(),
      tanggallahir : $("#tanggallahir").val(),
      jeniskelamin : $("#gender").val(),
      nim : $("#nim").val(),
      prodi : $("#prodi").val(),
    };
    console.log(formData);
    $.ajax({
      type: "POST",
      url: "create.php",
      data: formData,
      dataType: "JSON",
      success: function (response) {
        if (response.status == "1") {
          alert("Data berhasil diinput")
          readWhole();
          clearform();
          
        } else {
          alert("Data yang dimasukan tidak valid");
          readWhole();
        }
      },
      error: function (jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = 'Not connect.\n Verify Network.';
        } else if (jqXHR.status == 404) {
            msg = 'Requested page not found. [404]';
        } else if (jqXHR.status == 500) {
            msg = 'Internal Server Error [500].';
        } else if (exception === 'parsererror') {
            msg = 'Requested JSON parse failed.';
        } else if (exception === 'timeout') {
            msg = 'Time out error.';
        } else if (exception === 'abort') {
            msg = 'Ajax request aborted.';
        } else {
            msg = 'Uncaught Error.\n' + jqXHR.responseText;
        }
        console.log(msg, exception)
      },
    });
  }
  
  $("#form-button").click(function () {
    addNewMhs();
  });

  readWhole();

  function writeRowtoHtml(data) {
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
                          <div class="text-sm text-gray-900">${
                            data["tanggallahir"]
                          } </div>
                          <div class="text-sm text-gray-500">${
                            data["tempat"]
                          } </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                          <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${
                            data["jeniskelamin"] == "Laki-laki"
                              ? "bg-blue-100 text-blue-800"
                              : "bg-red-100 text-red-800"
                          }">
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
		`;
    $(".tabel-mahasiswa").append(template);
  }
  function readWhole() {
    clearform();
    $.ajax({
      type: "GET",
      url: "read.php",
      dataType: "JSON",
      success: function (response) {
        if (response.length != 0) {
          $(".tabel-mahasiswa").html("");
          for (i = 0; i < response.length; i++) {
            writeRowtoHtml(response[i]);
          }
        } else {
          $(".tabel-mahasiswa").append(
            `
						<tr>
							<td colspan="6" rowspan="4" > <h1 class="text-center text-5xl font-bold leading-normal mt-0 mb-2 text-teal-800" >Database Kosong</h1></td>
					  	</tr>
					  	<tr></tr>
					  	<tr></tr>
					  	<tr></tr>
					  	<tr></tr>
						`
          );
        }
      },
    });
  }
  function clearform() {
    $("#nama").val("");
    $("#tempat").val("");
    $("#tanggallahir").val("");
    $("#gender").val("");
    $("#nim").val("");
    $("#prodi").val("");
  }
});
