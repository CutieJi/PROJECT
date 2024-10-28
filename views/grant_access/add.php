
        <!-- content -->
         

         <div style="margin: 20px;">
            <h3>Grant a access to Users</h3>
         </div>

<div class="container px-0 px-lg-5">


        <div style="m-5 px-0 px-lg-5">
            <form action="<?= site_url('Grant_access/add') ?>" method="post">
                <?php if (validation_errors()) { ?>
                        <span class="text-danger"> <?= validation_errors();?></span>
                <?php }   ?>
            

            <div class="form-group">
                <label for="users_id">Users ID<span class="text-danger">*</span></label>
                <input type="text" name="users_id" class="form-control" id="exampleFormControlInput1" placeholder="ABC-0000-0000">
            </div>


          

            <div class="form-group">
                <label for="department">Department <span class="text-danger">*</span></label>
                <select name="department" class="form-control" id="department">
                    <option value="">Select</option>
                    <option value="IT">IT</option>
                    <option value="Finance">Finance</option>
                    <option value="Registrar">Registrar</option>
                </select>
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="Grant Access">
            </div>
            </form>
        </div>
</div>


