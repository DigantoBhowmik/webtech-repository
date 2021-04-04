<?php
    $dtls = file_get_contents('../controller/data.json');
    $dtlsok = json_decode($dtls);

    foreach($dtlsok as $ok)
    {
        echo "<h2><span class='label label-danger'>Name: $ok->name</span> </h2>";
        echo "<h2><span class='label label-danger'>User Name: $ok->username</span> </h2>";
        echo "<h2><span class='label label-danger'>Email: $ok->email</span> </h2>";
        echo "<h2><span class='label label-danger'>Date of Bath: $ok->dob</span> </h2>";
        echo "<h2><span class='label label-danger'>Gender: $ok->gender</span> </h2>";

    }
?>