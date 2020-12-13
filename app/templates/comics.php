<?php
        for ($i = 0; $i < 20; $i++) {
            $imageUrl = $apiComic->data->results[$i]->thumbnail->path . "." . $apiComic->data->results[$i]->thumbnail->extension;
            echo "<div class='col-12 col-md-6 col-lg-4'>";
            echo "<div class='comic-wrapper'>";
            echo $apiComic->data->results[$i]->title;
            echo "<img src='$imageUrl'>";
            echo "</div>";
            echo "</div>";
        }   
        ?>