<?php include 'inc/header.php'; ?>
   <h2> <?php echo $job->job_title;?>(<?php echo $job->location ?>) </h2>
   <small>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
   <hr>
   <p class="lead"><?php echo $job->description; ?></p>
   <ul class="list-group">
       <li class="list-group-item"><strong>Company: </strong><?php echo 
       $job->company; ?></li>
       <li class="list-group-item"><strong>Salary: </strong><?php echo 
       $job->salary; ?></li>
       <li class="list-group-item"><strong>Contact: </strong><?php echo 
       $job->contact_email; ?></li>
   </ul>
   <br><br>
   <a href="index.php">Voltar</a>
   <br><br>
<?php include 'inc/footer.php'; ?>