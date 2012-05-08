<?php
require 'vendor/midgard/midgardmvc-helper-urlize/interface.php';

if (isset($_GET['urlize'])) {
    $data = array();
    $data['from'] = $_GET['urlize'];
    $data['to'] = midgardmvc_helper_urlize::string($_GET['urlize']);
    header('Content-type: application/json');
    die(json_encode($data));
}
?>
<h1>Urlizer service</h1>
<form method="GET">
    <label>
        String to URLize
        <input name="urlize" type="text" />
    </label>
    <input type="submit" value="URLize" />
</form>

<p>
URLize service uses the <a href="http://packagist.org/packages/midgard/midgardmvc-helper-urlize">midgardmvc-helper-urlize</a> library.
</p>
