<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('templates/frontpage.php');

$template->title = 'Latest Jobs';
//$template->job = $job->getAllJobs();

echo $template;
