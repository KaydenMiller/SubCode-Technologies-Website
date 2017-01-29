<?php
    function ServerLoadLatest ()
    {
        shell_exec("/home/scripts/factorio_load_latest.sh");

        echo "Success!";
    }
?>