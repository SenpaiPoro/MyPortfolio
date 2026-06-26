<?php include('include/sidebar.php')?>
<?php include('include/topbar.php')?>

  <?php
    $paramResult = checkId('id');

    $message = "SELECT * FROM messages WHERE id = '$paramResult' LIMIT 1";
    $results = $conn->query($message);
    $value = $results->fetch_assoc();
?>

<div class="container-fluid mt-5">

    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card shadow border-0">

                <!-- Header -->
                <div class="card-header bg-primary text-white d-flex align-items-center">

                    <!-- Profile Circle -->
                    <div class="rounded-circle bg-white text-primary d-flex align-items-center justify-content-center mr-3"
                         style="width:50px; height:50px; font-weight:bold;">

                        <?php echo strtoupper(substr($value['name'],0,1)); ?>

                    </div>

                    <!-- User Info -->
                    <div>
                        <h5 class="mb-0"><?php echo $value['name']; ?></h5>
                        <small><?php echo $value['email']; ?></small>
                    </div>

                </div>

                <!-- Message Body -->
                <div class="card-body bg-light" style="min-height:300px;">

                    <div class="d-flex mb-4">

                        <!-- Message Bubble -->
                        <div class="bg-white shadow-sm p-3 rounded" 
                             style="max-width:75%;">

                            <p class="mb-2">
                                <?php echo $value['message']; ?>
                            </p>

                          

                        </div>

                    </div>

                </div>

                <!-- Footer -->
                <div class="card-footer bg-white">

                    <div class="d-flex justify-content-between align-items-center">

                        <small class="text-muted">
                            Message ID: <?php echo $value['id']; ?>
                        </small>
                          <small style="margin-left: 20px; color: #000;">
                                Phone: <?php echo $value['phone']; ?>
                            </small>
                        <a href="messages.php" class="btn btn-sm btn-primary">
                            Back to Messages
                        </a>
/
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<?php include('include/footer.php')?>