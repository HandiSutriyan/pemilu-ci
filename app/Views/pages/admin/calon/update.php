<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <form class="form-horizontal" method="post" action="update/<?= $data_calon['calon_id'] ?>" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <h4 class="card-title">Ubah Data Calon</h4>
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
                                        <option value="<?= $de['event_id'] ?>" <?= $de['event_id']==$data_calon['event_id']?"selected='selected'":"" ?> ><?= $de['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name = "name" class="form-control" id="fname" placeholder="Nama acara pemilihan" value="<?= $data_calon['name'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Asal PTK</label>
                            <div class="col-sm-9">
                                <input type="text" name = "ptk" class="form-control" id="fname" placeholder="Nama acara pemilihan" value="<?= $data_calon['ptk'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Angkatan</label>
                            <div class="col-sm-9">
                                <input type="text" name = "angkatan" class="form-control" id="fname" placeholder="Nama acara pemilihan" value="<?= $data_calon['angkatan'] ?>">
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
                                    name="picture"
                                    />
                                    <label
                                    class="custom-file-label"
                                    for="validatedCustomFile"
                                    >Choose file...</label
                                    >
                                    <div class="invalid-feedback">
                                    Example invalid custom file feedback
                                    </div>
                                </div>
                                <?php if($validation->hasError('picture')): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $validation->getError('picture'); ?>
                                    </div>
							<?php endif; ?>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <input type="hidden" name="fotoLama" value="<?= $data_calon['picture'] ?>">
                                <input type="submit" class="btn btn-primary" value="Ubah">
                                <a href="/admin/candidate"><button type="button" class="btn btn-outline-primary">Kembali</button></a>

                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>