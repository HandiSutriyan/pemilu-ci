<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-body">
                <h4>Tambah Daftar Pemilih Tetap </h4>
                    <form class="form-horizontal" method="post" action="pemilih/create" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                        <div class="form-group row">
                            <label class="col-sm-2 text-left control-label col-form-label">Acara</label>
                            <div class="col-md-10">
                                <select
                                    class="select2 form-control custom-select"
                                    style="width: 100%; height: 36px"
                                    name="event_id"
                                >
                                    <option selected disabled value="">Pilih Acara</option>
                                    <?php foreach($data_event as $de): ?>
                                        <option value="<?= $de['event_id'] ?>"><?= $de['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                                    <label class="col-sm-2 text-left control-label col-form-label">File Upload(.xls)</label>
                                    <div class="col-md-10">
                                        <div class="custom-file">
                                            <input
                                            type="file"
                                            class="custom-file-input"
                                            id="validatedCustomFile"
                                            name="filedpt"
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
                                <select
                                    class="select2 form-control custom-select"
                                    style="width: 100%; height: 36px"
                                >
                                    <option selected disabled value="">Pilih Acara</option>
                                    <?php foreach($data_event as $de): ?>
                                        <option value="<?= $de['event_id'] ?>" onclick="loadCalonData(<?= $de['event_id'] ?>);"><?= $de['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="table-responsive mt-3">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Token</th>
                                                <th>PTK</th>
                                                <th>Angkatan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="data-table">
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Token</th>
                                                <th>PTK</th>
                                                <th>Angkatan</th>
                                                <th>Status</th>
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

<?= $this->section('script') ?>
<script>
    function setData(item){
        let html=`
        <tr>
            <td>${item.name}</td>
            <td>${item.username}</td>
            <td>${item.user_password}</td>
            <td>${item.ptk}</td>
            <td>${item.angkatan}</td>
            <td>${item.vote_status}</td>
            <td>
                <a href='#'><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button></a>
            </td>
        </tr>
        `;
        $("#data-table").prepend(html);
    }
    function clearTable(){
        let template = `
        <tr>
            <td colspan="7" class="text-center">Belum ada data</td>
        </tr>
        `;
        $("#data-table").html(template);
    }
    function loadCalonData(id){
        $.ajax({
            url:"http://pemilu-fmkk.test/api/dpt/"+id,
            type:'get',
            dataType:'json',
            success:function(data){
                let dataResponse = data;
                clearTable();
                dataResponse.forEach(setData)
                //console.log(dataResponse);
            },
            error: function (xhr,ajaxOptions, thrownError){
                console.log(thrownError);
                clearTable();
                //console.log(dataResponse);
            }

        });
    }
    $(document).ready(function(){
        clearTable();
    });
</script>
<?= $this->endSection() ?>