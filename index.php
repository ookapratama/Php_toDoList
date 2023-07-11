<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="m-3">To do List</h1>

    <div class="d-flex">
        <!-- kotak -->
        <div id="card_task" class="card m-3" style="width: 18rem; height: 13rem;">
            <div class="card-body">
                <h4 class="card-title">Belajar buat aplikasi</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body d-flex justify-content-between">
                <p class="card-link">Tanggal</p>

                <div class="">

                    <input type="checkbox" id="checkbox_task" style="transform:scale(1.5) ;" class="m-2">
                    <!-- <a href="#"><img src="ctg.png" width="20"> </a> -->
                    <a href="#"><img src="hapus.png" width="20"> </a>
                </div>


                <!-- <a href="#" class="card-link">Another link</a> -->
            </div>
        </div>
        <!-- kotak -->

        <!-- Kotak 2 -->
        <a href="">
            <div data-bs-toggle="modal" data-bs-target="#exampleModal" class="card m-3 kotak" style="width: 18rem ; height: 13rem;">
                <div class="card-body">
                    <div class="text-center mt-5">
                        <!-- <a href="#"> -->
                        <img src="add.png" width="60">
                        <!-- </a> -->
                    </div>
                </div>

        </a>
        <!-- Kotak 2 -->




    </div>
    </div>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal -->
    <!-- </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add to task</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" placeholder="Masukkan Title Task" class="form-control" id="exampleInputTitle" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Isi</label>
                            <input type="text" placeholder="Masukkan Isi Task" class="form-control" id="exampleInputPassword1">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="ubahwarnacard.js"></script>

</body>

</html>