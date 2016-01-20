<?php define('WP_USE_THEMES', true); require('./wp-blog-header.php'); ?>

<?php 

    $api_data = file_get_contents('http://il.leagueinfosight.com/client/infosight/il/list.php', NULL, NULL, 0);

    $array = explode(PHP_EOL, $api_data);

    
    foreach ($array as $string) {
        $array_csv[] = str_getcsv($string);
    }

    $a = $array_csv[0];
    array_shift($array_csv);

    foreach ($array_csv as $row) {
        $new_array[] = array_combine($a, $row);
    }
    
?>
