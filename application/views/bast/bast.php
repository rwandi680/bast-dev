        <section class="container" id="sc1">
            <h3>Daftar BAST</h3>
            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#tambah">Tambah</button>
            <br>
            <br>
            <table class="table" width="100%">
                <tr>
                    <th>#</th>
                    <th>Pemeriksaan</th>
                    <th>Serah Terima</th>
                    <th>Administratif</th>
                    <th>Pembayaran</th>
                    <th>Lampiran</th>
                </tr>
                <?php $n=1;
                $no = $n++;
                foreach($bast as $r){
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>
                        <a href='". site_url('bast/cetakpem/'.$r->id_kontrak)  ."' target=_blank class='btn btn-primary'>BA</a>
                        <a href='". site_url('bast/cetaklamppem/'.$r->id_kontrak)  ."' target=_blank class='btn btn-success'>Lamp</a>
                        </td>
                        <td>
                        <a href='". site_url('bast/cetakterima/'.$r->id_kontrak)  ."' target=_blank>$r->no_bast</a>
                        <a href='". site_url('bast/cetaklampterima/'.$r->id_kontrak)  ."' target=_blank>Lamp</a>
                        </td>
                        <td>
                        <a href='". site_url('bast/cetakadm/'.$r->id_kontrak)  ."' target=_blank>$r->no_administratif</a>
                        </td>
                        <td>
                        <a href='". site_url('bast/cetakbayar/'.$r->id_kontrak)  ."' target=_blank>$r->no_pembayaran</a>
                        <a href='". site_url('bast/cetaklampbayar/'.$r->id_kontrak)  ."' target=_blank>Lamp</a>
                        </td>
                        <td>
                        <a href='". site_url('bast/lamp/'.$r->id_bast)."'>Lampiran</a>
                        </td>
                    </tr>
                    ";
                }
                
                ?>
            </table>
        </section>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../addbast" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="pem">No. BA Pemeriksaan*</label>
                    <input type="text" name="pem" id="pem" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $this->uri->segment('3') ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tgl_pem">Tgl BA Pemeriksaan*</label>
                    <input type="date" name="tgl_pem" id="tgl_pem" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bast">No. BAST*</label>
                    <input type="text" name="bast" id="bast" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tgl_bast">Tgl BAST*</label>
                    <input type="date" name="tgl_bast" id="tgl_bast" class="form-control">
                </div>
                <div class="form-group">
                    <label for="adm">No. BA Administratif*</label>
                    <input type="text" name="adm" id="adm" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tgl_adm">Tgl Administratif*</label>
                    <input type="date" name="tgl_adm" id="tgl_adm" class="form-control">
                </div>
                <div class="form-group">
                    <label for="no_bayar">No. BA Pembayaran*</label>
                    <input type="text" name="no_bayar" id="no_bayar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tgl_bayar">Tgl BA Pembayaran*</label>
                    <input type="date" name="tgl_bayar" id="tgl_bayar" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="<?php echo site_url() ?>/../assets/js/bootstrap.min.js"></script>

</body>

</html>