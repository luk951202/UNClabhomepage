<?php
/**
 * Created by PhpStorm.
 * User: jaejin
 * Date: 2017. 5. 30.
 * Time: PM 7:45
 */



$filename = "Publications & Projects.pdf";
$reail_filename = urldecode("Publications & Projects.pdf");
$file_dir = './Publications & Projects.pdf';

header('Content-Type: application/x-octetstream');
header('Content-Length: '.filesize($file_dir));
header('Content-Disposition: attachment; filename='.$reail_filename);
header('Content-Transfer-Encoding: binary');

$fp = fopen($file_dir, "r");
fpassthru($fp);
fclose($fp);

