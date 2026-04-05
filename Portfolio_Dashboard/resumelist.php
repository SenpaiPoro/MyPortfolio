<?php include ('include/sidebar.php'); ?>
<?php include ('include/topbar.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><b> Resume</b></h4>
                  <br>
                    <a href="add_alumni.php" class="btn btn-primary float-end"> Add Experience </a>
                    <a href="add_alumni.php" class="btn btn-secondary float-end"> Add Education </a>

                </h4> 
            </div>
        </div>
        <div class="card-body">
        <?= alertMessage(); ?>
        <form method="GET" action="">
        <input type="hidden" id="Department-type" name="colleges" class="form-control" rows="2" value="<?php echo $college?>">

            </form>
            <form class="d-flex" role="search" method="GET">
            <div class="input-group input-group-sm mb-3">
</div>
</form>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                <?php

                        $Data = GetResume("resume");
                    

                    if (mysqli_num_rows($Data) > 0) {
                        foreach ($Data as $DataList) {
                ?>
                              <tr>
                                    <td> <?= htmlspecialchars($DataList['type']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['name']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['title']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['address']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['description']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['year']); ?></td>
                                    
                                <td> 
                                <a href="alumni_edit.php?id=<?= $DataList['id'];?>   "class="btn btn-success btn-sm">Edit</a>
                                <a href="../admin/user-delete.php?id=<?= $DataList['id'];?> "class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure that you want to delete this User? ');">Delete</a>
                                <a href="alumni_profile.php?id=<?= $DataList['id'];?>   "class="btn btn-info btn-sm">View</a>
                            </td>
                    </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td colspan="4">
                                    No Record!
                                </td>
                            </tr>
                        <?php
                    }
                  ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
<script src="../admin/assets/js/script.js"></script>
<?php include ('include/footer.php'); ?>