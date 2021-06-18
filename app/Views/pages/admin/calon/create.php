<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <form class="form-horizontal" action="save" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                    <div class="card-body">
                        <h4 class="card-title">Tambah Calon</h4>
                        <?php if(session()->getFlashdata('msg')):?>
                            <div class="alert alert-info"><?= session()->getFlashdata('msg') ?></div>
                        <?php endif;?>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Acara</label>
                            <div class="col-sm-9">
                                <select
                                    class="select2 form-control custom-select"
                                    style="width: 100%; height: 36px"
                                    name = "event_id"
                                    required
                                >
                                    <option selected disabled value="">Pilih Acara</option>
                                    <?php foreach($data_event as $de): ?>
                                        <option value="<?= $de['event_id'] ?>"><?= $de['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name = "name" id="fname" placeholder="Nama acara pemilihan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Asal PTK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name = "ptk" id="fname" placeholder="Asal PTK">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Angkatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name = "angkatan" id="fname" placeholder="Angkatan (contoh: 2020)">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input
                                    type="file"
                                    class="custom-file-input"
                                    id="validatedCustomFile"
                                    name = "picture"
                                    />
                                    <label
                                    class="custom-file-label"
                                    for="validatedCustomFile"
                                    >Pilih file...</label
                                    >
                                    <div class="invalid-feedback">
                                    Example invalid custom file feedback
                                    </div>
                                </div>
                            </div>
                            <?php if($validation->hasError('picture')): ?>
								<div class="alert alert-danger" role="alert">
									  <?= $validation->getError('picture'); ?>
								</div>
							<?php endif; ?>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <a href="/admin/candidate"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>