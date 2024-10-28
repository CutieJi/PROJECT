<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css')?>">
    <title>Styx ShelfHub</title>
</head>

<body>

    <div class="container-fluid">
        <!-- header -->
        <div class="row">
            <div class="col-4">
            </div>

            <div class="col-4">
            </div>

            <div class="col-4">
           
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-6">
               
            </div>

            <div class="3">
            </div>

            <div class="3">
            </div>
        </div>



<form action="<?= site_url('Login/login')?>" method="post">

    <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <div class="card mt-5">
                        <div class="card-header text-center">
                            <span class="display-4 font-weight-bold text-primary">
                                Login to continue
                            </span>
                        </div>
                        <div class="card-body">
                        <?php if (validation_errors()) { ?>
                        <span class="text-danger"> <?= validation_errors();?></span>
                        <?php }   ?>
                            <div class="card-title">
                                <label for="users_id">Users ID</label>
                                <input class="form-control" name="users_id" type="text" placeholder="ABC-0000-0000">
                            </div>

                            <div class="card-title">
                                <label for="pword">Password</label>
                                <input class="form-control" name="pword" type="password" placeholder="password">
                            </div>

                            <div class="card-title">
                                <input class="btn btn-primary" type="submit" value="LOGIN">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</form>