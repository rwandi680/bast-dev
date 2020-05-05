<html>
<head>
<title>BA Serah Terima</title>
<style>

body{
    font-family:"Arial",sans-serif;
}

 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
    font-size:11.0pt;}

</style>

</head>

<body>
    <div>
    <table cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none;' width="100%">
        <tr>
            <td width=95 valign=top style='width:68.2pt;border:none;border-bottom:double windowtext 3pt;'>
                <img width=75 src="./assets/img/logo.png">
            </td>
            <td valign=top style='border:none;border-bottom:double windowtext 3pt;'>
                <p align=center style='font-size:16.0pt;margin-top:0;margin-bottom:5pt;text-align:center;'>
                    <b>PEMERINTAH KABUPATEN PANGANDARAN</b>
                </p>
                <p align=center style='font-size:18.0pt;margin-top:0;margin-bottom:5pt;text-align:center;'>
                    <b>BADAN PENGELOLAAN KEUANGAN DAERAH</b>
                </p>
                <p align=center style=font-size:12.0pt;margin-top:0;margin-bottom:5pt;text-align:center;'>
                    Jln. Raya Cijulang No. 248 Telp/Fax : 0265-2640011 Cijulang 46394
                </p>
            </td>
        </tr>
    </table>
    <br>
<?php  foreach($pem as $p){
    
    $tglba = $p->tgl_bast;
    $tgl = date('j',strtotime($tglba));
    $bln = date('n',strtotime($tglba));
    $thn = date('Y',strtotime($tglba));
    $hari = hari_indo($tglba);
    $tanggal = number_to_words($tgl);
    $bulan = bulan($bln);
    $tahun = number_to_words($thn);
    $noba = $p->no_bast;
    if(empty($noba) || $noba == NULL || $noba == "-")
    {
        $no_ba = "027/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BPKD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/".$thn;
    }else{
        $no_ba = $noba;
    }
    $nobapem = $p->no_pemeriksaan;
    if(empty($nobapem) || $nobapem == NULL || $nobapem == "-")
    {
        $no_bapem = "027/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BPKD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/".$thn;
    }else{
        $no_bapem = $nobapem;
    }
    $id = $p->id_bast;
    $qlam = $this->db->query("SELECT * FROM tbl_lamp_bast WHERE id_bast = '$id' AND jenis = 1");

?>

    <p class=MsoNormal align=center style='font-size:12.0pt;margin-bottom:3pt;text-align:center'>
        <b>BERITA ACARA SERAH TERIMA</b>
    </p>
    <p class=MsoNormal align=center style='font-size:12.0pt;margin-bottom:3pt;text-align:center'>
        <b><?php echo $p->nama_paket ?></b>
    </p>
    <p class=MsoNormal align=center style='font-size:12.0pt;text-align:center'>
        NOMOR: <?php echo $no_ba ?>
    </p>

    <p style='font-size:12.0pt;text-align:justify;'>
        Pada hari ini <b><?php echo $hari ?></b>
        tanggal <b><?php echo $tanggal ?></b>
        Bulan <b><?php echo $bulan ?></b>
        Tahun <b><?php echo $tahun ?></b>,
        kami yang bertanda tangan dibawah ini :
    </p>
    <table cellspacing=0 cellpadding=0 style='margin-left:20pt;border-collapse:collapse;border:none'>
        <tr>
            <td>I.</td>
            <td>Nama</td>
            <td>: <?php echo $p->nama_ppk ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Jabatan</td>
            <td>: <?php echo $p->jabatan_ppk ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>: Badan Pengelolaan Keuangan Daerah Kabupaten Pangandaran, Jln. Raya Cijulang No. 248 Cijulang
            </td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="text-align:justify;">
                yang diangkat berdasarkan Surat Keputusan Kepala Badan Pengelolaan Keuangan Daerah Kabupaten Pangandaran Nomor : <?php echo $p->no_sk_ppk ?> tentang penetapan Pejabat Pembuat Komitmen pada Badan Pengelolaan Keuangan Daerah Kabupaten Pangandaran<br>
                selanjutnya disebut sebagai PIHAK KESATU
            </td>
        </tr>
        <tr>
            <td>II.</td>
            <td>Nama</td>
            <td>: <?php echo $p->wakil_penyedia ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Jabatan</td>
            <td>: <?php echo $p->jabatan_wakil." ".$p->penyedia ?></td>
        </tr>
        <tr>
            <td></td>
            <td>Alamat</td>
            <td>: <?php echo $p->alamat_penyedia ?></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">
            selanjutnya disebut sebagai PIHAK KEDUA
            </td>
        </tr>
    </table>

    <p style='font-size:12.0pt;margin-bottom:0;text-align:justify;'>Berdasarkan:</p>
    <p style='font-size:12.0pt;margin-top:0;margin-bottom:0;text-align:justify;'>
        1. Surat Perintah Kerja (SPK) Nomor : <?php echo $p->no_kontrak." Tanggal ".date_indo($p->tgl_kontrak) ?>
    </p>
    <p style='font-size:12.0pt;margin-top:0;margin-bottom:0;text-align:justify;'>
        2. Berita Acara Pemeriksaan Nomor  : <?php echo $no_bapem." Tanggal ".date_indo($p->tgl_pemeriksaan) ?>
    </p>

    <p style='font-size:12.0pt;margin-bottom:2pt;text-align:justify;'>Kedua belah pihak sepakat untuk mengadakan serah terima <?php echo $p->nama_paket ?> dengan ketentuan sebagai berikut:</p>
    <p style='font-size:12.0pt;margin-bottom:2pt;text-align:center;'>Pasal 1</p>
    <p style='font-size:12.0pt;margin-bottom:2pt;text-align:justify;'>PIHAK KEDUA menyerahkan kepada PIHAK KESATU dan PIHAK KESATU menyatakan menerima dari PIHAK KEDUA atas hasil pekerjaan yang telah selesai dilaksanakan sebagai berikut: </p>
    <table cellspacing=0 cellpadding=0 style='margin-left:20pt;margin-bottom:0;border-collapse:collapse;border:none'>
        <tr>
            <td>1. </td>
            <td> Pekerjaan</td>
            <td>: <?php echo $p->nama_paket ?></td>
        </tr>
        <tr>
            <td>2. </td>
            <td> Lokasi</td>
            <td>: Kabupaten Pangandaran</td>
        </tr>
        <tr>
            <td>3. </td>
            <td> Instansi/Unit Kerja </td>
            <td>: Badan Pengelolaan Keuangan Daerah Kabupaten Pangandaran</td>
        </tr>
    </table>
    <p style='font-size:12.0pt;margin-bottom:2pt;text-align:center;'>Pasal 2</p>

    <p style='font-size:12.0pt;margin-bottom:2pt;text-align:jusify;'>Penyerahan sebagaimana dimaksud dalam pasal 1 berupa: </p>
    <?php $n=1; foreach($qlam->result() as $r) {
        echo $n++;
        echo ". ";
        echo $r->uraian."<br>";

    } ?>
    <p style='font-size:12.0pt;margin-bottom:2pt;margin-top:50pt;text-align:center;'>Pasal 3</p>
    <p style='font-size:12.0pt;margin-bottom:2pt;text-align:jusify;'>Dengan adanya Serah Terima ini maka selanjutnya tanggung jawab atas hasil pekerjaan tersebut beralih dari PIHAK KEDUA kepada PIHAK KESATU.</p>

    <p style='font-size:12.0pt;text-align:justify;'>Demikian Berita Acara Serah Terima ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

    <table cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none;' width="100%">
        <tr style='height:122.0pt'>
            <td width=50% valign=top style='padding:0cm 5.4pt 0cm 5.4pt;'>
                <p style="margin-bottom:0;text-align:center;">Penyedia Jasa <br>
                <?php echo $p->penyedia ?></p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p style='margin-bottom:0;text-align:center;line-height:normal'><b><u><?php echo $p->wakil_penyedia ?></u></b></p>
                <p style='margin-top:0;text-align:center;line-height:normal'><?php echo $p->jabatan_wakil ?></p>
            </td>
            <td width=50% valign=top style='padding:0cm 5.4pt 0cm 5.4pt;'>
                <p style="margin-bottom:0;text-align:center;">Pejabat Pembuat Komitmen</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p style='margin-bottom:0;text-align:center;line-height:normal'><b><u><?php echo $p->nama_ppk ?></u></b></p>
                <p style='margin-top:0;text-align:center;line-height:normal'>NIP. <?php echo $p->nip_ppk ?></p>
            </td>
        </tr>
    </table>
<?php } ?>
    </div>

</body>
</html>