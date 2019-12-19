<html>
<head>
<title>BA Pembayaran</title>
<style>

body{
    font-family:"Arial",sans-serif;
    font-size:11.0pt;
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
    $noba = $p->no_pembayaran;
    if(empty($noba) || $noba == NULL || $noba == "-")
    {
        $no_ba = "027/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /BPKD/".date('Y');
    }else{
        $no_ba = $noba;
    }
    $tglba = $p->tgl_pembayaran;
    $tgl = date('j',strtotime($tglba));
    $bln = date('n',strtotime($tglba));
    $thn = date('Y',strtotime($tglba));
    $hari = hari_indo($tglba);
    $tanggal = number_to_words($tgl);
    $bulan = bulan($bln);
	$tahun = number_to_words($thn);
	$dpp = 100 / 110 * $p->nilai_kontrak;
	$ppn = $dpp * 10 / 100;
?>

    <p style='font-size:11.0pt;margin-bottom:0;text-align:center'>
        <b>BERITA ACARA PEMBAYARAN</b>
    </p>
    <p style='font-size:11.0pt;margin-top:0;margin-bottom:0;text-align:center'>
        <b><?php echo $p->nama_paket ?></b>
    </p>
    <p style='font-size:11.0pt;margin-top:0;text-align:center'>
        NOMOR: <?php echo $no_ba ?>
    </p>

    <p style='text-align:justify;'>
        Pada hari ini <b><?php echo $hari?></b>
        tanggal <b><?php echo $tanggal ?></b>
        Bulan <b><?php echo $bulan ?></b>
        Tahun <b><?php echo $tahun ?></b>,
        kami yang bertanda tangan dibawah ini :
    </p>
    <table cellspacing=0 cellpadding=0 style='margin-left:20pt;border-collapse:collapse;border:none'>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $p->nama_ppk ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: Kuasa Pengguna Anggaran</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: BPKD Kab. Pangandaran, Jln. Raya Cijulang No. 248 Cijulang
            </td>
        </tr>
        <tr>
			<td></td>
            <td>
                selanjutnya disebut sebagai PIHAK KESATU
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $p->wakil_penyedia ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: <?php echo $p->jabatan_wakil." ".$p->penyedia ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?php echo $p->alamat_penyedia ?></td>
        </tr>
        <tr>
            <td></td>
            <td>
            selanjutnya disebut sebagai PIHAK KEDUA
            </td>
        </tr>
		<tr>
            <td><br>Kegiatan</td>
            <td><br>: <?php echo $p->kegiatan ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: <?php echo $p->nama_paket?></td>
        </tr>
        <tr>
            <td>Sumber Dana</td>
            <td>: <?php if($p->sumber_dana == 1){echo "APBD";}else{echo "APBD-P";} echo " Kab. Pangandaran Tahun Anggaran ".date('Y',strtotime($tglba)) ?></td>
        </tr>
        <tr>
            <td>Nilai Pekerjaan</td>
            <td>: <?php echo "Rp.". number_format($p->nilai_kontrak); ?></td>
        </tr>
        <tr>
            <td>Terbilang</td>
            <td>: <?php echo number_to_words($p->nilai_kontrak)." Rupiah"; ?></td>
        </tr>
        <tr>
            <td>No. Rekening</td>
            <td>: <?php echo $p->norek_penyedia." an ".$p->penyedia; ?></td>
        </tr>
    </table>

    <p style='margin-bottom:2pt;text-align:justify;'>Dinyatakan bahwa Prestasi pekerjaan telah mencapai 100% (seratus persen) atas penagihan sebesar Rp <?php echo number_format($p->nilai_kontrak).",- (".number_to_words($p->nilai_kontrak)." Rupiah)"; ?>. Sesuai dengan Surat Perintah Kerja (SPK) dari Badan Pengelolaan Keuangan Daerah Kabupaten Pangandaran Kepada <?php echo $p->penyedia  ?>, maka PIHAK KEDUA berhak menerima pembayaran dari PIHAK KESATU dengan uraian sebagai berikut:  </p>
    <table cellspacing=0 cellpadding=0 style='margin-left:20pt;margin-bottom:0;border-collapse:collapse;border:none' width="80%">
        <tr>
            <td width="70%"> Nilai Pembayaran</td>
            <td style="text-align:right">Rp. <?php echo number_format(round($dpp,0)) ?></td>
        </tr>
        <tr>
            <td> PPN</td>
            <td style="text-align:right">Rp. <?php echo number_format(round($ppn,0)) ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td style="text-align:right"><b>Rp. <?php echo number_format($p->nilai_kontrak) ?></b></td>
        </tr>
    </table>

    <p style='text-align:justify;'>Demikian Berita Acara Pembayaran ini dibuat untuk dipergunakan sebagaimana mestinya.</p>

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
                <p style="margin-bottom:0;text-align:center;">Kuasa Pengguna Anggaran</p>
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