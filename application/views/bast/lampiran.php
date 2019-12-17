        <section class="container" id="sc1">
            <h3>Daftar Lampiran</h3>
            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#tambah">Tambah</button>
            <br>
            <br>
            <table class="table" width="100%">
                <tr>
                    <th>#</th>
                    <th>Jenis</th>
                    <th>Uraian</th>
                    <th>volume</th>
                    <th>Satuan</th>
                    <th>Nominal</th>
                    <th>Keterangan</th>
                </tr>
                <?php $n=1;
                foreach($lamp as $r){
                    echo "
                    <tr>
                        <td>".$n++ ."</td>
                        <td>$r->jenis</td>
                        <td>$r->uraian</td>
                        <td>$r->volume</td>
                        <td>$r->satuan</td>
                        <td>$r->nominal</td>
                        <td>$r->keterangan</td>
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
            <form action="<?php echo site_url('bast/addlamp') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="jenis">Jenis*</label>
                    <select name="jenis" id="jenis" class="form-control">
                        <option value="1">BAST</option>
                        <option value="2">Pembayaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="uraian">Uraian*</label>
                    <input type="text" name="uraian" id="uraian" class="form-control">
                    <input type="hidden" name="id" value="<?php echo $this->uri->segment('3') ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="volume">Volume*</label>
                    <input type="text" name="volume" id="volume" class="form-control">
                </div>
                <div class="form-group">
                    <label for="satuan">Satuan*</label>
                    <input type="text" name="satuan" id="satuan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal*</label>
                    <input type="text" name="nominal" id="nominal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ket">Ket*</label>
                    <input type="text" name="ket" id="ket" class="form-control">
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