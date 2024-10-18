         <!-- content -->
         <h3 class="mt-3">
            Grant an Access
         </h3>


         <div style="margin: 20px;">
            <a class="btn btn-primary" href="<?= site_url('Grant_access/add') ?>">Grant an Access</a>
         </div>


             
         <div style="margin: 20px;">
            <?php
                if($this->session->flashdata('msg'))
                {
                    echo $this->session->flashdata('msg');
                }
            ?>
            <table class="table">
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
                                <a class="btn btn-success" href="<?= site_url('Grant_access/update/'.$user->id ) ?>">Edit</a> <a class="btn btn-danger" href="<?= site_url('Grant_access/delete/'.$user->id ) ?>">Delete</a>
                            </td>
                        </tr>

                   <?php endforeach ?>
                </tbody>
            </table>
         </div>







