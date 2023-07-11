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
        <!-- kotak -->
        <div class="card m-3" style="width: 18rem; height: 13rem;">
            <div class="card-body">
                <h4 class="card-title">Belajar buat aplikasi</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>

            <div class="card-body d-flex justify-content-between">
                <p class="card-link">Tanggal</p>

                <div class="">
                    <input type="checkbox" style="transform:scale(1.5) ;" class="m-2">
                    <!-- <a href="#"><img src="ctg.png" width="20"> </a> -->
                    <a href="#"><img src="hapus.png" width="20"> </a>
                </div>


                <!-- <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
        <!-- kotak -->

        <!-- Kotak 2 -->

        <div class="card m-3" style="width: 18rem ; height: 13rem;">
            <div class="card-body">
                <h4 class="card-title">Tambah Task</h4>
                <div class="text-center mt-5">
                    <a href="#"><img src="add.png" width="60"> </a>
                </div>
            </div>


            <!-- Kotak 2 -->


        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>