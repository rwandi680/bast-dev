<html>

<head>
    <title>Lampiran BA Pembayaran</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
        }

        /* Style Definitions */
        p.MsoNormal,
        li.MsoNormal,
        div.MsoNormal {
            margin-top: 0cm;
            margin-right: 0cm;
            margin-left: 0cm;
            font-size: 11pt;
        }
    </style>

</head>

<body>
    <div>
        <table cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:none;' width="100%">
            <tr>
                <td width=95 valign=top style='width:68.2pt;border:none;border-bottom:double windowtext 3pt;'>
                    <img width=75 src="<?php echo site_url() ?>assets/img/logo.png">
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
        <?php foreach ($pem as $p) {
            $noba = $p->no_pembayaran;
            $tglba = $p->tgl_pembayaran;
            $hari = hari_indo($tglba);
            $thn = date('Y', strtotime($tglba));
            if (empty($noba) || $noba == NULL || $noba == "-") {
                $no_ba = "027/ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; BPKD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/" . $thn;
            } else {
                $no_ba = $noba;
            }

            $id = $p->id_bast;
            $qlam = $this->db->query("SELECT * FROM tbl_lamp_bast WHERE id_bast = '$id' AND jenis = 2");

        ?>

            <p class=MsoNormal align=center style='font-size:12.0pt;margin-bottom:3pt;text-align:center'>
                <b>LAMPIRAN BERITA ACARA PEMBAYARAN</b>
            </p>
            <p class=MsoNormal align=center style='font-size:12.0pt;margin-bottom:3pt;text-align:center'>
                <b><?php echo $p->nama_paket ?></b>
            </p>
            <p class=MsoNormal align=center style='font-size:12.0pt;text-align:center'>
                Nomor: <?php echo $no_ba ?>
            </p>


            <table cellspacing=0 cellpadding=0 style='margin-left:20pt;border-collapse:collapse;border:none;margin-bottom:10px;'>
                <tr>
                    <td>Kode PL </td>
                    <td> : <?php echo $p->kode_paket ?></td>
                </tr>
                <tr>
                    <td>Nama Paket </td>
                    <td> : <?php echo $p->nama_paket ?></td>
                </tr>
                <tr>
                    <td>Penyedia </td>
                    <td> : <?php echo $p->penyedia ?></td>
                </tr>

            </table>

            <table cellspacing=0 cellpadding=0 style='margin-left:20pt;margin-bottom:0;border-collapse:collapse;' border=1 width="100%">
                <tr style='text-align:center;'>
                    <th height='50px'>Jenis Barang / Jasa</th>
                    <th>Volume</th>
                    <th>Harga Satuan</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                </tr>
                <?php
                $sum = 0;
                foreach ($qlam->result() as $r) {
                    $sum = $sum + ($r->nominal * $r->volume);
                    echo "
        <tr>
            <td> $r->uraian </td>
            <td style='text-align:center;'> " . $r->volume . " " . $r->satuan . "</td>
            <td style='text-align:right;'> " . number_format($r->nominal) . " </td>
            <td style='text-align:right;'> " . number_format($r->nominal * $r->volume) . "</td>
            <td> $r->keterangan </td>
        </tr>";
                } ?>
                <tr>
                    <td colspan="3" style='text-align:center'>Sub Total</td>
                    <td style='text-align:right;'><?php echo number_format($sum); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" style='text-align:center'>PPN 10%</td>
                    <td style='text-align:right;'><?php echo number_format($sum / 100 * 10); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" style='text-align:center'>TOTAL</td>
                    <td style='text-align:right;'><b><?php echo number_format(($sum / 100 * 10) + $sum); ?></b></td>
                    <td></td>
                </tr>
            </table>

            <table cellspacing=0 cellpadding=0 style='border-collapse:collapse;border:1px;' width="100%">
                <tr style='height:122.0pt'>
                    <td width=50% valign=top style='padding:0cm 5.4pt 0cm 5.4pt;'>
                        <br>
                        <p style="margin-bottom:0;text-align:center;">Penyedia Jasa <br>
                            <?php echo $p->penyedia ?></p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <p style='margin-bottom:0;text-align:center;line-height:normal'><b><u><?php echo $p->wakil_penyedia ?></u></b></p>
                        <p style='margin-top:0;margin-bottom:0;text-align:center;line-height:normal'><?php echo $p->jabatan_wakil ?></p>
                    </td>
                    <td width=50% valign=top style='padding:0cm 5.4pt 0cm 5.4pt;'>
                        <p style="margin-bottom:0;text-align:center;">Cijulang, <?php echo date_indo($tglba) ?></p>
                        <p style="margin:none;text-align:center;">Pejabat Pembuat Komitmen</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p style='margin-bottom:0;text-align:center;line-height:normal'><b><u><?php echo $p->nama_ppk ?></u></b></p>
                        <p style='margin-top:0;margin-bottom:0;text-align:center;line-height:normal'>NIP. <?php echo $p->nip_ppk ?></p>
                    </td>
                </tr>
            </table>
        <?php } ?>
    </div>

</body>

</html>