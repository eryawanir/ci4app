<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">


                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Spesialis</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dokter as $k) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?= $k['nip']; ?></td>
                                        <td><?= $k['nama']; ?></td>
                                        <td><?= $k['spesialis']; ?></td>
                                        <td><?= $k['alamat']; ?></td>
                                        <td><?= $k['no_hp']; ?></td>
                                        <td></td>

                                    </tr>
                                <?php endforeach; ?>

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
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection(); ?>