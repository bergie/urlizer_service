<h1>Urlizer service (experimental)</h1>
<?php
require 'vendor/midgard/midgardmvc-helper-urlize/interface.php';
$string = 'älä lyö ääliö ööliä läikkyy';
echo midgardmvc_helper_urlize::string($string);
