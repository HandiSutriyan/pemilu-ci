<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <?= csrf_field() ?>
                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Data Acara</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Acara</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="Nama acara pemilihan" value="Nama acara pemilihan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                            <div class="col-sm-9">
                                <textarea class="form-control">Nama acara pemilihan</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Waktu Mulai</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control date-selector" placeholder="mm/dd/yyyy" value="2021-06-13 18:08:41">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Waktu Selsai</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control date-selector" placeholder="mm/dd/yyyy" value="2021-06-14 18:08:41">
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Ubah</button>
                                <a href="/admin/events"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>