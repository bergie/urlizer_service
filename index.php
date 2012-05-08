<?php
require 'vendor/midgard/midgardmvc-helper-urlize/interface.php';

if (isset($_GET['urlize'])) {
    die(midgardmvc_helper_urlize::string($_GET['urlize']));
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
