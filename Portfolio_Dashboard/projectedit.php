<?php include ('include/sidebar.php'); ?>
<?php include ('include/topbar.php'); ?>

        <div class="row"></div>
 <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    <b>Edit Project</b>
                     <a href="projectlist.php" class="btn btn-danger float-end"> Back </a> 
                </h4>

            </div>
            <div class="card-body">
                <?php
                $paramResult = checkId('id');
                $project= "SELECT * FROM project WHERE id = '$paramResult' LIMIT 1" ;
                $results = $conn->query($project);
                $projectvalue = $results->fetch_assoc();
                ?>
              

                <form action="../config/code.php" method="POST" enctype="multipart/form-data">

                <div class="form-floating">
                </div>

                 
                    <div class="mb-3">
                        <input type="hidden" name="id" require class="form-control" value="<?php echo $paramResult?>">                        
                    </div>
                    <div class="mb-3">
                        <label> Title: </label>
                        <input type="text" name="title" require class="form-control" value="<?php echo $projectvalue['title'];?>">
                    </div>
                    <div class="mb-3">
                        <label> Description: </label>
                        <textarea name="description" require class="form-control" rows="3" value="<?php echo $projectvalue['description'];?>"><?php echo $projectvalue['description'];?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"><b>Profile Picture</b></label>
                        <input class="form-control" type="file" name="image" id="fileInput" require value="<?php echo $projectvalue['photo'];?>">
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="Update" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
                    




<script src="../admin/assets/js/script.js"></script>
<?php include ('include/footer.php'); ?>