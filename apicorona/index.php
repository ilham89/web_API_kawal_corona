<?php
$url = file_get_contents('https://api.kawalcorona.com/indonesia');
$data = json_decode($url,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Covid Indonesia </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class ="fa fa-fw fa-home"></i>
                Home
            </a>
            
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    

    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-12">
                <div class="alert alert-primary">
                    <strong>Update</strong> Data Virus Corona di Indonesia!
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-2">
            <div class="col-md-4 ">
                <div class="card badge-primary p-3 mb-3 shadow rounded ">                       
                    <div class="card-body">
                    <h4 class="card-title text-center"><?= $data[0]['name'] ?></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center">Positif</h4>
                        <p class="card-text text-center"><?php echo $data[0]['positif']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center">Sembuh</h4>
                        <p class="card-text text-center"><?php echo $data[0]['sembuh']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center">Meninggal</h4>
                        <p class="card-text text-center"><?php echo $data[0]['meninggal']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card badge-primary p-3 mb-5 shadow rounded">
                    <div class="card-body">
                        <h4 class="card-title text-center">Dirawat</h4>
                        <p class="card-text text-center"><?php echo $data[0]['dirawat']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>