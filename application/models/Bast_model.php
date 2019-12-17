<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bast_model extends CI_Model {

	public function get_list()
	{
        $this->db->join('tbl_ppk','tbl_ppk.id_ppk = tbl_kontrak.id_ppk');
		return $this->db->get('tbl_kontrak')->result();
    }

    function get_kontrak_id($idkontrak)
    {
        $this->db->where('id_kontrak',$idkontrak);
        return $this->db->get('tbl_kontrak')->row_array();
    }

    function get_bast($idkontrak)
    {
        $this->db->where('id_kontrak',$idkontrak);
        return $this->db->get('tbl_bast')->result();
    }

    function get_bast_id($idbast)
    {
        $this->db->where('id_bast',$idbast);
        return $this->db->get('tbl_bast')->row_array();
    }

    function get_keg()
    {
        return $this->db->get('tbl_keg')->result();
    }

    public function addkeg($params)
    {
        $this->db->insert('tbl_keg',$params);
        return $this->db->insert_id();
    }

    function get_ppk()
    {
        return $this->db->get('tbl_ppk')->result();
    }
    function get_pphp()
    {
        return $this->db->get('tbl_pphp')->result();
    }
    
    public function addkontrak($params)
    {
        $this->db->insert('tbl_kontrak',$params);
        return $this->db->insert_id();
    }

    public function updatekontrak($idkontrak,$params)
    {
        $this->db->where('id_kontrak',$idkontrak);
        return $this->db->update('tbl_kontrak',$params);
    }

    public function get_bast_kontrak($idkontrak)
    {
        $this->db->where('id_kontrak',$idkontrak);
        return $this->db->get('tbl_bast')->row_array();
    }

    public function addbast($params)
    {
        $this->db->insert('tbl_bast',$params);
        return $this->db->insert_id();
    }

    public function updatebast($idkontrak,$params)
    {
        $this->db->where('id_kontrak',$idkontrak);
        return $this->db->update('tbl_bast',$params);
    }

    public function get_pemeriksaan($idkontrak)
    {
        $this->db->select('id_bast');
        $this->db->select('no_pemeriksaan');
        $this->db->select('tgl_pemeriksaan');
        $this->db->select('no_kontrak');
        $this->db->select('tgl_kontrak');
        $this->db->select('nilai_kontrak');
        $this->db->select('nama_paket');
        $this->db->select('kode_paket');
        $this->db->select('penyedia');
        $this->db->select('alamat_penyedia');
        $this->db->select('wakil_penyedia');
        $this->db->select('jabatan_wakil');
        $this->db->select('nama_ppk');
        $this->db->select('jabatan_ppk');
        $this->db->select('nip_ppk');
        $this->db->where('tbl_bast.id_kontrak',$idkontrak);
        $this->db->join('tbl_kontrak','tbl_kontrak.id_kontrak = tbl_bast.id_kontrak');
        $this->db->join('tbl_ppk','tbl_ppk.id_ppk = tbl_kontrak.id_ppk');
        return $this->db->get('tbl_bast')->result();
    }

    public function get_serahterima($idkontrak)
    {
        $this->db->select('id_bast');
        $this->db->select('no_pemeriksaan');
        $this->db->select('tgl_pemeriksaan');
        $this->db->select('no_bast');
        $this->db->select('tgl_bast');
        $this->db->select('no_kontrak');
        $this->db->select('tgl_kontrak');
        $this->db->select('nilai_kontrak');
        $this->db->select('kode_paket');
        $this->db->select('nama_paket');
        $this->db->select('penyedia');
        $this->db->select('alamat_penyedia');
        $this->db->select('wakil_penyedia');
        $this->db->select('jabatan_wakil');
        $this->db->select('nama_ppk');
        $this->db->select('jabatan_ppk');
        $this->db->select('nip_ppk');
        $this->db->select('no_sk_ppk');
        $this->db->where('tbl_bast.id_kontrak',$idkontrak);
        $this->db->join('tbl_kontrak','tbl_kontrak.id_kontrak = tbl_bast.id_kontrak');
        $this->db->join('tbl_ppk','tbl_ppk.id_ppk = tbl_kontrak.id_ppk');
        return $this->db->get('tbl_bast')->result();
    }

    public function get_administratif($idkontrak)
    {
        $this->db->select('id_bast');
        $this->db->select('no_administratif');
        $this->db->select('tgl_administratif');
        $this->db->select('no_bast');
        $this->db->select('tgl_bast');
        $this->db->select('no_kontrak');
        $this->db->select('tgl_kontrak');
        $this->db->select('nilai_kontrak');
        $this->db->select('nama_paket');
        $this->db->select('penyedia');
        $this->db->select('alamat_penyedia');
        $this->db->select('wakil_penyedia');
        $this->db->select('jabatan_wakil');
        $this->db->select('nama_ppk');
        $this->db->select('jabatan_ppk');
        $this->db->select('nip_ppk');
        $this->db->select('no_sk_ppk');
        $this->db->select('nama_pphp');
        $this->db->select('nip_pphp');
        $this->db->select('no_sk_pphp');
        $this->db->select('no_dpa');
        $this->db->where('tbl_bast.id_kontrak',$idkontrak);
        $this->db->join('tbl_kontrak','tbl_kontrak.id_kontrak = tbl_bast.id_kontrak');
        $this->db->join('tbl_ppk','tbl_ppk.id_ppk = tbl_kontrak.id_ppk');
        $this->db->join('tbl_pphp','tbl_pphp.id_pphp = tbl_kontrak.id_pphp');
        $this->db->join('tbl_keg','tbl_keg.id_keg = tbl_kontrak.id_keg');
        return $this->db->get('tbl_bast')->result();
    }

    public function get_pembayaran($idkontrak)
    {
        $this->db->select('id_bast');
        $this->db->select('no_pembayaran');
        $this->db->select('tgl_pembayaran');
        $this->db->select('no_bast');
        $this->db->select('tgl_bast');
        $this->db->select('no_kontrak');
        $this->db->select('tgl_kontrak');
        $this->db->select('nilai_kontrak');
        $this->db->select('kode_paket');
        $this->db->select('nama_paket');
        $this->db->select('penyedia');
        $this->db->select('alamat_penyedia');
        $this->db->select('wakil_penyedia');
        $this->db->select('jabatan_wakil');
        $this->db->select('nama_ppk');
        $this->db->select('jabatan_ppk');
        $this->db->select('nip_ppk');
        $this->db->select('no_sk_ppk');
        $this->db->select('kegiatan');
        $this->db->select('sumber_dana');
        $this->db->where('tbl_bast.id_kontrak',$idkontrak);
        $this->db->join('tbl_kontrak','tbl_kontrak.id_kontrak = tbl_bast.id_kontrak');
        $this->db->join('tbl_ppk','tbl_ppk.id_ppk = tbl_kontrak.id_ppk');
        $this->db->join('tbl_keg','tbl_keg.id_keg = tbl_kontrak.id_keg');
        return $this->db->get('tbl_bast')->result();
    }

    function get_lampiran($idbast)
    {
        $this->db->where('id_bast',$idbast);
        return $this->db->get('tbl_lamp_bast')->result();
    }

    function addlampiran($params)
    {
        $this->db->insert('tbl_lamp_bast',$params);
        return $this->db->insert_id();
    }
}