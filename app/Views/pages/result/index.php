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
                <option value="<?= $de['event_id'] ?>" onclick="loadDataHasil(<?= $de['event_id'] ?>);"><?= $de['name'] ?></option>
            <?php endforeach ?>
        </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-4">
            <h4>Perolehan Suara</h4>
        </div>
    </div>

                <!-- Charts -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pie Chart</h5>
                                <div class="pie" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="click">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Bar Chart</h5>
                                <div class="bars" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Charts -->
</div>

<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src=<?=base_url("assets/libs/flot/jquery.flot.barlabels.js")?>></script>
<script>
    function emptyData(){
        $('.bars').html(`
            <div class="alert alert-info">Data Belum Tersedia</div>
        `);
        $('.pie').html(`
            <div class="alert alert-info">Data Belum Tersedia</div>
        `);
    }

    function loadDataHasil(id){
        $.ajax({
            url:"http://pemilu21.fmkk.web.id/admin/api/kotaksuara/"+id,
            type:'get',
            dataType:'json',
            success:function(data){
                let responsData = data;
                console.log(responsData);

               //INISIALISASI DATA
               let pie_data=[];
               let ticks = [];
               let bar_data = [];
               responsData.data.forEach(function(item, i){
                    let insert ={label: item.name, data: item.total};
                    let insert_bar = [i, item.total];
                    let insert_ticks = [i, item.name];

                    //APPEND DATA
                    pie_data.push(insert);
                    bar_data.push(insert_bar);
                    ticks.push(insert_ticks);
               });
               pie_data.push({label: 'Belum Memilih', data: responsData.golput});
               bar_data.push([bar_data.length, responsData.golput]);
               ticks.push([bar_data.length-1, 'Belum Memilih']);
               // PIE CHART
                var pie_options = {
                        series: {
                            pie: {show: true}
                                },
                        legend: {
                            show: false
                        },
                        grid: {
                            hoverable: true, //IMPORTANT! this is needed for tooltip to work
                        },
                };
                $.plot($(".pie"), pie_data, pie_options);  

                //BAR CHART
                let dataset = [{ label: "Perolehan Suara", data: bar_data}];
                var bar_options = {
                        series: {
                            bars: {show: true},
                            labels: {
                                show: true,
                                position: "outside",
                                padding: 1,
                                angle: 0
                            }
                        },
                        bars: {
                            align: "center",
                            barWidth: 0.5,
                        },
                        xaxis: {
                            axisLabel: "World Cities",
                            axisLabelUseCanvas: true,
                            axisLabelFontSizePixels: 12,
                            axisLabelFontFamily: 'Verdana, Arial',
                            axisLabelPadding: 10,
                            ticks: ticks
                        },
                        yaxis: {
                            axisLabel: "Average Temperature",
                            axisLabelUseCanvas: true,
                            axisLabelFontSizePixels: 12,
                            axisLabelFontFamily: 'Verdana, Arial',
                            axisLabelPadding: 3,
                            tickFormatter: function (v, axis) {
                                return v;
                            }
                        },   
                        legend: {
                            show: true
                        },
                        grid: {
                            hoverable: true, //IMPORTANT! this is needed for tooltip to work
                        },
                };
                $.plot($(".bars"), dataset, bar_options); 
            },
            error: function (xhr,ajaxOptions, thrownError){
                console.log(thrownError);
                dataResponse = null;
                emptyData();
            }

        });
    }
    
$(document).ready(function() {
    emptyData();
});
</script>
<?= $this->endSection() ?>
