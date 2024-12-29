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
                                                <th style="text-align: center;">No</th>
                                                <th style="text-align: center;">Nama</th>
                                                <th style="text-align: center;">Username</th>
                                                <th style="text-align: center;">Status</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                foreach ($user as $item) {
                                                ?>
                                                <tr>
                                                    <td width="1%"><?= $no++; ?></td>
                                                    <td><?= $item['nama']; ?></td>
                                                    <td><?= $item['username']; ?></td>
                                                    <td><?= $item['status']; ?></td>
                                                    <td>
                                                        <center>
                                                            <a href="" title="Edit" data-toggle="modal" data-toggle="modal" data-target="#updateModal" name="btn-edit" onclick="detail_edit(<?= $item['id']; ?>)" class="btn btn-sm btn-edit btn-warning"><i class="fa fa-edit"></i></a>
                                                            <a href="" title="Hapus" class="btn btn-sm btn-delete btn-danger" onclick="Hapus(<?= $item['id']; ?>)" data-toggle="modal"
                                                                data-target="#deleteModal" data-id="<?= $item['id']; ?>"><i class="fa fa-trash"></i></a>
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
        <form action="<?= base_url('Admin/User/add_user'); ?>" method="post" id="form_add"
            data-parsley-validate="true" autocomplete="off" enctype="multipart/form-data">
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <?= csrf_field(); ?>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data User </h5>
                            <button type="reset" class="close" data-dismiss="modal" id="batal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Nama Karyawan</label>
                                <input type="text" class="form-control" id="input_nama" name="input_nama"
                                    data-parsley-required="true" placeholder="Masukkan Nama Karyawan" autofocus="on">
                            </div>

                            <div class="form-group">
                                <label>Username Karyawan</label>
                                <input type="email" class="form-control" id="input_username" name="input_username"
                                    data-parsley-required="true" placeholder="Masukkan Username Karyawan" autofocus="on">
                                <span class="text-danger" id="error_username"></span>
                            </div>

                            <div class="form-group">
                                <label>Password Karyawan</label>
                                <input type="Password" class="form-control" id="input_password" name="input_password"
                                    data-parsley-required="true" placeholder="Masukkan Password Kar" autofocus="on" data-parsley-equalto="#input_password_konfirmasi">
                            </div>

                            <div class="form-group">
                                <label>Ulangi Password</label>
                                <input type="Password" class="form-control" id="input_password_konfirmasi" name="input_password_konfirmasi"
                                    data-parsley-required="true" placeholder="Masukkan Ulangi Password" autofocus="on" data-parsley-equalto="#input_password">
                            </div>

                            <div class="form-group">
                                <label>Status Karyawan</label>
                                <select class="form-control" id="input_status" name="input_status">
                                    <option value="1">Admin</option>
                                    <option value="0">Karyawan</option>
                                </select>
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
        <form action="<?php echo base_url('Admin/User/update_user'); ?>" method="post" id="form_edit"
            data-parsley-validate="true" autocomplete="off" enctype="multipart/form-data">
            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <?= csrf_field(); ?>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data User</h5>
                                <button type="reset" class="close" data-dismiss="modal" id="batal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" id="id">
                            <input type="hidden" name="username_lama" id="username_lama">

                            <div class="form-group">
                                <label>Nama Karyawan</label>
                                <input type="text" class="form-control" id="edit_nama" name="edit_nama"
                                    data-parsley-required="true" placeholder="Masukkan Nama Karyawan" autofocus="on">
                            </div>

                            <div class="form-group">
                                <label>Username Karyawan</label>
                                <input type="email" class="form-control" id="edit_username" name="edit_username"
                                    data-parsley-required="true" placeholder="Masukkan Username Karyawan" autofocus="on">
                                <span class="text-danger" id="error_edit_username"></span>
                            </div>
                            <div class="form-group">
                                <label>Password Karyawan</label>
                                <input type="Password" class="form-control" id="edit_password" name="edit_password"
                                    placeholder="Masukkan Password Pasien" autofocus="on" data-parsley-equalto="#edit_password_konfirmasi">
                            </div>
                            <div class="form-group">
                                <label>Ulangi Password</label>
                                <input type="Password" class="form-control" id="edit_password_konfirmasi" name="edit_password_konfirmasi"
                                    placeholder="Masukkan Ulangi Password" autofocus="on" data-parsley-equalto="#edit_password">
                            </div>

                            <div class="form-group">
                                <label>Status Karyawan</label>
                                <select class="form-control" id="edit_status" name="edit_status">
                                    <option value="1">Admin</option>
                                    <option value="0">Karyawan</option>
                                </select>
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
        <form action="<?php echo base_url('Admin/User/delete_user'); ?>" method="post">
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

                            <h4>Apakah Ingin menghapus karyawan ini?</h4>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" class="id">
                            <input type="hidden" name="id_user" class="id_user">
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

        (function($) {
          $.fn.inputFilter = function(callback, errMsg) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop focusout", function(e) {
              if (callback(this.value)) {
                // Accepted value
                if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
                  $(this).removeClass("input-error");
                  this.setCustomValidity("");
                }
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
              } else if (this.hasOwnProperty("oldValue")) {
                // Rejected value - restore the previous one
                $(this).addClass("input-error");
                this.setCustomValidity(errMsg);
                this.reportValidity();
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
              } else {
                // Rejected value - nothing to restore
                this.value = "";
              }
            });
          };
        }(jQuery));
        
        function detail_edit(isi) {
            $.getJSON('<?= base_url('Admin/User/data_edit'); ?>' + '/' + isi, {},
                function(json) {
                    $('#edit_nama').val(json.nama);
                    $('#id').val(json.id_user);

                    if(json.status == 1){
                        document.getElementById("edit_status").selectedIndex = 0;
                    }else{
                        document.getElementById("edit_status").selectedIndex = 1;
                    }

                    $('#edit_username').val(json.username);
                    
                });
        }
    </script>

    
    <script type="text/javascript">
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

            $("#input_username").keyup(function(){

                var username = $(this).val().trim();
          
                if(username != ''){
                    $.ajax({
                        type: 'GET',
                        dataType: 'json',
                        url: '<?php echo base_url('Admin/User/cek_username'); ?>' + '/' + username,
                        success: function (data) {
                            if(data['results']>0){
                                $("#error_username").html('Username telah dipakai,coba yang lain');
                                $("#input_username").val('');
                            }else{
                                $("#error_username").html('');
                            }
                        }, error: function () {
            
                            alert('error');
                        }
                    });
                }
          
              });

            $("#edit_username").keyup(function(){

                var username = $(this).val().trim();
          
                if(username != '' && $('#username_lama').val()){
                    $.ajax({
                        type: 'GET',
                        dataType: 'json',
                        url: '<?php echo base_url('Admin/User/cek_username'); ?>' + '/' + username,
                        success: function (data) {
                            if(data['results']>0){
                                $("#error_username").html('Username telah dipakai,coba yang lain');
                                $("#edit_username").val('');
                            }else{
                                $("#error_username").html('');
                            }
                        }, error: function () {
            
                            alert('error');
                        }
                    });
                }
          
              });

            $('#batal').on('click', function() {
                $('#form_add')[0].reset();
                $('#form_edit')[0].reset();
                $("#input_nik").val('');
                $("#input_tanggal").val('');
                $("#input_status").val('');
                $("#input_nama").val('');
                $("#input_username").val('');
                $("#input_password").val('');
                $("#input_password_konfirmasi").val('');
                $("#input_no_telp").val('');
                $("#input_status").prop('checked',false);
                $("#input_foto").val('');
            });

            $('#batal_add').on('click', function() {
                $('#form_add')[0].reset();
                $("#input_nik").val('');
                $("#input_tanggal").val('');
                $("#input_status").val('');
                $("#input_nama").val('');
                $("#input_username").val('');
                $("#input_password").val('');
                $("#input_password_konfirmasi").val('');
                $("#input_no_telp").val('');
                $("#input_status").prop('checked',false);
                $("#input_foto").val('');
            });

            $('#batal_up').on('click', function() {
                $('#form_edit')[0].reset();
                $("#edit_nik").val('');
                $("#edit_tanggal").val('');
                $("#edit_status").val('');
                $("#edit_nama").val('');
                $("#edit_username").val('');
                $("#edit_password").val('');
                $("#edit_password_konfirmasi").val('');
                $("#edit_no_telp").val('');
                $("#edit_status").prop('checked',false);
                $("#edit_foto").val('');
            });

        });
    </script>
</body>

</html>
