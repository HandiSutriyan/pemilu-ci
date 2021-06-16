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
                <option value="<?= $de['event_id'] ?>" onclick="loadCalonData(<?= $de['event_id'] ?>);"><?= $de['name'] ?></option>
            <?php endforeach ?>
        </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4>Daftar Calon</h4>
        </div>
    </div>
    <div class="row el-element-overlay" id="card-calon">
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
    const base_url = 'http://pemilu-fmkk.test/';
    function setCard(item){
        let card =`
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img src="${base_url+'assets/images/users/'+item.picture}" alt="user" />
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item"><a class="btn default btn-outline el-link" href="candidate/update" ><i class="fas fa-cogs"></i>Ubah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">${item.name}</h4> <span class="text-muted">${item.ptk}</span>
                    </div>
                </div>
            </div>
        </div>
        `;
        $("#card-calon").prepend(card);
    }
    function clearCard(){
        let template = `
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body text-center my-5">
                    <a href="candidate/create"><button class="btn btn-info btn-lg"><i class="fas fa-file-medical"></i></button></a>
                    <h4 class="m-b-0">Tambah Calon</h4> 
                </div>
            </div>
        </div>
        `;
        $("#card-calon").html(template);
    }
    function loadCalonData(id){
        $.ajax({
            url:"http://pemilu-fmkk.test/api/candidate/"+id,
            type:'get',
            dataType:'json',
            success:function(data){
                let dataResponse = data;
                dataResponse.forEach(setCard)
                console.log(dataResponse);
            },
            error: function (xhr,ajaxOptions, thrownError){
                console.log(thrownError);
                clearCard();
                //console.log(dataResponse);
            }

        });
    }
    $(document).ready(function(){
    });
</script>
<?= $this->endSection() ?>