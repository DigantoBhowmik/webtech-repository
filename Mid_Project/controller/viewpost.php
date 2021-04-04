
<?php 
    $post_data = file_get_contents('../controller/post.json');
    $post_total_data = json_decode($post_data);

    foreach($post_total_data as $data)
    {
        echo "<h2><span class=''>Diganto: $data->view_post</span> </h2>";
    }
?>