
        <!-- content -->
      


         <div style="margin: 20px;">
            <h3>Update User's Credential</h3>
         </div>
<div class="container px-0 px-lg-5">


    <div class="card bm-5 px-0 px-lg-5">


         <div class="m-4">
            <form action="<?= site_url('Grant_access/update/'.$user->id) ?>" method="post">
            <?php if (validation_errors()) { ?>
                        <span class="text-danger"> <?= validation_errors();?></span>
                <?php }   ?>
            

            <div class="form-group">
                <label for="users_id">Users ID<span class="text-danger">*</span></label>
                <input type="text" name="users_id" value="<?= $user->users_id?>" class="form-control" id="exampleFormControlInput1" placeholder="abc-0000-0000">
            </div>


          

            <div class="form-group">
                <label for="department">Department <span class="text-danger">*</span></label>
                <select name="department" class="form-control" id="department">
                    <option value="<?= $user->department?>">Selected value: <?= $user->department?></option>
                    <option value="IT">IT</option>
                    <option value="Finance">Finance</option>
                    <option value="Registrar">Registrar</option>
                </select>
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="Update">
            </div>
            </form>
        </div>
    </div>
</div>