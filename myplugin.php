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
    $first = $new_array[0];
    $link = $first['APILink'];
    $linker = substr_replace($link, "", 4, 1);
    $content = file_get_contents($linker);

    // RETURNS JSON OBJECT
    $json = json_decode($content);
    // BELOW RETURNS A STRING!!!
    $json->{'Content'};

    

    // MAKES IT AN ARRAY
    // $hope = json_decode($content, true);


?>
