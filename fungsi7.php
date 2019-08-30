<?php
    if (function_exists('exif_read_data')) {
        echo "Funsi exif_read_data() ada di PHP. <br />\n";
    }else {
        echo "Funsi exif_read_data() tidak ada di PHP. <br />\n";
    }
?>