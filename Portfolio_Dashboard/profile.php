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
                <input type="hidden" name="colleges" value="<?php echo $college?>">

                    <div class="mb-3">
                        <label> Heading</label>
                        <input type="text" name="name" require class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Support</label>
                        <input type="text" name="support" require class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Tagline</label>
                        <input type="text" name="tagline" require class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Bio</label>
                        <textarea name="bio" require class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Profile Picture</label>
                        <input class="form-control" type="file" name="image" id="fileInput" require>
                    </div>
                    <div class="mb-3">
                        <label> Instagram</label>
                        <input type="text" name="instagram" require class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Linkin</label>
                        <input type="text" name="linkin" require class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Github</label>
                        <input type="text" name="github" require class="form-control">
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
