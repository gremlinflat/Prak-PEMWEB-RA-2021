<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Database Mahasiswa | Praktikum Web 7 | Fahri Novaldi</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="src/jquery-3.5.1.min.js"></script>
  </head>
  <body>
    <div id="background">
      <div id="form-bg">
        <h2 id="header">nama aksi</h2>

        <form id="forms" action="javascript:void(0);" method="post">
            <div class="field">
                <label for="nama">Nama Lengkap</label>
                <input class="textform" type="text" name="nama" id="nama" required>
            </div>
            <div class="field">
                <label for="tempat">Tempat Lahir</label>
                <input class="textform" type="text" name="tempat" id="tempat" required>
            </div>
            <div class="field">
                <label for="tanggallahir">Tanggal Lahir</label>
                <input class="textform" type="date" name="tanggallahir" id="tanggallahir" required>
            </div>
            <div class="field">
                <label for="">Jenis Kelamin</label>
                <select class="textform" name="gender" id="gender" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="field">
                <label>NIM</label>
                <input class="textform" type="text" name="nim" id="nim" required>
            </div>
            <div class="field">
                <label>Program Studi</label>
                <select class="textform" name="prodi" id="prodi" required>
                  <option value="Teknik Industri">Teknik Industri</option>
                  <option value="Teknik Linkungan">Teknik Linkungan</option>
                  <option value="Teknik Geologi">Teknik Geologi</option>
                  <option value="Teknik Perkapalan">Teknik Perkapalan</option>
                  <option value="Teknik Geodesi">Teknik Geodesi</option>
                  <option value="Teknik Teknik apaan sih anjing">Teknik Teknik apaan sih anjing</option>
                  <option value="Teknik Kompyuter">Teknik Kompyuter</option>
              </select>
            </div>
            <button id="form-button"> aksi </button>
        </form>
        
      </div>
      <div id="table-mhs">
        <div id="header-block">
          <h2 id="header">Daftar Mahasiswa</h2>
          <button class="add-btn bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Tambah
          </button>
        </div>
        
        <div class="flex flex-col">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nama
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tempat, tanggal lahir
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Jenis Kelamin
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Prodi
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Delete</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="tabel-mahasiswa bg-white divide-y divide-gray-200">
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="src/script.js"></script>
</html>
