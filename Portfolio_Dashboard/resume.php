      
      
      
    <?php include ('include/sidebar.php'); ?>
    <?php include ('include/topbar.php'); ?>

        <div class="row"></div>
 <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Resume Managerment
                </h4>
            </div>
            <div class="card-body">
              

                <form action="../config/code.php" method="POST" enctype="multipart/form-data">

                <div class="form-floating">
                </div>

                 <label>Type</label>
                        <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                            <option value="experience">
                                Experience
                            </option>
                            <option value="education">
                                Education
                            </option>
                        </select>

                    <div class="mb-3">
                        <label> Heading</label>
                        <input type="text" name="name" require class="form-control"value="<?php echo $row['heading']?>">
                    </div>
                    <div class="mb-3">
                        <label> Support</label>
                        <input type="text" name="support" require class="form-control" value="<?php echo $row['support']?>">
                    </div>
                    <div class="mb-3">
                        <label> Tagline</label>
                        <input type="text" name="tagline" require class="form-control" value="<?php echo $row['tagline']?>">
                    </div>
                    <div class="mb-3">
                        <label> Bio</label>
                        <textarea name="bio" require class="form-control" rows="3"></textarea value="<?php echo $row['bio']?>">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Profile Picture</label>
                        <input class="form-control" type="file" name="image" id="fileInput" require value="<?php echo $row['profile']?>">
                    </div>
                    <div class="mb-3">
                        <label> Instagram</label>
                        <input type="text" name="instagram" require class="form-control" value="<?php echo $row['ig_link']?>">
                    </div>
                    <div class="mb-3">
                        <label> Linkin</label>
                        <input type="text" name="linkin" require class="form-control" value="<?php echo $row['in_link']?>">
                    </div>
                    <div class="mb-3">
                        <label> Github</label>
                        <input type="text" name="github" require class="form-control" value="<?php echo $row['github']?>">
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="profile" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
                    

            
    <?php include('include/footer.php')?>