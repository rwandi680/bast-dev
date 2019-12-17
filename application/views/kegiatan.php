        <section class="container" id="sc1">
            <h3>Daftar Lampiran</h3>
            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#tambah">Tambah</button>
            <br>
            <br>
            <table class="table" width="100%">
                <tr>
                    <th>#</th>
                    <th>No DPA</th>
                    <th>Kegiatan</th>
                </tr>
                <?php $n=1;
                foreach($keg as $r){
                    echo "
                    <tr>
                        <td>".$n++ ."</td>
                        <td>$r->no_dpa</td>
                        <td>$r->kegiatan</td>
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
            <form action="<?php echo site_url('bast/addkeg') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nodpa">No DPA*</label>
                    <input type="text" name="nodpa" id="nodpa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="keg">Uraian*</label>
                    <input type="text" name="keg" id="keg" class="form-control">
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