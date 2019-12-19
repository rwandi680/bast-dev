<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bast extends CI_Controller {
    
	function __construct()
	{
		parent::__construct();
		$this->load->model('bast_model');
    }
    
	public function index()
	{
        // $data['kontrak'] = $this->bast_model->get_list();
        $data['keg'] = $this->bast_model->get_keg();
        $data['ppk'] = $this->bast_model->get_ppk();
        $data['pphp'] = $this->bast_model->get_pphp();

        $this->load->view('include/head');
		$this->load->view('bast/index',$data);
    }

    public function listkontrak()
    {
        $data['kontrak'] = $this->bast_model->get_list();

        $ajax = [];
        $no = 1;
        foreach($data['kontrak'] as $r)
        {
            $row = array(
                'no' => $no++,
                'nokontrak' => '<a href="'.site_url('bast/rinc/'.$r->id_kontrak).'">'.$r->no_kontrak.'</a>',
                'tgl' => date_indo($r->tgl_kontrak),
                'nmpaket' => $r->nama_paket,
                'nilaikontrak' => 'Rp. '.number_format($r->nilai_kontrak),
                'ppk' => $r->nama_ppk,
                'penyedia' => $r->penyedia,
                'opsi' => '<button class="btn btn-sm btn-primary item_edit" data-id="'.$r->id_kontrak.'">edit</button>',
            );

            $ajax[] = $row;
        }

        $output = array(
            "data" => $ajax,
        );
        echo json_encode($output);
    }

    public function addkontrak()
    {
        $params = array(
            'no_kontrak' => $this->input->post('no_kontrak'),
            'tgl_kontrak' => $this->input->post('tgl_kontrak'),
            'nilai_kontrak' => $this->input->post('nilai'),
            'nama_paket' => $this->input->post('paket'),
            'kode_paket' => $this->input->post('kdp'),
            'penyedia' => $this->input->post('penyedia'),
            'norek_penyedia' => $this->input->post('norek'),
            'alamat_penyedia' => $this->input->post('alamat'),
            'wakil_penyedia' => $this->input->post('wakil'),
            'jabatan_wakil' => $this->input->post('jab_wakil'),
            'id_ppk' => $this->input->post('idppk'),
            'id_pphp' => $this->input->post('idpphp'),
            'jenis_kontrak' => 1,
            'id_keg' => $this->input->post('idkeg'),
            'sumber_dana' => $this->input->post('dana')
        );
        $insert = $this->bast_model->addkontrak($params);
        redirect('bast');
    }
    public function editkontrak($idkontrak)
    {
        // $idkontrak = $this->input->post('id_kontrak');
        $params = array(
            'no_kontrak' => $this->input->post('no_kontrak'),
            'tgl_kontrak' => $this->input->post('tgl_kontrak'),
            'nilai_kontrak' => $this->input->post('nilai'),
            'kode_paket' => $this->input->post('kdp'),
            'nama_paket' => $this->input->post('paket'),
            'penyedia' => $this->input->post('penyedia'),
            'norek_penyedia' => $this->input->post('norek'),
            'alamat_penyedia' => $this->input->post('alamat'),
            'wakil_penyedia' => $this->input->post('wakil'),
            'jabatan_wakil' => $this->input->post('jab_wakil'),
            'id_ppk' => $this->input->post('idppk'),
            'id_pphp' => $this->input->post('idpphp'),
            'jenis_kontrak' => 1,
            'id_keg' => $this->input->post('idkeg'),
            'sumber_dana' => $this->input->post('dana')
        );
        $update = $this->bast_model->updatekontrak($idkontrak,$params);
        echo json_encode($update);
    }

    public function getkontrakid()
    {
        $idkontrak = $this->input->post('id');
        $data = $this->bast_model->get_kontrak_id($idkontrak);
        echo json_encode($data);
    } 

    public function rinc($idkontrak)
    {
        $data['bast'] = $this->bast_model->get_bast($idkontrak);
        $this->load->view('include/head');
        $this->load->view('bast/bast',$data);
    }

    public function lamp($idbast)
    {
        $data['bast'] = $this->bast_model->get_bast_id($idbast);
        if(isset($data['bast']['id_bast']))
        {
            $data['lamp'] = $this->bast_model->get_lampiran($idbast);

            $this->load->view('include/head');
            $this->load->view('bast/lampiran',$data);
            
        }else{
            echo "error";
        }
    }

    public function addlamp()
    {
        $params = array(
            'id_bast' => $this->input->post('id'),
            'jenis' => $this->input->post('jenis'),
            'uraian' => $this->input->post('uraian'),
            'volume' => $this->input->post('volume'),
            'satuan' => $this->input->post('satuan'),
            'nominal' => $this->input->post('nominal'),
            'keterangan' => $this->input->post('ket'),
        );
        $this->bast_model->addlampiran($params);
        redirect('bast/lamp/'.$this->input->post('id'));
    }

    public function addbast()
    {
        $idkontrak = $this->input->post('id');
        $data['bast'] = $this->bast_model->get_bast_kontrak($idkontrak);
        if(isset($data['bast']['id_kontrak']))
        {
            $params = array(
                // 'id_kontrak' => $this->input->post('id'),
                'no_pemeriksaan' => $this->input->post('pem'),
                'tgl_pemeriksaan' => $this->input->post('tgl_pem'),
                'no_bast' => $this->input->post('bast'),
                'tgl_bast' => $this->input->post('tgl_bast'),
                'no_administratif' => $this->input->post('adm'),
                'tgl_administratif' => $this->input->post('tgl_adm'),
                'no_pembayaran' => $this->input->post('no_bayar'),
                'tgl_pembayaran' => $this->input->post('tgl_bayar'),
            );
            $this->bast_model->updatebast($idkontrak,$params);
            redirect('bast/rinc/'.$idkontrak);
        }else{
            $params = array(
                'id_kontrak' => $idkontrak,
                'no_pemeriksaan' => $this->input->post('pem'),
                'tgl_pemeriksaan' => $this->input->post('tgl_pem'),
                'no_bast' => $this->input->post('bast'),
                'tgl_bast' => $this->input->post('tgl_bast'),
                'no_administratif' => $this->input->post('adm'),
                'tgl_administratif' => $this->input->post('tgl_adm'),
                'no_pembayaran' => $this->input->post('no_bayar'),
                'tgl_pembayaran' => $this->input->post('tgl_bayar'),
            );
            $this->bast_model->addbast($params);
            redirect('bast/rinc/'.$idkontrak);
        }
    }

    public function cetakpem($idkontrak)
    {
        $data['pem'] = $this->bast_model->get_pemeriksaan($idkontrak);
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "bas-pemeriksaan.pdf";
        $this->pdf->load_view('cetak/pemeriksaan',$data);

        // $this->load->view('cetak/pemeriksaan',$data);
    }

    public function cetakterima($idkontrak)
    {
        $data['pem'] = $this->bast_model->get_serahterima($idkontrak);
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "bast.pdf";
        $this->pdf->load_view('cetak/serahterima',$data);

        // $this->load->view('cetak/serahterima',$data);
    }

    public function cetakadm($idkontrak)
    {
        $data['pem'] = $this->bast_model->get_administratif($idkontrak);
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "bas-admin.pdf";
        $this->pdf->load_view('cetak/administratif',$data);

        // $this->load->view('cetak/serahterima',$data);
    }

    public function cetakbayar($idkontrak)
    {
        $data['pem'] = $this->bast_model->get_pembayaran($idkontrak);
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "bas-pembyaran.pdf";
        $this->pdf->load_view('cetak/pembayaran',$data);

        // $this->load->view('cetak/serahterima',$data);
    }

    public function cetaklamppem($idkontrak)
    {
        $data['pem'] = $this->bast_model->get_pemeriksaan($idkontrak);
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "lamp-pemeriksaan.pdf";
        $this->pdf->load_view('cetak/lamp_pemeriksaan',$data);
    }

    public function cetaklampterima($idkontrak)
    {
        $data['pem'] = $this->bast_model->get_serahterima($idkontrak);
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "lamp-bast.pdf";
        $this->pdf->load_view('cetak/lamp_serahterima',$data);
    }

    public function cetaklampbayar($idkontrak)
    {
        $data['pem'] = $this->bast_model->get_pembayaran($idkontrak);
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "lamp-pembayaran.pdf";
        $this->pdf->load_view('cetak/lamp_pembayaran',$data);
    }

    public function kegiatan()
    {
        $data['keg'] = $this->bast_model->get_keg();
        $this->load->view('include/head');
        $this->load->view('kegiatan',$data);
    }

    public function addkeg()
    {
        $params = array(
            'no_dpa' => $this->input->post('nodpa'),
            'kegiatan' => $this->input->post('keg'),
        );
        $this->bast_model->addkeg($params);
        redirect('bast/kegiatan');
    }

}
