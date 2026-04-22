<?php include ('include/sidebar.php'); ?>
<?php include ('include/topbar.php'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4><b>Project Management</b></h4>
                  <br>
                    <a href="project.php" class="btn btn-primary float-end"> Add Project </a>
                </h4> 
            </div>
        </div>
        <div class="card-body">
        <?= alertMessage(); ?>
            <form class="d-flex" role="search" method="GET">
            <div class="input-group input-group-sm mb-3">
</div>
</form>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                <?php

                        $Data = Getdata("project");
                    

                    if (mysqli_num_rows($Data) > 0) {
                        foreach ($Data as $DataList) {
                ?>
                              <tr>
                                    <td> <?= htmlspecialchars($DataList['id']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['title']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['description']); ?></td>
                                    
                                <td> 
                                <a href="projectedit.php?id=<?= $DataList['id'];?>   "class="btn btn-success btn-sm">Edit</a>
                                <a href="include/deleteproject.php?id=<?= $DataList['id'];?> "class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure that you want to delete this Project? ');">Delete</a>
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