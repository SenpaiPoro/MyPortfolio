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
    <input class="form-control " type="search" name="search" placeholder="Search Username" aria-label="Search" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
    <button  class="btn btn-primary" type="submit">Search</button>
</div>
</form>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Colleges</th>
                        <th>Program</th>
                        <th>Username</th>
                        <th>Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                <?php
                    $searchQuery = ""; // Initialize search query
                    if (isset($_GET['search']) && !empty($_GET['search'])) {
                        $searchQuery = trim($_GET['search']);
                        $users = GetCollegeData("users", $college, $searchQuery);
                    } else {
                        $users = GetCollegeData("users", $college);
                    }

                    if (mysqli_num_rows($users) > 0) {
                        foreach ($users as $usersList) {
                ?>
                              <tr>
                                    <td> <?= htmlspecialchars($usersList['colleges']); ?></td>
                                    <td> <?= htmlspecialchars($usersList['program']); ?></td>
                                    <td> <?= htmlspecialchars($usersList['username']); ?></td>
                                    <td> <?= htmlspecialchars($usersList['tempcode']); ?></td>
                                <td> 
                                <a href="alumni_edit.php?id=<?= $usersList['id'];?>   "class="btn btn-success btn-sm">Edit</a>
                                <a href="../admin/user-delete.php?id=<?= $usersList['id'];?> "class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure that you want to delete this User? ');">Delete</a>
                                <a href="alumni_profile.php?id=<?= $usersList['id'];?>   "class="btn btn-info btn-sm">View</a>
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