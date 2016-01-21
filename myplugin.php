<?php define('WP_USE_THEMES', true); require('./wp-blog-header.php'); ?>

<?php 

    // CAPTURES DATA FROM API
    function get_api_data(){
        $api_data = file_get_contents('http://il.leagueinfosight.com/client/infosight/il/list.php', NULL, NULL, 0);
    }

    // TURNS STRING INTO ARRAY
    $array = explode(PHP_EOL, $api_data);

    // FORMATS ARRAY CORRECTLY
    foreach ($array as $string) {
        $array_csv[] = str_getcsv($string);
    }

    // GRABS FIRST ROW OF THE ARRAY FOR KEYS
    $keys = $array_csv[0];

    // REMOVES FIRST ROW OF THE ARRAY
    array_shift($array_csv);

    //  CREATES ASSOCIATIVE ARRAY OF API KEYS AND DATA
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




    // CREATS SEPERATE PAGES FROM THE API
    // foreach ($new_array as $item) {

    //     $link = $item['APILink'];
    //     $link_fixed = substr_replace($link, "", 4, 1);
    //     $link_string = file_get_contents($link_fixed);
    //     $json = json_decode($link_string);
    //     $content = $json->{'Content'};

    //     $my_post = array(
    //         'post_title' => $item['PageName'],
    //         'post_content' => $content,
    //         'post_type' => 'page',
    //         'post_status' => 'publish'
    //         );

    //     $result = wp_insert_post($my_post);

    //     update_field("api_id", $item["ID"], $result);

    // }




    // CREATES ARRAY OF POST IDS AND CORRESPONDING API_ID VALUE
    $pages = get_pages($args);

    foreach ($pages as $page) {
            $array_id[] = ($page->{'ID'});
            $array_api[] = ($page->{'api_id'});
    }

    $array_of_ids = array_combine($array_id, $array_api);


?>
