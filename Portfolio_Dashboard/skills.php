<?php include ('include/sidebar.php'); ?>
<?php include ('include/topbar.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><b>Skill Management</b></h4>
                  <br>
                </h4> 
            </div>
        </div>
        <div class="card-body">
        <?= alertMessage(); ?>
                <form action="../config/code.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3"> 
                        <input type="hidden" name="user_id" require class="form-control" value="<?php echo $id;?>">
                        <input type="hidden" name="type" require class="form-control" value="SKILL">
                        <label>Professional Skill Name</label>
                        <input type="text" name="skill_name" require class="form-control">
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="add_skill" class="btn btn-primary">Add Skill</button>
                    </div>
                </form>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-hover"></tbody>
                 <?php
                        $Data = Getdata("skills", $id, 'SKILL');
                    if (mysqli_num_rows($Data) > 0) {
                        foreach ($Data as $DataList) {
                ?>
                              <tr>
                                <td><p style="color: #000;"> <?= htmlspecialchars($DataList['name']); ?></p></td>
                                <td> 
                                <a href="include/deleteskills.php?id=<?= $DataList['id'];?> "class="btn btn-danger btn-sm"
                                 onclick="return confirm('Are you Sure that you want to delete this Skill? ');">Delete</a>
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
                                    No Skills Record!
                                </td>
                            </tr>
                        <?php
                    }
                  ?>
                </tbody>
            </table>
                <form action="../config/code.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3"> 
                        <input type="hidden" name="user_id" require class="form-control" value="<?php echo $id;?>">
                        <input type="hidden" name="type" require class="form-control" value="LANGUAGE">
                        <label> Programming Language Name</label>
                        <input type="text" name="skill_name" require class="form-control">
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="add_skill" class="btn btn-primary">Add Language</button>
                    </div>
                </form>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-hover"></tbody>
                 <?php
                        $Data = Getdata("skills", $id, 'LANGUAGE');
                    if (mysqli_num_rows($Data) > 0) {
                        foreach ($Data as $DataList) {
                ?>
                              <tr>
                                <td><p style="color: #000;"> <?= htmlspecialchars($DataList['name']); ?></p></td>
                                <td> 
                                <a href="include/deleteskills.php?id=<?= $DataList['id'];?> "class="btn btn-danger btn-sm"
                                 onclick="return confirm('Are you Sure that you want to delete this Skill? ');">Delete</a>
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
                                    No Language Record!
                                </td>
                            </tr>
                        <?php
                    }
                  ?>
                </tbody>
            </table>
</div>

<?php include ('include/footer.php'); ?>