<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <?= csrf_field() ?>
                <form class="form-horizontal">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Calon</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Acara</label>
                            <div class="col-sm-9">
                                <select
                                    class="select2 form-control custom-select"
                                    style="width: 100%; height: 36px"
                                >
                                    <option selected disabled value="">Pilih Acara</option>
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="Nama acara pemilihan" value="Nama acara pemilihan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Asal PTK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="Nama acara pemilihan" value="Nama acara pemilihan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Angkatan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="fname" placeholder="Nama acara pemilihan" value="Nama acara pemilihan">
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
                                    required
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
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="/admin/candidate"><button type="button" class="btn btn-outline-primary">Kembali</button></a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>