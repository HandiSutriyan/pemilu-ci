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
            <?php foreach($data_event as $de): ?>
                <option value="<?= $de['event_id'] ?>"><?= $de['name'] ?></option>
            <?php endforeach ?>
        </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4>Daftar Calon</h4>
        </div>
    </div>
    <div class="row el-element-overlay">
    <?php foreach($data_calon as $dc) :?>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src=<?= base_url('assets/images/users/'.$dc['picture'])?> alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline el-link" href="candidate/update" ><i class="fas fa-cogs"></i>Ubah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0"><?= $dc['name'] ?></h4> <span class="text-muted"><?= $dc['ptk'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
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

<?= $this->section('script') ?>
<script>
    function loadCalonData(id){
        $.ajax({
            url:"{{`http://pemilu-fmkk.test/api/candidate/`}}",
            type:'get',
            dataType:'json',
            success:function(data){
                let dataResponse = data;
                console.log(dataResponse);
            },
            error: function (xhr,ajaxOptions, thrownError){
                console.log(thrownError);
                //console.log(dataResponse);
            }

        })
    }

    $(document).ready(function(){
        loadCalonData(1);
    });
</script>
<?= $this->endSection() ?>