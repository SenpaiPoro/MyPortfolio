      <?php include ('include/sidebar.php'); ?>
      <?php include ('include/topbar.php'); ?>


 <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Project Managerment
                </h4>
            </div>
            <div class="card-body">
                    
              

                <form action="../config/code.php" method="POST" enctype="multipart/form-data">

                <div class="form-floating">
                </div>
                <input type="hidden" name="colleges" value="<?php echo $college?>">

                    <div class="mb-3">
                        <label> Name</label>
                        <input type="text" name="name" require class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Description</label>
                        <input type="text" name="support" require class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"><b>Project Image Highlight</b></label>
                        <input class="form-control" type="file" name="image" id="fileInput" require value="<?php echo $row['profile'];?>">
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="project" class="btn btn-primary">Add Project</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


      <?php include ('include/footer.php'); ?>
