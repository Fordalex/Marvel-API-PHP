<div class="row m-0 p-3">
    <div class="col-12 col-md-6 col-lg-4">
        <form action="?page=character" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Hulk, Thor, Spider-Man">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="page" value="character">Search</button>
                </div>
            </div>
        </form>
    </div>
</div>



<div class="row m-0 p-3">
    <div class="col-12 col-md-6">
        <?php
        $imageUrl = $apiCharacters->data->results[0]->thumbnail->path . "." .  $apiCharacters->data->results[0]->thumbnail->extension;
        echo "<img src='$imageUrl' class='character-image'>";
        ?>
    </div>
    <div class="col-12 col-md-6">
        <h1><?php echo $apiCharacters->data->results[0]->name; ?></h1>
        <p><?php echo $apiCharacters->data->results[0]->description; ?></p>
        <div class="row m-0 p-0">
            <div class="col-3">
                <p>Comics</p>
                <?php echo $apiCharacters->data->results[0]->comics->available; ?>
            </div>
            <div class="col-3">
                <p>Stories</p>
                <?php echo $apiCharacters->data->results[0]->stories->available; ?>
            </div>
            <div class="col-3">
                <p>Events</p>
                <?php echo $apiCharacters->data->results[0]->events->available; ?>
            </div>
            <div class="col-3">
                <p>Series</p>
                <?php echo $apiCharacters->data->results[0]->series->available; ?>
            </div>
        </div>

        <p class="text-center"><?php echo $apiCharacters->attributionHTML; ?></p>
    </div>
</div>

<p>Seach Result: <?php echo $apiCharacters->data->count; ?></p>

<div class="row m-0 p-0" id="changeableBackground">
    <div class="col-12 col-md-6 col-lg-3 comic-container card-container">
        <h6 class='card-title'>Comic</h6>
        <?php 
            $title = $apiComic->data->results[0]->title;
            $issueNumber = $apiComic->data->results[0]->issueNumber;
            $modified = $apiComic->data->results[0]->modified;
            $description = $apiComic->data->results[0]->description;

            echo "<h2 class='card-title'>$title</h2>";
            echo "<p class='text-secondary m-0'>Date: $modified</p>";
            echo "<p class='text-secondary m-0'>Issue No. $issueNumber</p>";
            echo "<p class='m-0 comic-description descirption'>$description</p>";

            echo "<button>All Comics</button>";
        ?>
    </div>
    <div class="col-12 col-md-6 col-lg-3 stories-container card-container">
        <h6 class='card-title'>Stories</h6>
        <?php 
            $title = $apiComic->data->results[0]->title;
            $issueNumber = $apiComic->data->results[0]->issueNumber;
            $modified = $apiComic->data->results[0]->modified;
            $description = $apiComic->data->results[0]->description;

            echo "<h2 class='card-title'>$title</h2>";
            echo "<p class='text-secondary m-0'>Date: $modified</p>";
            echo "<p class='text-secondary m-0'>Issue No. $issueNumber</p>";
            echo "<p class='m-0 stories-description card-descirption'>$description</p>";

            echo "<button>All Stories</button>";
        ?>
    </div>
    <div class="col-12 col-md-6 col-lg-3 events-container card-container">
        <h6 class='card-title'>Events</h6>
        <?php 
            $title = $apiComic->data->results[0]->title;
            $issueNumber = $apiComic->data->results[0]->issueNumber;
            $modified = $apiComic->data->results[0]->modified;
            $description = $apiComic->data->results[0]->description;

            echo "<h2 class='card-title'>$title</h2>";
            echo "<p class='text-secondary m-0'>Date: $modified</p>";
            echo "<p class='text-secondary m-0'>Issue No. $issueNumber</p>";
            echo "<p class='m-0 events-description card-descirption'>$description</p>";

            echo "<button>All Events</button>";
        ?>
    </div>
    <div class="col-12 col-md-6 col-lg-3 series-container card-container">
        <h6 class='card-title'>Series</h6>
        <?php 
            $title = $apiComic->data->results[0]->title;
            $issueNumber = $apiComic->data->results[0]->issueNumber;
            $modified = $apiComic->data->results[0]->modified;
            $description = $apiComic->data->results[0]->description;

            echo "<h2 class='card-title'>$title</h2>";
            echo "<p class='text-secondary m-0'>Date: $modified</p>";
            echo "<p class='text-secondary m-0'>Issue No. $issueNumber</p>";
            echo "<p class='m-0 series-description card-descirption'>$description</p>";

            echo "<button>All Series</button>";
        ?>
    </div>
</div>
    


<script>
// Changed the background image and the description on each card entity.

$('.comic-container').hover( function() {
    <?php
        $imageUrl = $apiComic->data->results[0]->thumbnail->path . "." . $apiComic->data->results[0]->thumbnail->extension;
        $img = 'url("' . "$imageUrl" . '") center center';
        echo "$('#changeableBackground').css('background', '$img');";
    ?>
    $('.comic-description').css('display', 'block');
});

$('.stories-container').hover( function() {
    <?php
        $imageUrl = $apiComic->data->results[0]->thumbnail->path . "." . $apiComic->data->results[0]->thumbnail->extension;
        $img = 'url("' . "$imageUrl" . '") center center';
        echo "$('#changeableBackground').css('background', '$img');";
    ?>
    $('.stories-description').css('display', 'block');
});

$('.events-container').hover( function() {
    <?php
        $imageUrl = $apiCharacters->data->results[0]->thumbnail->path . "." .  $apiCharacters->data->results[0]->thumbnail->extension;
        $img = 'url("' . "$imageUrl" . '") center center';
        echo "$('#changeableBackground').css('background', '$img');";
    ?>
    $('.events-description').css('display', 'block');
});

$('.series-container').hover( function() {
    <?php
        $imageUrl = $apiComic->data->results[0]->thumbnail->path . "." . $apiComic->data->results[0]->thumbnail->extension;
        $img = 'url("' . "$imageUrl" . '") center center';
        echo "$('#changeableBackground').css('background', '$img');";
    ?>
    $('.series-description').css('display', 'block');
});

</script>






<!-- 
<div class="row m-0 p-0">
    <div class="col-12">
        <h4>Comics</h4>
    </div>
        <?php 
            // for ($i = 0; $i < 6; $i++) {
            //     $imageUrl = $apiCharacters->data->results[0]->comics->items[0]->resourceURI;
            //     echo "<div class='col-12 col-md-6 col-lg-4'>";
            //     echo "<div class='comic-wrapper'>";
            //     echo $apiCharacters->data->results[0]->comics->items[$i]->name;
            //     echo "<img src='$imageUrl'>";
            //     echo "</div>";
            //     echo "</div>";
            // }   
        ?>
    </div>
</div>

<div class="row m-0 p-0">
    <div class="col-12">
        <h4>Stories</h4>
    </div>
        <?php 
            // for ($i = 0; $i < 6; $i++) {
            //     echo "<div class='col-12 col-md-6 col-lg-4'>";
            //     echo "<div class='comic-wrapper'>";
            //     echo $apiCharacters->data->results[0]->stories->items[$i]->name;
            //     echo "</div>";
            //     echo "</div>";
            // }   
        ?>
    </div>
</div>

<div class="row m-0 p-0">
    <div class="col-12">
        <h4>Events</h4>
    </div>
        <?php 
            // for ($i = 0; $i < 6; $i++) {
            //     echo "<div class='col-12 col-md-6 col-lg-4'>";
            //     echo "<div class='comic-wrapper'>";
            //     echo $apiCharacters->data->results[0]->events->items[$i]->name;
            //     echo "</div>";
            //     echo "</div>";
            // }   
        ?>
    </div>
</div>

<div class="row m-0 p-0">
    <div class="col-12">
        <h4>Series</h4>
    </div>
        <?php 
            // for ($i = 0; $i < 6; $i++) {
            //     echo "<div class='col-12 col-md-6 col-lg-4'>";
            //     echo "<div class='comic-wrapper'>";
            //     echo $apiCharacters->data->results[0]->series->items[$i]->name;
            //     echo "</div>";
            //     echo "</div>";
            // }   
        ?>
    </div>
</div> -->