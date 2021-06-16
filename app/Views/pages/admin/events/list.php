<?= $this->extend('layout/admin-template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-info"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>
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
                            <!-- SPOOFING -->
							<form method="post" class="d-inline" action="events/delete/<?= $d['event_id'] ?>" >
								<?= csrf_field() ?>
                                <a href='events/<?= $d['event_id'] ?>'>
                                    <button type="button" class="btn btn-info btn-sm">
                                    <i class="fas fa-cogs"></i>
                                    </button>
                                </a>
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus <?= $d['name'] ?> ?');"> <i class="fas fa-trash-alt"></i> </button> 
							</form>
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