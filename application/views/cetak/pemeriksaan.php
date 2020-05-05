<html>
<head>
<title>BA Pemeriksaan</title>
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
    $noba = $p->no_pemeriksaan;
    $tglba = $p->tgl_pemeriksaan;
    $tgl = date('j',strtotime($tglba));
    $bln = date('n',strtotime($tglba));
    $thn = date('Y',strtotime($tglba));
    $hari = hari_indo($tglba);
    $tanggal = number_to_words($tgl);
    $bulan = bulan($bln);
    $tahun = number_to_words($thn);
    if(empty($noba) || $noba == NULL || $noba == "-")
    {
        $no_ba = "027/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BPKD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/".$thn;
    }else{
        $no_ba = $noba;
    }

?>

    <p class=MsoNormal align=center style='font-size:12.0pt;margin-bottom:3pt;text-align:center'>
        <b>BERITA ACARA PEMERIKSAAN</b>
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
            <td>: Badan Pengelolaan Keuangan Daerah Kabupaten Pangandaran, Jln. Raya Cijulang No. 248 Cijulang</td>
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

    </table>

    <p style='font-size:12.0pt;margin-bottom:2pt;text-align:justify;'>Dengan ini menyatakan telah mengadakan pemeriksaan bersama terhadap Pekerjaan :</p>
    <table cellspacing=0 cellpadding=0 style='margin-left:20pt;margin-bottom:0;border-collapse:collapse;border:none'>
        <tr>
            <td>a. </td>
            <td> Pekerjaan</td>
            <td>: <?php echo $p->nama_paket ?></td>
        </tr>
        <tr>
            <td>b. </td>
            <td> Lokasi</td>
            <td>: Badan Pengelolaan Keuangan Daerah Kabupaten Pangandaran</td>
        </tr>
    </table>

    <p style='font-size:12.0pt;margin-bottom:2pt;margin-top:0;'>Berdasarkan Surat Perintah Kerja (SPK)</p>
    <table cellspacing=0 cellpadding=0 style='margin-left:20pt;margin-bottom:2pt;border-collapse:collapse;border:none'>
        <tr>
            <td> Nomor</td>
            <td>: <?php echo $p->no_kontrak ?></td>
        </tr>
        <tr>
            <td> Tanggal</td>
            <td>: <?php echo date_indo($p->tgl_kontrak) ?></td>
        </tr>
        <tr>
            <td> Penyedia Jasa</td>
            <td>: <?php echo $p->penyedia ?></td>
        </tr>
        <tr>
            <td> Nilai Pekerjaan</td>
            <td>: Rp.<?php echo number_format($p->nilai_kontrak) ?></td>
        </tr>
        <tr>
            <td> Kemajuan Pekerjaan</td>
            <td>: 100% (Seratus Persen)</td>
        </tr>
    </table>

    <p style='font-size:12.0pt;text-align:justify;'>Berdasarkan pemeriksaan tersebut Penyedia Jasa telah menyelesaikan Pekerjaan dengan prestasi 100% (Seratus persen) dan dinyatakan sesuai.</p>
    <p style='font-size:12.0pt;'>Demikian Berita Acara Pemeriksaan ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>

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