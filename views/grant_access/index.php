<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <!-- header -->
        <div>
            <div>
                
            </div>
            <div>

            </div>
            <div>

            </div>
        </div>

        <div>
            <div>
                <h2>School of ABC</h2>
            </div>
            <div>

            </div>
            <div>

            </div>
        </div>


        <!-- navigation -->


        <div>
            <div>
                <a href="<?= site_url('Dashboard') ?>">Home</a>
                <a href="<?= site_url('Grant_access') ?>">Grant Access</a>
                <a href="">Employees</a>

            </div>
        </div>


        <!-- content -->
         <div>
            this a grant access page
         </div>


         <div style="margin: 20px;">
            <a href="<?= site_url('Grant_access/add') ?>">Grant an Access</a>
         </div>


             


         <div style="margin: 20px;">
            <?php
                if($this->session->flashdata('msg'))
                {
                    echo $this->session->flashdata('msg');
                }
            ?>
            <table border>
                <thead>
                    <tr>
                        <th>Employee No.</th>
                        <th>Department</th>
                        <th>Option</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($users as $user):
                    ?>
                        <tr>
                            <td><?= $user->users_id;?></td>
                            <td><?= $user->department;?></td>
                            <td>
                                <a href="<?= site_url('Grant_access/update/'.$user->id ) ?>">Edit</a> | <a href="<?= site_url('Grant_access/delete/'.$user->id ) ?>">Delete</a>
                            </td>
                        </tr>

                   <?php endforeach ?>
                </tbody>
            </table>
         </div>








    </div>

</body>
</html>