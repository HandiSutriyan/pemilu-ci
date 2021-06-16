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
            <div class="card">
                <div class="card-body">
                <h4>Tambah Daftar Pemilih Tetap</h4>
                    <?= csrf_field() ?>
                    <form class="form-horizontal">
                        <div class="form-group row">
                                    <label class="col-sm-3 text-left control-label col-form-label">File Upload(.xls)</label>
                                    <div class="col-md-12">
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
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                                <h5 class="card-title">Daftar Pemilih Tetap</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Token</th>
                                                <th>PTK</th>
                                                <th>Angkatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>
                                                    <a href='#'>
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>
                                                    <a href='#'>
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                                <td>
                                                    <a href='#'>
                                                        <button type="button" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Token</th>
                                                <th>PTK</th>
                                                <th>Angkatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <a href="/admin/candidate"><button type="button" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i> Bersihkan Semua Data</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>