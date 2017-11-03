<?php

$pyt = file_get_contents("http://localhost/iRecommender/iRecommender-Logs/analyze_behavior.py");
header("Location: http://localhost/iRecommender/admin-dashbord/"); /* Redirect browser */
exit();

?>

