<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
<title>BA pemeriksaan Administratif</title>
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
    
    $tglba = $p->tgl_administratif;
    $tgl = date('j',strtotime($tglba));
    $bln = date('n',strtotime($tglba));
    $thn = date('Y',strtotime($tglba));
    $hari = hari_indo($tglba);
    $tanggal = number_to_words($tgl);
    $bulan = bulan($bln);
    $tahun = number_to_words($thn);
    $noba = $p->no_administratif;
    if(empty($noba) || $noba == NULL || $noba == "-")
    {
        $no_ba = "027/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BPKD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/".$thn;
    }else{
        $no_ba = $noba;
    }
    $nobast = $p->no_bast;
    if(empty($nobast) || $nobast == NULL || $nobast == "-")
    {
        $no_bast = "027/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BPKD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/".$thn;
    }else{
        $no_bast = $nobast;
    }

?>

    <p class=MsoNormal align=center style='font-size:12.0pt;margin-bottom:3pt;text-align:center'>
        <b>BERITA ACARA HASIL PEMERIKSAAN ADMINISTRATIF</b>
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
            <td>Nama</td>
            <td>: <?php echo $p->nama_pphp ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: Pejabat Pemeriksa Hasil Pekerjaan</td>
        </tr>

    </table>

    <p style='font-size:12.0pt;text-align:justify;'>yang diangkat berdasarkan Surat Keputusan Kepala Badan Pengelolaan Keuangan Daerah Kabupaten Pangandaran Nomor : <?php echo $p->no_sk_pphp ?> tentang Penetapan Pejabat Pemeriksa Hasil Pekerjaan pada Badan Pengelolaan Keuangan Daerah Kabupaten Pangandaran, telah mengadakan Pemeriksaan Administratif terhadap pekerjaan <?php echo $p->nama_paket ?> sebagaimana Surat Perintah Kerja (SPK) Nomor:  <?php echo $p->no_kontrak ?> dengan hasil sebagai berikut:</p>

    <table border="1" cellspacing=0 cellpadding=0 style='margin-left:20pt;margin-bottom:0;border-collapse:collapse' width="100%">
		<tr style="text-align:center;">
			<th>No</th>
			<th>Uaraian</th>
			<th>Ada</th>
			<th>Tidak<br>Ada</th>
			<th>Keterangan</th>
		</tr>
        <tr>
            <td>1. </td>
            <td>Dokumen Penganggaran / DPA</td>
            <td>
			<p style="font-family:DejaVu Sans;margin:none;text-align:center;">√</p>
			</td>
            <td></td>
            <td>Nomor  <?php echo $p->no_dpa ?></td>
        </tr>
        <tr>
			<td>2. </td>
            <td>Surat Penetapan PPK</td>
            <td>
			<p style="font-family:DejaVu Sans;margin:none;text-align:center;">√</p>
			</td>
            <td></td>
            <td>Nomor  <?php echo $p->no_sk_ppk ?></td>
        </tr>
        <tr>
			<td>3. </td>
            <td>KAK</td>
            <td>
			<p style="font-family:DejaVu Sans;margin:none;text-align:center;">√</p>
			</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
			<td>4. </td>
            <td>Dokumen Kontrak</td>
            <td>
			<p style="font-family:DejaVu Sans;margin:none;text-align:center;">√</p>
			</td>
            <td></td>
            <td>
			Nomor: <?php echo $p->no_kontrak ?>
			<br>
			Tanggal : <?php echo date_indo($p->tgl_kontrak) ?>
			</td>
        </tr>
        <tr>
			<td>5.</td>
            <td>Berita Acara serah Terima</td>
            <td>
			<p style="font-family:DejaVu Sans;margin:none;text-align:center;">√</p>
			</td>
            <td></td>
            <td>
			Nomor: <?php echo $p->no_bast ?>
			<br>
			Tanggal : <?php echo date_indo($p->tgl_bast) ?>
			</td>
        </tr>
    </table>
    <p style='font-size:12.0pt;text-align:justify;'>Demikian Berita Acara Hasil Pemeriksaan Administratif ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

    <table cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none;' width="100%">
        <tr style='height:122.0pt'>
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
            <td width=50% valign=top style='padding:0cm 5.4pt 0cm 5.4pt;'>
                <p style="margin-bottom:0;text-align:center;">Pejabat Pemeriksa Hasil Pekerjaan</p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <p style='margin-bottom:0;text-align:center;line-height:normal'><b><u><?php echo $p->nama_pphp ?></u></b></p>
                <p style='margin-top:0;text-align:center;line-height:normal'>NIP. <?php echo $p->nip_pphp ?></p>
            </td>
        </tr>
    </table>
<?php } ?>
    </div>

</body>
</html>