<?php
require 'vendor/midgard/midgardmvc-helper-urlize/interface.php';
$string = 'älä lyö ääliö ööliä läikkyy';
echo midgardmvc_helper_urlize::string($string);
