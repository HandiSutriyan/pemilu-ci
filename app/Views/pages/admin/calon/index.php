<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-7">
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
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4>Daftar Calon</h4>
        </div>
    </div>
    <div class="row el-element-overlay">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src=<?= base_url("assets/images/big/img1.jpg")?> alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline el-link" href="candidate/update" ><i class="fas fa-cogs"></i>Ubah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Pusaka Aksara</h4> <span class="text-muted">Politeknik Pembanunan</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src=<?= base_url("assets/images/big/img1.jpg")?> alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline el-link" href="candidate/update" ><i class="fas fa-cogs"></i>Ubah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Pusaka Aksara</h4> <span class="text-muted">Politeknik Pembanunan</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src=<?= base_url("assets/images/big/img1.jpg")?> alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline el-link" href="candidate/update" ><i class="fas fa-cogs"></i>Ubah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">Pusaka Aksara</h4> <span class="text-muted">Politeknik Pembanunan</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body text-center my-5">
                    <a href="candidate/create"><button class="btn btn-info btn-lg"><i class="fas fa-file-medical"></i></button></a>
                    <h4 class="m-b-0">Tambah Calon</h4> 
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
