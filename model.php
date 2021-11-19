<?php 

class Buah{
	public $nama, $jumlah, $harga;

	function __construct($nama=NULL, $harga=0, $jumlah=0){
		if( $nama!=NULL && $harga!=NULL ){
			$this->nama = $nama;
			$this->harga = $harga * $jumlah;
			$this->jumlah = $jumlah;
		}
	}

    function getNama(){
		return $this->nama;
	}
	function getHarga(){
		return $this->harga;
	}
	function getJumlah(){
		return $this->jumlah;	
	}
}

?>