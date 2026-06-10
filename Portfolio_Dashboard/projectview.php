
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
                    <div class="text-center mb-5">
                         <h2 style="
                                    font-family: 'Oswald', sans-serif;
                                    font-size: 2rem;
                                    font-weight: 700;
                                    margin-bottom: 1rem;
                                    background: linear-gradient(90deg, #ff6a00, #ee0979);
                                    background-clip: text;
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;
                                    letter-spacing: 1px;
                                    text-transform: uppercase;
                                ">
                            <?php echo $project['title'];?> 
                            <span style="font-weight:300;color:#6c757d;">view</span>
                        </h1>

                    <div class="card h-100 overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="row g-0 align-items-stretch">

                            <!-- Text -->
                            <div class="col-md-6 d-flex flex-column">
                                <div class="p-5 flex-grow-1">
                                <h2 style="
                                    font-family: 'Oswald', sans-serif;
                                    font-size: 2rem;
                                    font-weight: 700;
                                    margin-bottom: 1rem;
                                    background: linear-gradient(90deg, #ff6a00, #ee0979);
                                    background-clip: text;
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;
                                    letter-spacing: 1px;
                                    text-transform: uppercase;
                                ">
                                    <?php echo $project['title'];?>
                                </h2>
                                <p class="text-dark-mode" style="color: #000;"><?php echo $project['description'];?></p>
                                </div>
                                <p><a class="link-opacity-50-hover" href="<?php echo $project['link']; ?>" target="_blank">View Project</a></p>
                            </div>

                            <!-- Image -->
                            <div class="col-md-6 p-0">
                                <img class="img-fluid w-100 h-100 object-fit-cover"
                                    src="../Portfolio/assets/projects/<?php echo $project['photo']; ?>" 
                                    alt="..." />
                            </div>

                            </div>
                        </div>
                    </div>

                    <?php
                    $Data = Getdata("project_img", $paramResult);

                    if (mysqli_num_rows($Data) > 0) {
                        foreach ($Data as $DataList) {
                ?>

                   <div class="card h-100 overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="row g-0 align-items-stretch">

                            <!-- Text -->
                            <div class="col-md-6 d-flex flex-column">
                                <div class="p-5 flex-grow-1">
                                <h2 style="
                                    font-family: 'Oswald', sans-serif;
                                    font-size: 2rem;
                                    font-weight: 700;
                                    margin-bottom: 1rem;
                                    background: linear-gradient(90deg, #ff6a00, #ee0979);
                                    background-clip: text;
                                    -webkit-background-clip: text;
                                    -webkit-text-fill-color: transparent;
                                    letter-spacing: 1px;
                                    text-transform: uppercase;
                                ">
                                    <?php echo $DataList['title']; ?>
                                </h2>

                                    <?php echo $DataList['title'];?>
                                </h2>
                                <p class="text-dark-mode" style="color: #000;"><?php echo $DataList['img_description'];?></p>
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-md-6 p-0">
                                <img class="img-fluid w-100 h-100 object-fit-cover"
                                    src="../Portfolio/assets/projects/<?php echo $DataList['img']; ?>" 
                                    alt="..." />
                            </div>

                            </div>
                        </div>
                    </div>
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
            </section>

<script src="../admin/assets/js/script.js"></script>
<?php include ('include/footer.php'); ?>