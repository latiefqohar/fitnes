<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Nasabah extends CI_Model {

	public function detail($id){
		$this->db->select("a.*,c.usia,d.pendidikan,e.status,f.status_rekening,g.jenis,h.status_asuransi,j.jenis_instansi,k.besar_penghasilan,l.status_pegawai,m.lama_bekerja,n.lama_tinggal");
		$this->db->from("nasabah a");
		$this->db->join("detail_nasabah b","a.id=b.id_nasabah");
		$this->db->join("master_usia c","b.id_usia=c.id");
		$this->db->join("master_pendidikan d","b.id_pendidikan=d.id");
		$this->db->join("master_status_perkawinan e","b.id_status_perkawinan=e.id");
		$this->db->join("master_rekening_bank f","b.id_rekening_bank=f.id");
		$this->db->join("master_riwayat_kredit g","b.id_riwayat_kredit=g.id");
		$this->db->join("master_asuransi_kredit h","b.id_asuransi_kredit=h.id");
		$this->db->join("master_instansi i","b.id_instansi=h.id");
		$this->db->join("master_instansi j","b.id_instansi=h.id");
		$this->db->join("master_penghasilan k","b.id_penghasilan=h.id");
		$this->db->join("master_status_pegawai l","b.id_status_pegawai=h.id");
		$this->db->join("master_lama_bekerja m","b.id_lama_bekerja=h.id");
		$this->db->join("master_lama_tinggal n","b.id_usia=h.id");
		$this->db->where("a.id",$id);
		return $this->db->get()->row_array();	
	}
	
	public function detailPengajuan($id){
		$this->db->select('a.id,a.posisi,a.id_nasabah,a.jumlah_pengajuan,b.nama,b.no_telpon,b.tgl_lahir,b.alamat,c.nama_produk,d.jangka, e.pembayaran,f.status,a.id_cabang');
		$this->db->from('pengajuan a');
		$this->db->join('nasabah b','a.id_nasabah=b.id');
		$this->db->join('master_produk c','a.id_produk=c.id');
		$this->db->join('jangka_waktu d', 'a.id_jangka_waktu = d.id');
		$this->db->join('master_pembayaran e', 'a.id_pembayaran = e.id');
		$this->db->join('master_agunan f', 'a.id_agunan = f.id');
		$this->db->where("a.id",$id);
		return $this->db->get()->row_array();
	}

	public function pengajuan(){
		$this->db->select('a.id,a.id_nasabah,a.jumlah_pengajuan,a.posisi,b.nama,b.no_telpon,b.tgl_lahir,b.alamat,c.nama_produk,d.jangka, e.pembayaran,f.status,g.nama_cabang,h.nama as nama_analis');
		$this->db->from('pengajuan a');
		$this->db->join('nasabah b','a.id_nasabah=b.id');
		$this->db->join('master_produk c','a.id_produk=c.id');
		$this->db->join('jangka_waktu d', 'a.id_jangka_waktu = d.id');
		$this->db->join('master_pembayaran e', 'a.id_pembayaran = e.id');
		$this->db->join('master_agunan f', 'a.id_agunan = f.id');
		$this->db->join('master_cabang g', 'a.id_cabang = g.id');
		$this->db->join('user h', 'a.id_analis = h.id','left');
		return $this->db->get()->result();
	}

	public function score($id){
		$this->db->select("a.*,c.bobot as usia,d.bobot as pendidikan,e.bobot as status,f.bobot as status_rekening,g.bobot as jenis_kredit, h.bobot as status_asuransi, j.bobot as jenis_instansi,k.bobot as besar_penghasilan, l.bobot as status_pegawai,m.bobot as lama_bekerja, n.bobot as lama_tinggal");
		$this->db->from("nasabah a");
		$this->db->join("detail_nasabah b","a.id=b.id_nasabah");
		$this->db->join("master_usia c","b.id_usia=c.id");
		$this->db->join("master_pendidikan d","b.id_pendidikan=d.id");
		$this->db->join("master_status_perkawinan e","b.id_status_perkawinan=e.id");
		$this->db->join("master_rekening_bank f","b.id_rekening_bank=f.id");
		$this->db->join("master_riwayat_kredit g","b.id_riwayat_kredit=g.id");
		$this->db->join("master_asuransi_kredit h","b.id_asuransi_kredit=h.id");
		$this->db->join("master_instansi i","b.id_instansi=h.id");
		$this->db->join("master_instansi j","b.id_instansi=h.id");
		$this->db->join("master_penghasilan k","b.id_penghasilan=h.id");
		$this->db->join("master_status_pegawai l","b.id_status_pegawai=h.id");
		$this->db->join("master_lama_bekerja m","b.id_lama_bekerja=h.id");
		$this->db->join("master_lama_tinggal n","b.id_usia=h.id");
		$this->db->where("a.id",$id);
		return $this->db->get()->row_array();	
	}

	public function analisa(){
		$this->db->select('a.id,a.id_nasabah,a.jumlah_pengajuan,a.posisi,b.nama,b.no_telpon,b.tgl_lahir,b.alamat,c.nama_produk,d.jangka, e.pembayaran,f.status,g.nama_cabang,h.nama as nama_analis');
		$this->db->from('pengajuan a');
		$this->db->join('nasabah b','a.id_nasabah=b.id');
		$this->db->join('master_produk c','a.id_produk=c.id');
		$this->db->join('jangka_waktu d', 'a.id_jangka_waktu = d.id');
		$this->db->join('master_pembayaran e', 'a.id_pembayaran = e.id');
		$this->db->join('master_agunan f', 'a.id_agunan = f.id');
		$this->db->join('master_cabang g', 'a.id_cabang = g.id');
		$this->db->join('user h', 'a.id_analis = h.id','left');
		$this->db->where('a.posisi','ANALIS');
		
		return $this->db->get()->result();
	}

}

/* End of file Nasabah.php */


?>
