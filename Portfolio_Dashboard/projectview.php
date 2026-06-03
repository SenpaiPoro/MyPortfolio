
<?php include ('include/sidebar.php'); ?>
<?php include ('include/topbar.php'); ?>

<?php
        $paramResult = checkId('id');
        $sql = "SELECT * FROM project WHERE id = '$paramResult'";
        $results = $conn->query($sql);
        $project = $results->fetch_assoc();

?>

<section class="py-5">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="btn btn-primary me-md-2" type="button" href="add_project_description.php?id=<?php echo $project['id']; ?>">Add Project Description</a>
</div>
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 style="
                            font-family: Neo-grotesque sans-serif;
                            font-weight:700;
                            margin-bottom:1rem;
                            background:linear-gradient(90deg,#007bff,#00c6ff);
                            background-clip:text;
                            -webkit-background-clip:text;
                            -webkit-text-fill-color:transparent;
                            letter-spacing:1px;
                        ">
                            <?php echo $project['title'];?> 
                            <span style="font-weight:300;color:#6c757d;">view</span>
                        </h1>


                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder text-dark-mode"><?php echo $project['title'];?></h2>
                                            <p class="text-dark-mode"><?php echo $project['description'];?></p>
                                        </div>
                                        <div class="col-lg-6 col-md-12 p-0">
                                            <img  class="img-fluid" src="../Portfolio/assets/projects/<?php echo $project['photo']; ?>" alt="..." />
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </section>


<script src="../admin/assets/js/script.js"></script>
<?php include ('include/footer.php'); ?>