<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>title</title>
  <style type="text/css">
    .btn2 {
      height: 30px;
      width: 30px;
      border-radius: 50%;
      border: none;
      margin-top: -120px;
      margin-left: 190px;
    }

    @media only screen and (max-width: 600px) {
      .btn2 {
        margin-left: 380px;
        width: 20;
        height: 20;
      }
    }
  </style>
</head>

<body style="background-color: black;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="font-size: 30px;"><span style="color: red;">7</span>DW</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      </ul>
      <div class="form-inline my-2 my-lg-0">
        <a type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger btn-sm my-2 my-sm-0" style="color: white;">Add Hero</a>&nbsp;&nbsp;
        <a class="btn btn-danger btn-sm my-2 my-sm-0" style="color:white;">Add Type</a>
      </div>
    </div>
  </nav>
  .<div class="container">
    <div class="row">
      <div class="col">
        <div class="row">
          <?php
          include 'proses/con.php';
          $sql = "SELECT * FROM heroes_tb";
          $getSql = mysqli_query($conn, $sql);
          while ($rows = mysqli_fetch_array($getSql)) {
          ?>
            <div class="col-sm-3" style="margin-top: 20px;">
              <div class="card">
                <div class="card-body">
                  <button class="btn2" style="background-color: red;"></button></span>
                  <h5 class="card-title"><img src="proses/img/<?php echo $rows['photo'] ?>" width="140px" height="120px" alt=""></h5><span>
                    <p class="card-text"><?php echo $rows['name'] ?></p>
                    <a href="<?php  ?>" class="btn btn-danger" style="width: 100%;">Detail</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>


  <!----Modal Popup bootstrapp yang aku buat----->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Herois</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="proses/insert.php" enctype="multipart/form-data" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Nama</label>
              <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Type_id</label>
              <input type="text" class="form-control" name="type_id" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Photo</label><br>
              <input type="file" name="photo">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save </button>
        </div>
        </form>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>

</html>