<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">

<?= $this->include("Admin/layout/head_tabel") ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?= $this->include("Admin/layout/navbar") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include("Admin/layout/sidebar") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $judul; ?></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><button class="btn btn-success" data-toggle="modal"
                                        data-target="#addModal"><i class="fa fa-plus"></i>
                                        Tambah Data</button>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><?= $judul; ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Tanggal</th>
                                                <th style="text-align: center;">Nama Kapal</th>
                                                <th style="text-align: center;">Jam Tambat</th>
                                                <th style="text-align: center;">Jam Tolak</th>
                                                <th style="text-align: center;">Lama Tambat</th>
                                                <th style="text-align: center;">Biaya Sandar</th>
                                                <th style="text-align: center;">Keterangan</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($data as $item) {
                                            ?>
                                            <tr>
                                                <td><?= $item['tanggal']; ?></td>
                                                <td><?= $item['namakp']; ?></td>
                                                <td><?= $item['jam_tambat']; ?></td>
                                                <td><?= $item['jam_tolak']; ?></td>
                                                <td><?= $item['lama_tambat']; ?></td>
                                                <td><?= $item['biaya']; ?></td>
                                                <td><?= $item['keterangan']; ?></td>
                                                <td>
                                                        <center>
                                                            <a href="" title="Edit" data-toggle="modal" data-toggle="modal" data-target="#updateModal" name="btn-edit" onclick="detail_edit(<?= $item['no_id']; ?>)" class="btn btn-sm btn-edit btn-warning"><i class="fa fa-edit"></i></a>
                                                            <a href="" title="Hapus" class="btn btn-sm btn-delete btn-danger" onclick="Hapus(<?= $item['no_id']; ?>)" data-toggle="modal"
                                                                data-target="#deleteModal" data-id="<?= $item['no_id']; ?>"><i class="fa fa-trash"></i></a>
                                                        </center>
                                                    </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <!-- Start Modal Add Class-->
        <form action="<?php echo base_url('Admin/JasaSandar/add_jasasandar'); ?>" method="post" id="form_add"
            data-parsley-validate="true" autocomplete="off" enctype="multipart/form-data">
            <div class="modal fade" id="addModal" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <?= csrf_field(); ?>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jasa Sandar </h5>
                            <button type="reset" class="close" data-dismiss="modal" id="batal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Kapal</label>
                                <select class="form-control select2" id="input_kapal" name="input_kapal" onchange="cekgrt(this.value)">
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>GRT Kapal</label>
                                <input type="text" class="form-control" id="input_grt" name="input_grt" data-parsley-required="true" autocomplete="off" readonly/>
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" id="input_tanggal" name="input_tanggal" data-parsley-required="true" autocomplete="off" />
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Jam Tambat</label>
                                <input type="time" class="form-control" id="input_tambat" name="input_tambat" data-parsley-required="true" autocomplete="off" />
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Jam Tolak</label>
                                <input type="time" class="form-control" id="input_tolak" name="input_tolak" data-parsley-required="true" autocomplete="off" />
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Lama Sandar</label>
                                <input type="number" class="form-control" id="input_lama" name="input_lama" data-parsley-required="true" autocomplete="off" onkeyup="hitung(this.value)"/>
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Biaya Sandar</label>
                                <input type="number" class="form-control" id="input_biaya" name="input_biaya" data-parsley-required="true" autocomplete="off" readonly/>
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" id="input_keterangan" name="input_keterangan">
                                </textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" id="batal_add"
                                data-dismiss="modal">Batal</button>
                            <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Add Class-->

        <!-- Modal Edit Class-->
        <form action="<?php echo base_url('Admin/JasaSandar/update_jasasandar'); ?>" method="post" id="form_edit"
            data-parsley-validate="true" autocomplete="off" enctype="multipart/form-data">
            <div class="modal fade" id="updateModal" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <?= csrf_field(); ?>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Jasa Sandar </h5>
                            <button type="reset" class="close" data-dismiss="modal" id="batal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="no_id" id="no_id">

                            <div class="form-group">
                                <label>Kapal</label>
                                <select class="form-control select2" id="edit_kapal" name="edit_kapal" onchange="cekgrt_edit(this.value)">
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>GRT Kapal</label>
                                <input type="text" class="form-control" id="edit_grt" name="edit_grt" data-parsley-required="true" autocomplete="off" readonly/>
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" class="form-control" id="edit_tanggal" name="edit_tanggal" data-parsley-required="true" autocomplete="off" />
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Jam Tambat</label>
                                <input type="time" class="form-control" id="edit_tambat" name="edit_tambat" data-parsley-required="true" autocomplete="off" />
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Jam Tolak</label>
                                <input type="time" class="form-control" id="edit_tolak" name="edit_tolak" data-parsley-required="true" autocomplete="off" />
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Lama Sandar</label>
                                <input type="number" class="form-control" id="edit_lama" name="edit_lama" data-parsley-required="true" autocomplete="off" onkeyup="hitung_edit(this.value)"/>
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Biaya Sandar</label>
                                <input type="number" class="form-control" id="edit_biaya" name="edit_biaya" data-parsley-required="true" autocomplete="off" readonly/>
                                </select>   
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea class="form-control" id="edit_keterangan" name="edit_keterangan">
                                </textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" id="batal_up"
                                data-dismiss="modal">Batal</button>
                            <button type="submit" name="update" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Edit Class-->

        <!-- Start Modal Delete Class -->
        <form action="<?php echo base_url('Admin/JasaSandar/delete_jasasandar'); ?>" method="post">
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <h4>Apakah Ingin menghapus Jasa Sandar ini?</h4>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" class="id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Delete Class -->

        <!-- /.content-wrapper -->
        <?= $this->include("Admin/layout/footer") ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    
    <?= $this->include("Admin/layout/js_tabel") ?>

    <script>
        function Hapus(id){
            $('.id').val(id);
            $('#deleteModal').modal('show');
        };

        $( document ).ready(function() {
            if ('<?= $session->getFlashdata('sukses'); ?>' != '') {
                toastr.success('<?= $session->getFlashdata('sukses'); ?>')
            } else if ('<?= $session->getFlashdata('gagal'); ?>' != '') {
                toastr.error('<?= $session->getFlashdata('gagal'); ?>')
            }
        });
            
        function cekgrt(status) {
            $.getJSON('<?php echo base_url('Admin/JasaSandar/cek_grt'); ?>' + '/' + status, {},
                function(json) {
                    $('#input_grt').val(json.grt);
                });
                hitung_($('#input_lama').val());
        };
            
        function cekgrt_edit(status) {
            $.getJSON('<?php echo base_url('Admin/JasaSandar/cek_grt'); ?>' + '/' + status, {},
                function(json) {
                    $('#edit_grt').val(json.grt);
                });
            hitung_edit($('#edit_lama').val());
        };
            
        function hitung(nilai) {
            $hasil = nilai * $('#input_grt').val();
            $('#input_biaya').val($hasil);
        };
            
        function hitung_edit(nilai) {
            $hasil = nilai * $('#edit_grt').val();
            $('#edit_biaya').val($hasil);
        };

        $(function() {

            $('.select2').select2()

            $("#input_kapal").select2({
                placeholder: "Pilih Kapal",
                theme: 'bootstrap4',
                ajax: {
                    url: '<?php echo base_url('Admin/JasaSandar/data_kapal'); ?>',
                    type: "post",
                    delay: 250,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            query: params.term, // search term
                        };
                    },
                    processResults: function(response) {
                        return {
                            results: response.data
                        };
                    },
                    cache: true
                }
            });

            $("#edit_kapal").select2({
                placeholder: "Pilih Kapal",
                theme: 'bootstrap4',
                ajax: {
                    url: '<?php echo base_url('Admin/JasaSandar/data_kapal'); ?>',
                    type: "post",
                    delay: 250,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            query: params.term, // search term
                        };
                    },
                    processResults: function(response) {
                        return {
                            results: response.data
                        };
                    },
                    cache: true
                }
            });

            $('#batal').on('click', function() {
                $('#form_add')[0].reset();
                $('#form_edit')[0].reset();
                $("#input_kapal").val('');
                $("#input_tanggal").val('');
                $("#input_tambat").val('');
                $("#input_tolak").val('');
                $("#input_lama").val('');
                $("#input_keterangan").val('');
                $("#input_grt").val('');
                $("#input_biaya").val('');
            });

            $('#batal_add').on('click', function() {
                $('#form_add')[0].reset();
                $("#input_kapal").val('');
                $("#input_tanggal").val('');
                $("#input_tambat").val('');
                $("#input_tolak").val('');
                $("#input_lama").val('');
                $("#input_keterangan").val('');
                $("#input_grt").val('');
                $("#input_biaya").val('');
            });

            $('#batal_up').on('click', function() {
                $('#form_edit')[0].reset();
                $("#edit_kapal").val('');
                $("#edit_tanggal").val('');
                $("#edit_tambat").val('');
                $("#edit_tolak").val('');
                $("#edit_lama").val('');
                $("#edit_keterangan").val('');
                $("#edit_biaya").val('');
            });
        })

        function detail_edit(isi) {
            $.getJSON('<?php echo base_url('Admin/JasaSandar/data_edit'); ?>' + '/' + isi, {},
                function(json) {
                    $('#no_id').val(json.no_id);
                    $('#edit_tanggal').val(json.tanggal);
                    $('#edit_tambat').val(json.jam_tambat);
                    $('#edit_tolak').val(json.jam_tolak);
                    $('#edit_lama').val(json.lama_tambat);
                    $('#edit_biaya').val(json.biaya);
                    $('#edit_keterangan').val(json.keterangan);
                    $('#edit_grt').val(json.grt);

                    $('#edit_kapal').append('<option selected value="' + json.id + '">' + json.namakp +
                        '</option>');
                    $('#edit_kapal').select2('data', {
                        id: json.id,
                        text: json.namakp
                    });
                    $('#edit_kapal').trigger('change');
                });
        }
        
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>
