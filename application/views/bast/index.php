        <section class="container" id="sc1">
            <h3>Daftar KONTRAK</h3>
            <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#tambah">Tambah</button>
            <br>
            <br>
            <table class="table" width="100%" id="tabelKontrak">
                <thead>
                <tr>
                    <th>#</th>
                    <th>No Kontrak</th>
                    <th>Tgl Kontrak</th>
                    <th>Paket Pekerjaan</th>
                    <th>Nilai Kontrak</th>
                    <th>PPK</th>
                    <th>Penyedia</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
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
            <form action="<?php echo site_url('bast/addkontrak') ?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="no_kontrak">No. Kontrak*</label>
                    <input type="text" name="no_kontrak" id="no_kontrak" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal Kontrak*</label>
                    <input type="date" name="tgl_kontrak" id="tgl" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nilai">Nilai Kontrak*</label>
                    <input type="number" name="nilai" id="nilai" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kdp">Kode Paket*</label>
                    <input type="text" name="kdp" id="kdp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="paket">Nama Paket*</label>
                    <textarea name="paket" id="paket" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="idkeg">Kegiatan*</label>
                    <select name="idkeg" id="idkeg" class="form-control">
                        <?php foreach($keg as $k){
                            echo "
                            <option value='$k->id_keg'>$k->kegiatan</option>
                            ";
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dana">Sumber Dana*</label>
                    <select name="dana" id="dana" class="form-control">
                        <option value="1">APBD</option>
                        <option value="2">APBD Perubahan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ppk">PPK*</label>
                    <select name="idppk" id="ppk" class="form-control">
                        <?php foreach($ppk as $p){
                            echo "
                            <option value='$p->id_ppk'>$p->nama_ppk</option>
                            ";
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pphp">PPHP*</label>
                    <select name="idpphp" id="pphp" class="form-control">
                        <?php foreach($pphp as $p1){
                            echo "
                            <option value='$p1->id_pphp'>$p1->nama_pphp</option>
                            ";
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penyedia">Penyedia*</label>
                    <input type="text" name="penyedia" id="penyedia" class="form-control">
                </div>
                <div class="form-group">
                    <label for="norek">No Rek Penyedia*</label>
                    <input type="text" name="norek" id="norek" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat Penyedia*</label>
                    <textarea name="alamat" id="alamat" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="wakil">Wakil Penyedia*</label>
                    <input type="text" name="wakil" id="wakil" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jab_wakil">Jabatan Wakil Penyedia*</label>
                    <input type="text" name="jab_wakil" id="jab_wakil" class="form-control">
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
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modalEdit" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEdit">Tambah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <form id="formEdit"> -->
            <div class="modal-body">
                <div class="form-group">
                    <label for="no_kontrak2">No. Kontrak*</label>
                    <input type="text" name="ed_no_kontrak" id="no_kontrak2" class="form-control">
                    <input type="hidden" name="ed_id" id="idkontrak">
                </div>
                <div class="form-group">
                    <label for="tgl2">Tanggal Kontrak*</label>
                    <input type="date" name="ed_tgl_kontrak" id="tgl2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nilai2">Nilai Kontrak*</label>
                    <input type="number" name="ed_nilai" id="nilai2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kdp2">Kode Paket*</label>
                    <input type="text" name="ed_kdp" id="kdp2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="paket2">Nama Paket*</label>
                    <textarea name="ed_paket" id="paket2" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="idkeg2">Kegiatan*</label>
                    <select name="ed_idkeg" id="idkeg2" class="form-control">
                        <?php foreach($keg as $k){
                            echo "
                            <option value='$k->id_keg'>$k->kegiatan</option>
                            ";
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="dana2">Sumber Dana*</label>
                    <select name="ed_dana" id="dana2" class="form-control">
                        <option value="1">APBD</option>
                        <option value="2">APBD Perubahan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ppk2">PPK*</label>
                    <select name="ed_idppk" id="ppk2" class="form-control">
                        <?php foreach($ppk as $p){
                            echo "
                            <option value='$p->id_ppk'>$p->nama_ppk</option>
                            ";
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pphp2">PPHP*</label>
                    <select name="ed_idpphp" id="pphp2" class="form-control">
                        <?php foreach($pphp as $p1){
                            echo "
                            <option value='$p1->id_pphp'>$p1->nama_pphp</option>
                            ";
                        } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penyedia2">Penyedia*</label>
                    <input type="text" name="ed_penyedia" id="penyedia2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="norek2">No Rek Penyedia*</label>
                    <input type="text" name="ed_norek" id="norek2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat2">Alamat Penyedia*</label>
                    <textarea name="ed_alamat" id="alamat2" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="wakil2">Wakil Penyedia*</label>
                    <input type="text" name="ed_wakil" id="wakil2" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jab_wakil2">Jabatan Wakil Penyedia*</label>
                    <input type="text" name="ed_jab_wakil" id="jab_wakil2" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="btnUpdate" class="btn btn-primary">Update</button>
            </div>
            <!-- </form> -->
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo site_url() ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
 
 
 $(document).ready(function() {

        $('#tabelKontrak').DataTable({ 
            
            "processing": true, //Feature control the processing indicator.
            "serverSide": false, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('bast/listkontrak')?>",
                "type": "GET",
            },
            columns: [
                { data: "no" },    
                { data: "nokontrak"},
                { data: "tgl" },    
                { data: "nmpaket" },    
                { data: "nilaikontrak", className: "text-right" },    
                { data: "ppk" },    
                { data: "penyedia"},    
                { data: "opsi" },    
            ]
            
        });
        
    $('#tabelKontrak').on('click','.item_edit',function(){
        const id=$(this).attr('data-id');

        $.ajax({
            url  : "<?php echo base_url('bast/getkontrakid')?>",
            type : "POST",
            dataType : "JSON",
            data : {id:id},
            success: function(data){
                $.each(data,function(no_kontrak, tgl_kontrak, nilai_kontrak){
                    $('#modalEdit').modal('show');
                    $('[name="ed_id"]').val(data.id_kontrak);
                    $('[name="ed_no_kontrak"]').val(data.no_kontrak);
                    $('[name="ed_tgl_kontrak"]').val(data.tgl_kontrak);
                    $('[name="ed_nilai"]').val(data.nilai_kontrak);
                    $('[name="ed_paket"]').val(data.nama_paket);
                    $('[name="ed_kdp"]').val(data.kode_paket);
                    $('[name="ed_penyedia"]').val(data.penyedia);
                    $('[name="ed_norek"]').val(data.norek_penyedia);
                    $('[name="ed_alamat"]').val(data.alamat_penyedia);
                    $('[name="ed_wakil"]').val(data.wakil_penyedia);
                    $('[name="ed_jab_wakil"]').val(data.jabatan_wakil);
                    $('[name="ed_idppk"]').val(data.id_ppk);
                    $('[name="ed_idpphp"]').val(data.id_pphp);
                    $('[name="ed_idkeg"]').val(data.id_keg);
                    $('[name="ed_dana"]').val(data.sumber_dana);
                });
            }
        });
        return false;
    });

    //Update Barang
    $('#modalEdit').on('click','#btnUpdate',function(){
        const id=$('#idkontrak').val();
        const nok=$('#no_kontrak2').val();
        const tgl=$('#tgl2').val();
        const nml=$('#nilai2').val();
        const kdp=$('#kdp2').val();
        const dn=$('#dana2').val();
        const pkt=$('#paket2').val();
        const keg=$('#idkeg2').val();
        const ppk=$('#ppk2').val();
        const pphp=$('#pphp2').val();
        const pnyd=$('#penyedia2').val();
        const rek=$('#norek2').val();
        const almt=$('#alamat2').val();
        const wkl=$('#wakil2').val();
        const jab=$('#jab_wakil2').val();
        $.ajax({
            type : "POST",
            url  : "<?php echo base_url('bast/editkontrak/')?>"+id,
            dataType : "JSON",
            data : {
                // id_kontrak:id,
                no_kontrak:nok,
                tgl_kontrak:tgl,
                nilai:nml,
                kdp:kdp,
                paket:pkt,
                dana:dn,
                idkeg:keg,
                idppk:ppk,
                idpphp:pphp,
                penyedia:pnyd,
                norek:rek,
                alamat:almt,
                wakil:wkl,
                jab_wakil:jab,
            },
            success: function(data){
                $('[name="ed_id"]').val("");
                $('[name="ed_no_kontrak"]').val("");
                $('[name="ed_tgl_kontrak"]').val("");
                $('[name="ed_nilai"]').val("");
                $('[name="ed_paket"]').val("");
                $('[name="ed_kdp"]').val("");
                $('[name="ed_penyedia"]').val("");
                $('[name="ed_norek"]').val("");
                $('[name="ed_alamat"]').val("");
                $('[name="ed_wakil"]').val("");
                $('[name="ed_jab_wakil"]').val("");
                $('[name="ed_idppk"]').val("");
                $('[name="ed_idpphp"]').val("");
                $('[name="ed_idkeg"]').val("");
                $('[name="ed_dana"]').val("");
                $('#modalEdit').modal('hide');
                $("#tabelKontrak").DataTable().ajax.reload();
            }
        });
        return false;
    });

});
 
</script>
</body>

</html>