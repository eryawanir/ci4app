<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <!-- <div class="col-sm-8">
                    <h5 class="m-0 text-dark title-primary"><i class="fas fa-ambulance nav-icon"></i> &nbsp;Pendaftaran Rawat Jalan</h5>
                </div> -->
                <div class="col-sm-4 d-flex justify-content-end align-items-center position-relative mt-3 mt-sm-0">
                    <div class="form-group mb-0" style="width: 100%;">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text icon-search" style="background-color: gray; color:#fff;">
                                    <i class="fas fa-search"></i>
                                </span>
                            </div>
                            <input id="cari_mr" name="cari_mr" type="text" class="form-control float-right" placeholder="Cari Pasien">
                        </div>
                    </div>

                    <div id="select-nomor-rm" class="select-nomor-rm"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <form id="form_rawat_jalan" action="" method="POST">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <i class="fas fa-user-injured"></i> &nbsp; Data Pasien
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-3">
                                        <label for="">Nama</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9">
                                        <input class="form-control" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' autocomplete="off" id="nama" name="nama" required minlength="2" type="text" placeholder="Nama lengkap pasien">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-3">
                                        <label for="">Tanggal / Lahir</label>
                                    </div>
                                    <div class="input-group col-sm-12 col-md-9">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input required id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control float-right" id="reservation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-3">
                                        <label class="">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9">
                                        <select required id="jenis_kelamin" name="jenis_kelamin" class="select-gender form-control form-control-sm ">
                                            <option value="L">Laki - Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-3">
                                        <label for="">Alamat</label>
                                    </div>
                                    <div class="col-sm-12 col-md-9">
                                        <input class="form-control" onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))' autocomplete="off" id="nama" name="nama" required minlength="2" type="text" placeholder="Alamat Pasien">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-secondary">
                            <div class="card-header">
                                Penanggung Jawab
                            </div>
                            <div class="card-body">

                                <div class="form-group row">
                                    <div class="col-6">
                                        <label for="">Nama</label>
                                        <input autocomplete="off" id="nik_pj" name="nik_pj" type="number" class="form-control" placeholder="Nama penanggung jawab">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Kontak</label>
                                        <input autocomplete="off" id="nama_pj" name="nama_pj" type="text" class="form-control" placeholder="Nomor telepon / Alamat penanggung jawab">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">


                        <div class="card card-success">
                            <div class="card-header">
                                <i class="fas fa-book-medical"></i> &nbsp; No Rekam Medis : 00-001
                            </div>
                            <div class="card-body">


                                <div class="form-group row">
                                    <small for="" class="col-5">Diagnosa</small>
                                    <input type="text" id="no_asuransi" name="no_asuransi" class="form-control form-control-sm col-7" value="">
                                </div>

                                <div class="form-group row">
                                    <small for="" class="col-5">Status </small>
                                    <select required id="tipe_pasien" name="tipe_pasien" class="select-tipe-pasien form-control form-control-sm col-7">

                                    </select>
                                </div>

                                <div class="form-group row">
                                    <small for="" class="col-5">No Bed </small>
                                    <select required id="tipe_pasien" name="tipe_pasien" class="select-tipe-pasien form-control form-control-sm col-7">

                                    </select>
                                </div>


                                <div class="form-group row mt-4 d-flex justify-content-center mb-0">
                                    <button type="button" class="btn btn-default btn-reset-form"> <i class="fas fa-sync-alt"></i> &nbsp; Reset</button>
                                    <button type="submit" class="btn btn-warning ml-1"> <i class="fas fa-save"></i> &nbsp; Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>