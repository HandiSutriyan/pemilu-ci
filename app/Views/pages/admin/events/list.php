<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Tabel Acara</h5> <br>
                    <a href="events/create"><button class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i> Tambah Acara</button></a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Mulai</th>
                        <th scope="col">Selesai</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=1;
                        foreach($data_event as $d):
                    ?>
                        <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $d["name"] ?></td>
                        <td><?= $d["desc"] ?></td>
                        <td><?= $d["event_start"] ?></td>
                        <td><?= $d["event_stop"] ?></td>
                        <td>
                            <a href='/admin/events/update'>
                                <button type="button" class="btn btn-info btn-sm">
                                <i class="fas fa-cogs"></i>
                                </button>
                            </a>
                            <a href='#'>
                                <button type="button" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    <?php
                        $i++;
                        endforeach
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>