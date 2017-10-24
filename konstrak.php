<?php
class identitas
{
	public $nama;
	public $tempatlahir;
	public $alamat;
	public $umur;

	public function __construct($nama, $tempatlahir, $alamat, $umur)
	{
		$this->nama = $nama;
		$this->tempatlahir = $tempatlahir;
		$this->alamat = $alamat;
		$this->umur = $umur;
	}

	public function get_nama()
	{
		return $this->nama;
	}
	public function get_tempatlahir()
	{
		return $this->tempatlahir;
	}
	public function get_alamat()
	{
		return $this->alamat;
	}
	public function get_umur()
	{
		return $this->umur;
	}
}
?>