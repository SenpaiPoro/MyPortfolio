<?php include('include/sidebar.php')?>
<?php include('include/topbar.php')?>



            <?php
                $paramResult = checkId('id');
                $message = "SELECT * FROM messages WHERE id = '$paramResult' LIMIT 1" ;
                $results = $conn->query($message);
                $value = $results->fetch_assoc();
            ?>

    <div class="container-fluid">
            <div class="modal-dialog ">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $value['name'];?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><?php echo $value['message'];?></p>
                </div>
                <div class="grid text-center">
                    <div class="g-col-6"><p><?php echo $value['email'];?></p></div>
                    <div class="g-col-6"><p><?php echo $value['phone'];?></p></div>
                </div>
                </div>

            </div>
    </div>
<?php include('include/footer.php')?>