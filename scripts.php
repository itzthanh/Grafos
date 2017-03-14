<?php
$scriptDir = "js";

$scripts = [
"form_home.php" => "form_home.js",
"form_data.php" => "form_data.js"
];

?>
<script type="text/javascript" src= "<?="$scriptDir/$scripts[$this_page]"?>"></script>