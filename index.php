<?php
include('koneksi.php');
include('proses.php');
$ali= mysqli_query($conn,"SELECT * FROM todolist");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <h1 class="m-3">To do List</h1>

    <div class="d-flex">
        <?php
        foreach($data as $lili):
        ?>
        <!-- kotak -->
        <div class="card m-3 kotakk" style="width: 18rem; height: 13rem;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $lili['id']; ?>">
            <div class="card-body">
                <h4 class="card-title"><?php echo $lili['judul']; ?></h4>
                <p class="card-text"><?php echo $lili['isi']; ?></p>
            </div>

            <div class="card-body d-flex justify-content-between">
                <!-- <p class="card-link">Tanggal</p> -->

                <div class="">
                    <input type="checkbox" style="transform:scale(1.5) ;" class="m-2">
                    <!-- <a href="#"><img src="ctg.png" width="20"> </a> -->
                    <a href="#"><img src="hapus.png" width="20"> </a>
                </div>


                <!-- <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
        <?php endforeach; ?>
        <!-- kotak -->

        <!-- Kotak 2 -->
        <div class="card m-3" style="width: 18rem ; height: 13rem;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#baru">
            <div class="card-body">
                <h4 class="card-title">Tambah Task</h4>
                <div class="text-center mt-5">
                    <a href="#"><img src="add.png" width="60" > </a>
                </div>
            </div>
            <!-- Kotak 2 -->
        </div>

<!-- Modal tambah-->
<div class="modal fade" id="baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah LIST</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST">
      <div class="modal-body">
        <input type="text" class="form-control" placeholder="Masukan Judul" name="judul"><br>
        <input type="text" class="form-control" placeholder="Masukan Isi" name="isi">
      </div>
      <div class="modal-footer">
        <button name="tambah" class="btn btn-primary">Tambah</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal edit-->
<?php
        foreach($data as $lili):
        ?>
<div class="modal fade" id="edit<?php echo $lili['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit LIST</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="POST">
      <?php $data= mysqli_fetch_assoc($ali) ?>
      <div class="modal-body">
        <input type="hidden" class="form-control" value="<?php echo $data['id'] ?>" name="id"> 
        <input type="text" class="form-control" value="<?php echo $data['judul'] ?>" name="judul"><br>
        <input type="text" class="form-control" value="<?php echo $data['isi'] ?>" name="isi">
      </div>
      <div class="modal-footer">
        <button name="edit" class="btn btn-primary">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="color.js"></script>
</body>

</html>