<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Elements by BuildWith Angga</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link href=<?= base_url("dist/css/vote.css")?> rel="stylesheet">
    </head>
    <body>
    <section style="box-sizing: border-box;">
        <div class="container empty-3-3" style="font-family: 'Poppins', sans-serif;">
            <div class="row mb-3">
                <div class="col-md-12 text-center">
                    <img class="img-fluid mx-2" src="<?= base_url('assets/images/logo FMKI.png') ?>" alt="foto-calon" style="width:50px"> 
                    <img class="img-fluid mx-2" src="<?= base_url('assets/images/logo FMKK.png') ?>" alt="foto-calon" style="width:50px"> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="title-text">Calon Ketua BPH FMKK 2021/2022</p>
                    <p class="caption-text">Tentukan pilihan terbaikmu untuk menuju FMK Kebumen Maju !!!</p>
                </div>
            </div>
            <div class="row d-flex flex-row justify-content-center">
            <?php foreach($data_calon as $de):?>    
                <div class="col-md-4 mb-2 ">
                    <div class="card">
                        <img class="main-img" src="<?= base_url('/uploads/img/'.$de['picture']) ?>" alt="foto-calon"> 
                        <div class="card-body text-center">
                            <p class="title-text"><?= $de['name'] ?></p>
                            <span class="caption-text"><b><?= $de['ptk'] ?></b></span> <br>
                            <span class="caption-text"><?= $de['angkatan'] ?></span>
                            <div class="d-flex justify-content-center">
                                <!-- SPOOFING -->
							    <form method="post" class="d-inline" action="/vote/proses" >
                                <?= csrf_field() ?>
                                    <input type="hidden" name="pemilih_id" value="<?= $session->user_id ?>">
                                    <input type="hidden" name="event_id" value="<?= $de['event_id'] ?>">
                                    <input type="hidden" name="calon_id" value="<?= $de['calon_id'] ?>">
                                    <input type="hidden" name="_method" value="POST">
                                    <button class="btn btn-set d-inline-flex text-white" type="submit" onclick="return confirm('Apakah Anda yakin akan memilih <?= $de['name'] ?> ?');">Pilih</button>
							    </form>
                            </div>
                        </div>
                    </div> 
                </div>
            <?php endforeach ?>
            </div>
        </div>
    </section> 
    
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</html>