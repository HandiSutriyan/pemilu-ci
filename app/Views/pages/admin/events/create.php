<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <form class="form-horizontal"method="POST" action="save">
                <?= csrf_field() ?>
                    <div class="card-body">
                        <h4 class="card-title">Data Acara</h4>
                        <?php if(session()->getFlashdata('msg')):?>
                            <div class="alert alert-info"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif;?>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama Acara</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="fname" placeholder="Nama acara pemilihan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Message</label>
                            <div class="col-sm-9">
                                <textarea class="form-control"  name="desc">Deskripsi Acara</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Waktu Mulai</label>
                            <div class="col-sm-9">
                                <input type="text"  name="start" class="form-control date-selector" placeholder="mm/dd/yyyy" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Waktu Selsai</label>
                            <div class="col-sm-9">
                                <input type="text"  name="stop" class="form-control date-selector" placeholder="mm/dd/yyyy" required>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <a href="/admin/events"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>