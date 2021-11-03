<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

// print_r($job->getAllJobs);
// die;
$template = new Template('templates/job-single.php');

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;
