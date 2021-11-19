async function postData(url = '', data = {}) {
    const response = await fetch(url, {
      method: 'POST',
      body: data
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

let totaljumlahJambu = document.getElementById("totaljumlahJambu");
let totaljumlahMangga = document.getElementById("totaljumlahMangga");
let totaljumlahSalak = document.getElementById("totaljumlahMangga");


function hitungKeranjang(){

    let jumlahJambu = document.getElementById("jmlJambu").innerText;
    let jumlahMangga = document.getElementById("jmlMangga").innerText;
    let jumlahSalak = document.getElementById("jmlSalak").innerText;

    document.getElementById("totaljumlahJambu").innerText = jumlahJambu;
    document.getElementById("totaljumlahMangga").innerText = jumlahMangga;
    document.getElementById("totaljumlahSalak").innerText = jumlahSalak;

    var cart = new FormData();
    cart.append('jambu', jumlahJambu);
    cart.append('mangga', jumlahMangga);
    cart.append('salak', jumlahSalak );

    postData('/api.php', cart)
    .then(data => {
        document.getElementById("totalHargaJambu").innerText = data['jambu'];
        document.getElementById("totalHargaMangga").innerText = data['mangga'];
        document.getElementById("totalHargaSalak").innerText = data['salak'];
        document.getElementById("totalHargaKeranjang").innerText = data['total'];
    });
    document.getElementById("nota").style.display = "";

}

