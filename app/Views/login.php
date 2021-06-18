<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title><?= SITE_NAME ?>-Masuk</title>
      <link rel="icon" type="image/ico" sizes="16x16" href=<?= base_url("assets/images/favicon.ico") ?>>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body style="background-color: #141432">
       <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .empty-2-3{
            padding: 4rem 2rem 4rem;
        }
        .empty-2-3 .main-img{
            object-fit: cover;
            object-position: center;
            margin-bottom: 3rem;
            width: 75%;
        }
        .empty-2-3 .title-text{
            font: 600 1.875rem/2.25rem Poppins, sans-serif;            
            margin-bottom: 1.25rem;
        }
        .empty-2-3 .title-caption{
            color: #707092;
            margin-bottom: 4rem;
            letter-spacing: 0.025em;
            line-height: 1.75rem;
        }
        .empty-2-3 .btn-back{
            background-color: #524EEE;
            font: 600 1.125rem/1.75rem Poppins, sans-serif;                        
            padding: 1rem 1.5rem 1rem 1.5rem;
            border-radius: 0.75rem;
        }
        .empty-2-3 .btn-back:hover{
            --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }
        @media(min-width: 425px){
          .empty-2-3 .title-text{
            font-size: 40px;
          }
        }
        @media (min-width: 576px) {
            .empty-2-3{ 
                padding-top: 5rem;
            }
            .empty-2-3 .main-img{
                margin-bottom: 4rem;
                width: auto;
            }
        }        
    </style>

    <div class="empty-2-3 container mx-auto d-flex align-items-center justify-content-center flex-column" style="font-family: 'Poppins', sans-serif;">    
        <div class="text-center w-30">
            <img class="img-fluid mb-3 mx-1" src="<?= base_url('assets/images/logo FMKI.png') ?>" alt="frobidden" width="50">
            <img class="img-fluid mb-3 mx-1" src="<?= base_url('assets/images/logo FMKK.png') ?>" alt="frobidden" width="50"> <br>
            <h3 class="title-text text-white">Pemilihan Umum</h3>
            <h4 class="caption-text text-white">Ketua BPH FMKK 2021/2022</h4>
        </div>        
        <div class="text-center w-30 border border-light px-3 py-3 rounded-3">
            <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif;?>
            <form action="/login/auth" method="post">
            <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="InputForEmail" class="form-label text-white">Email address</label>
                    <input type="text" name="user_name" class="form-control" id="InputForEmail">
                </div>
                <div class="mb-3">
                    <label for="InputForPassword" class="form-label text-white">Password</label>
                    <input type="password" name="user_password" class="form-control" id="InputForPassword">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="/" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
  </section> 
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>