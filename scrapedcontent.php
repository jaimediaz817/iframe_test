<?php
    $script1 = file_get_contents('https://static.flightstats.com/v2/prod/c-11864f-467/manifest-d6d37b619cff0b6ce5ac.js');
    $script2 = file_get_contents('https://static.flightstats.com/v2/prod/c-11864f-467/vendor-d6d37b619cff0b6ce5ac.js');
    $script3 = file_get_contents('https://static.flightstats.com/v2/prod/c-11864f-467/main-d6d37b619cff0b6ce5ac.js');
    $homepage = file_get_contents('https://www.flightstats.com/v2');

    echo $homepage;
?>