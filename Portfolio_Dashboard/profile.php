        <?php include ('include/sidebar.php'); ?>
        <?php include ('include/topbar.php'); ?>

        <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Home Page Management
                    <a href="ProgramEvent.php" class="btn btn-danger float-end"> Back </a> 
                </h4>
            </div>
            <div class="card-body">
                    
              

                <form action="../config/code.php" method="POST" enctype="multipart/form-data">

                <div class="form-floating">
                </div>
                <input type="hidden" name="colleges" value="<?php echo $college?>">

                    <div class="mb-3">
                        <label> Event Name</label>
                        <input type="text" name="name" require class="form-control">
                    </div>
                    <div class="mb-3">
                        <label> Description</label>
                        <textarea name="description" require class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Event Image</label>
                        <input class="form-control" type="file" name="image" id="fileInput" require>
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="AddEvent" class="btn btn-primary">Add Event</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

        

        <?php include ('include/footer.php'); ?>
