<?php define('WP_USE_THEMES', true); require('./wp-blog-header.php'); ?>

<?php 

    $api_data = file_get_contents('http://il.leagueinfosight.com/client/infosight/il/list.php', NULL, NULL, 0);

    $array = explode(PHP_EOL, $api_data);

    
    foreach ($array as $string) {
        $array_csv[] = str_getcsv($string);
    }


    $keys = $array_csv[0];
    array_shift($array_csv);

    foreach ($array_csv as $row) {
        $new_array[] = array_combine($keys, $row);
    }

    //TEST TO MAKE SURE ALL STUFF WORKS//
    // $first = $new_array[0];
    // $link = $first['APILink'];
    // $linker = substr_replace($link, "", 4, 1);
    // $content = file_get_contents($linker);

    // RETURNS JSON OBJECT
    // $json = json_decode($content);
    // BELOW RETURNS A STRING!!!
    // $json->{'Content'};

    // MAKES IT AN ARRAY
    // $hope = json_decode($content, true);

    foreach ($new_array as $item) {
        $link = $item['APILink'];
        $link_fixed = substr_replace($link, "", 4, 1);
        $link_string = file_get_contents($link_fixed);
        $json = json_decode($link_string);
        $content = $json->{'Content'};

        $my_post = array(
            'post_title' => $item['PageName'],
            'post_content' => $content,
            'post_type' => 'page'
            );

        wp_insert_post($my_post);
    }


?>
