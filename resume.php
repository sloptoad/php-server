<?php
$file = 'pisani_resume.pdf';
header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=" .$file."");
@readfile($file);
?>