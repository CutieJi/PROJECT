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

            <?php
            if ($this->session->userdata('usr_info')) {
                $user = $this->session->userdata('usr_info');
            
            ?>
                <div class="col-4">

                    <div class="row">
                        <div class="col text-right">
                            <span class="mr-5 ">Welcome: <?= $user->users_id; ?></span>
                        </div>
                        <div class="col">
                            <div class="dropdown">
                                <span class="dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    Options
                                </span>
                                <div class="dropdown-menu">
                                    <a  class="dropdown-item" href="#">Change password</a>
                                    <a  class="dropdown-item" href="<?= site_url('Login/logout') ?>">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            
            <?php } ?>
        </div>

        <div class="row mt-5">
            <div class="col-6">
                <h2 class="ml-3">Styx ShelfHub</h2>
            </div>

            <div class="3">
            </div>

            <div class="3">
            </div>
        </div>