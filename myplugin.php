<?php define('WP_USE_THEMES', true); require('./wp-blog-header.php'); ?>

<?php 

    // RETRIEVES DATA FROM API AND CORRECTLY FORMATS THE API INTO AN ARRAY
    $api = file_get_contents('http://il.leagueinfosight.com/client/infosight/il/list.php', NULL, NULL, 0);

    $array = explode(PHP_EOL, $api);

    foreach ($array as $string) {
        $array_csv[] = str_getcsv($string);
    }

    $keys = $array_csv[0];

    array_shift($array_csv);

    foreach ($array_csv as $row) {
        $api_data[] = array_combine($keys, $row);
    }

    // CREATES ASSOCIATIVE ARRAY OF API_ID'S AND CORRESPONDING POST ID VALUES
    $api_args = array (
        'meta_key' => 'api_id'
        );

    $pages = get_pages($api_args);
    foreach ($pages as $page) {
            $api_ids[] = ($page->{'api_id'});
    }

    $array_of_ids = [];
    $array_of_dates = [];

    // UPDATES or CREATES PAGES PULLED IN FROM THE API
    foreach ($api_data as $item) {

        $link = $item['APILink'];
        $link_fixed = substr_replace($link, "", 4, 1);
        $link_string = file_get_contents($link_fixed);
        $json = json_decode($link_string);
        $content = $json->{'Content'};

        if ((in_array($item["ID"], $api_ids) === true) && ($item["LastModified"] !== $array_of_dates[$item["ID"]])) {

            // UPDATES PAGE CONTENT
            $wp_id = $array_of_ids[$item["ID"]];

            $update_post = array(
                'ID' => $wp_id,
                'post_content' => $content
                );
            
            wp_update_post($update_post);

            update_field("mod_date", $item["LastModified"], $wp_id);

            $array_of_dates[$item["ID"]] = $item["LastModified"];

        } else {

            // CREATES PAGE
            $my_post = array(
                'post_title' => $item['PageName'],
                'post_content' => $content,
                'post_type' => 'page',
                'post_status' => 'publish'
                );

            $result = wp_insert_post($my_post);

            update_field("api_id", $item["ID"], $result);
            update_field("mod_date", $item["LastModified"], $result);

            $array_of_ids[] = array($item["ID"] => $result);
            $array_of_dates[] = array($item["ID"] => $item["LastModified"]);

        }
    }
?>
