<?php define('WP_USE_THEMES', true); require('./wp-blog-header.php'); ?>

<?php 

    // RETRIEVES DATA FROM API
    $api = file_get_contents('http://il.leagueinfosight.com/client/infosight/il/list.php', NULL, NULL, 0);

    // TURNS API DATA INTO ARRAY
    $array = explode(PHP_EOL, $api);

    // FORMATS ARRAY CORRECTLY
    foreach ($array as $string) {
        $array_csv[] = str_getcsv($string);
    }

    // GRABS FIRST ROW OF THE ARRAY FOR KEYS
    $keys = $array_csv[0];

    // REMOVES FIRST ROW OF THE ARRAY(KEYS)
    array_shift($array_csv);

    //  CREATES ASSOCIATIVE ARRAY OF API KEYS AND VALUES
    foreach ($array_csv as $row) {
        $api_data[] = array_combine($keys, $row);
    }

    // CREATES ASSOCIATIVE ARRAY OF API_ID'S AND CORRESPONDING POST ID VALUES
    $pages = get_pages($args);
    foreach ($pages as $page) {
            $wp_ids[] = ($page->{'ID'});
            $api_ids[] = ($page->{'api_id'});
    }

    $array_of_ids = array_combine($api_ids, $wp_ids);

    // UPDATES or CREATES PAGES PULLED IN FROM THE API
    // foreach ($api_data as $item) {

    //     $link = $item['APILink'];
    //     $link_fixed = substr_replace($link, "", 4, 1);
    //     $link_string = file_get_contents($link_fixed);
    //     $json = json_decode($link_string);
    //     $content = $json->{'Content'};

    //     if (in_array($item["ID"], $api_ids) === true) {

    //         // UPDATES PAGE CONTENT
    //         $wp_id = $array_of_ids[$item["ID"]];

    //         $update_post = array(
    //             'ID' => $wp_id,
    //             'post_content' => $content
    //             );
            
    //         wp_update_post($update_post);

    //     } else {

    //         // CREATES PAGE
    //         $my_post = array(
    //             'post_title' => $item['PageName'],
    //             'post_content' => $content,
    //             'post_type' => 'page',
    //             'post_status' => 'publish'
    //             );

    //         $result = wp_insert_post($my_post);

    //         update_field("api_id", $item["ID"], $result);
    //     }
    // }
?>
