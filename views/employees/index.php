         <!-- content -->
         <h3 class="mt-3">
            Employees
         </h3>


         <div style="margin: 20px;">
            <a class="btn btn-primary" href="<?= site_url('Employees/add') ?>">Add Employee</a>
         </div>


             
         <div style="margin: 20px;">
            <?php
                if($this->session->flashdata('msg'))
                {
                    echo $this->session->flashdata('msg');
                }
            ?>
            <table class="table">
                <thead class="table-dark bg-primary">
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Employee No.</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Office No.</th>
                        <th>Live</th>
                        <th>Region</th>
                        <th>Barangy</th>
                        <th>Contact No.</th>
                        <th>Option</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    foreach ($employee as $user):
                    ?>
                        <tr>
                            <td><?= $user->lname;?></td>
                            <td><?= $user->fname;?></td>
                            <td><?= $user->em_id;?></td>
                            <td><?= $user->department;?></td>
                            <td><?= $user->email;?></td>
                            <td><?= $user->office_code;?></td>
                            <td><?= $user->province_or_city;?></td>
                            <td><?= $user->region;?></td>
                            <td><?= $user->brgy;?></td>
                            <td><?= $user->contact;?></td>
                            <td>
                                <a class="btn btn-success" href="<?= site_url('Employees/update/'.$user->id ) ?>">Edit</a> <a class="btn btn-danger" href="<?= site_url('Employees/delete/'.$user->id ) ?>">Delete</a>
                            </td>
                        </tr>

                   <?php endforeach ?>
                </tbody>
            </table>
         </div>







