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
$(document).ready(function() {
    $(function () { 
        // PIE CHART
        var pie_data = [
            {label: "calon 1", data:10},
            {label: "calon 2", data: 20},
            {label: "calon 3", data: 30},
            {label: "belum memilih", data: 12},
        ];
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
        let data = [[0, 11],[1, 15],[2, 25], [3, 25]];
        let dataset = [{ label: "Perolehan Suara", data: data}];
        let ticks = [[0, "Calon 1"], [1, "Calon 2"], [2, "Calon 3"], [3, "Belum Memilih"]];
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
    });
});
</script>
<?= $this->endSection() ?>
