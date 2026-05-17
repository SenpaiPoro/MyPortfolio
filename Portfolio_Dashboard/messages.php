      <?php include ('include/sidebar.php'); ?>
      <?php include ('include/topbar.php'); ?>

      <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 style="color: #000;"><b>Messages</b></h4>
                </h4> 
            </div>
        </div>
        <div class="card-body">
            <form class="d-flex" role="search" method="GET">
            <div class="input-group input-group-sm mb-3">
</div>
</form>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                <?php

                        $Data = Getdata("messages", $id );
                    

                    if (mysqli_num_rows($Data) > 0) {
                        foreach ($Data as $DataList) {
                ?>
                              <tr>
                                    <td> <?= htmlspecialchars($DataList['name']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['email']); ?></td>
                                    <td> <?= htmlspecialchars($DataList['phone']); ?></td>
                                    
                                <td> 
                                <a href="include/deleteproject.php?id=<?= $DataList['id'];?> "class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure that you want to delete this Project? ');">Delete</a>
                                <a href="MessageView.php?id=<?= $DataList['id'];?>   "class="btn btn-info btn-sm">View Messages</a>
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
