
        <!-- content -->
         

        <div style="margin: 20px;">
            <h3>Fill to add Employee</h3>
         </div>

<div class="container px-0 px-lg-5">


        <div style="m-5 px-0 px-lg-5">
            <form action="<?= site_url('Employees/add') ?>" method="post">
                <?php if (validation_errors()) { ?>
                        <span class="text-danger"> <?= validation_errors();?></span>
                <?php }   ?>
            

            <div class="form-group">
                <label for="lname">Last Name <span class="text-danger">*</span></label>
                <input type="text" name="lname" class="form-control" id="exampleFormControlInput1" placeholder="last name">
            </div>

            <div class="form-group">
                <label for="fname">First Name <span class="text-danger">*</span></label>
                <input type="text" name="fname" class="form-control" id="exampleFormControlInput1" placeholder="first name">
            </div>

            <div class="form-group">
                <label for="em_id">Employee No. <span class="text-danger">*</span></label>
                <input type="text" name="em_id" class="form-control" id="exampleFormControlInput1" placeholder="abc-0000-0001">
            </div>

            <div class="form-group">
                <label for="department">Department <span class="text-danger">*</span></label>
                <select name="department" class="form-control" id="department">
                    <option value="">Select</option>
                    <option value="IT Department">IT Department</option>
                    <option value="Finance">Finance</option>
                    <option value="Registrar">Registrar</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email address">
            </div>

            <div class="form-group">
                <label for="office_code">Office No. <span class="text-danger">*</span></label>
                <input type="text" name="office_code" class="form-control" id="exampleFormControlInput1" placeholder="0000-0000-icp">
            </div>

            <div class="form-group">
                <label for="province_or_city">Live <span class="text-danger">*</span></label>
                <input type="text" name="province_or_city" class="form-control" id="exampleFormControlInput1" placeholder="province or city">
            </div>

            <div class="form-group">
                <label for="region">Region <span class="text-danger">*</span></label>
                <input type="text" name="region" class="form-control" id="exampleFormControlInput1" placeholder="region">
            </div>

            <div class="form-group">
                <label for="brgy">Baranggy <span class="text-danger">*</span></label>
                <input type="text" name="brgy" class="form-control" id="exampleFormControlInput1" placeholder="baranggy">
            </div>

            <div class="form-group">
                <label for="contact">Contact No. <span class="text-danger">*</span></label>
                <input type="text" name="contact" class="form-control" id="exampleFormControlInput1" placeholder="contact number">
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="Grant Access">
            </div>
            </form>
        </div>
</div>


