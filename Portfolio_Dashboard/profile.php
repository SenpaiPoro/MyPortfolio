        <?php include ('include/sidebar.php'); ?>
        <?php include ('include/topbar.php'); ?>

        <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Profile Managerment
                </h4>
            </div>
            <div class="card-body">
                    
              

                <form action="../config/code.php" method="POST" enctype="multipart/form-data">

                <div class="form-floating">
                </div>

                    <input name="username" type="hidden" value="<?php echo $username; ?>">

                    <div class="mb-3">
                        <label> <b>Heading</b></label>
                        <input type="text" name="heading" require class="form-control" value="<?php echo $row['heading'];?>">
                    </div>
                    <div class="mb-3">
                        <label> <b> Support </b></label>
                        <input type="text" name="support" require class="form-control" value="<?php echo $row['support'];?>">
                    </div>
                    <div class="mb-3">
                        <label> <b>Tagline </b></label>
                        <input type="text" name="tagline" require class="form-control" value="<?php echo $row['tagline'];?>">
                    </div>
                    <div class="mb-3">
                        <label> <b>Bio</b></label>
                        <textarea name="bio" require class="form-control" rows="3" value="<?php echo $row['bio'];?>"><?php echo $row['bio'];?>"</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"><b>Profile Picture</b></label>
                        <input class="form-control" type="file" name="image" id="fileInput" require value="<?php echo $row['profile'];?>">
                    </div>
                    <div class="mb-3">
                        <label><b> Instagram</b></label>
                        <input type="text" name="instagram" require class="form-control"value="<?php echo $row['ig_link'];?>">
                    </div>
                    <div class="mb-3">
                        <label><b> Linkin</b></label>
                        <input type="text" name="linkin" require class="form-control" value="<?php echo $row['in_link'];?>">
                    </div>
                    <div class="mb-3">
                        <label><b> Github</b></label>
                        <input type="text" name="github" require class="form-control" value="<?php echo $row['github'];?>">
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="profile" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

        

        <?php include ('include/footer.php'); ?>
