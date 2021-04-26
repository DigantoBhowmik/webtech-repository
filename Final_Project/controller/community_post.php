<?php
    $dtls = file_get_contents('../controller/aiub_com.json');
    $dtlsok = json_decode($dtls);

    foreach($dtlsok as $ok)
    {
        echo $ok->poststat."<br>";

    }
?>