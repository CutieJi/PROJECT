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
            <h3>Grant a Access to an Employee</h3>
         </div>



         <div style="margin: 20px;">
            <form action="<?= site_url('Grant_access/add') ?>" method="post">
                <?php 
                if (validation_errors()) {
                    echo validation_errors();
                }

                ?>
            <div>
                <label for="">Employee No.*</label>
                <input type="text" name="users_id" id="">
            </div>

            <div>
                <label for="">Department*</label>
                <select name="department" id="">
                <option value="">Select</option>
                <option value="IT">IT</option>
                <option value="Finance">Finance</option>
                <option value="Registrar">Registrar</option>
                </select>
            </div>

            <div>
                <input type="submit" value="Grant Access">
            </div>
            </form>
        </div>


    </div>

</body>

</html>