
        <!-- content -->
      


        <div style="margin: 20px;">
            <h3>Update User's Credential</h3>
         </div>
<div class="container px-0 px-lg-5">


    <div class="card bm-5 px-0 px-lg-5">


         <div class="m-4">
            <form action="<?= site_url('Employees/update/'.$user->id) ?>" method="post">
            <?php if (validation_errors()) { ?>
                        <span class="text-danger"> <?= validation_errors();?></span>
                <?php }   ?>
            

            <div class="form-group">
                <label for="lname">Employee No. <span class="text-danger">*</span></label>
                <input type="text" name="lname" value="<?= $user->lname?>" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
            </div>

            <div class="form-group">
                <label for="fname">First Name<span class="text-danger">*</span></label>
                <input type="text" name="fname" value="<?= $user->fname?>" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
            </div>

            <div class="form-group">
                <label for="em_id">Employee No. <span class="text-danger">*</span></label>
                <input type="text" name="em_id" value="<?= $user->em_id?>" class="form-control" id="exampleFormControlInput1" placeholder="ABC-0000-0000">
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

            <div class="form-group">
                <label for="email">Email<span class="text-danger">*</span></label>
                <input type="text" name="email" value="<?= $user->email?>" class="form-control" id="exampleFormControlInput1" placeholder="Email Address">
            </div>

            <div class="form-group">
                <label for="office_code">Office No. <span class="text-danger">*</span></label>
                <input type="text" name="office_code" value="<?= $user->office_code?>" class="form-control" id="exampleFormControlInput1" placeholder="0000-0000-ICP">
            </div>

            <div class="form-group">
                <label for="province_or_city">Live<span class="text-danger">*</span></label>
                <input type="text" name="province_or_city" value="<?= $user->province_or_city?>" class="form-control" id="exampleFormControlInput1" placeholder="Province or City">
            </div>

            <div class="form-group">
                <label for="region">Region<span class="text-danger">*</span></label>
                <input type="text" name="region" value="<?= $user->region?>" class="form-control" id="exampleFormControlInput1" placeholder="Region">
            </div>

            <div class="form-group">
                <label for="brgy">Barangy<span class="text-danger">*</span></label>
                <input type="text" name="brgy" value="<?= $user->brgy?>" class="form-control" id="exampleFormControlInput1" placeholder="Barangy">
            </div>

            <div class="form-group">
                <label for="contact">Employee No. <span class="text-danger">*</span></label>
                <input type="text" name="contact" value="<?= $user->contact?>" class="form-control" id="exampleFormControlInput1" placeholder="Contact Number">
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="Update">
            </div>
            </form>
        </div>
    </div>
</div>