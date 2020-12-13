<!-- Character information -->
<div class="row justify-content-center px-0 mx-0 bg-light character-info-container">
    <div class="col-12 col-md-6 col-lg-5">
        <?php
        $imageUrl = $apiCharacters->data->results[0]->thumbnail->path . "." .  $apiCharacters->data->results[0]->thumbnail->extension;
        echo "<img src='$imageUrl' class='character-image'>";
        ?>
    </div>
    <div class="col-12 col-md-6 col-lg-5 d-flex justify-content-center flex-column bg-white">
        <h5 class="secondary-color mt-3">Character</h5>
        <h1><?php echo $apiCharacters->data->results[0]->name; ?></h1>
        <p class="mb-5"><?php echo $apiCharacters->data->results[0]->description; ?></p>
        <small class="text-center text-bottom"><?php echo $apiCharacters->attributionHTML; ?></small>
    </div>

</div>

<!-- Character Stats -->

<div class="row my-4 py-4 px-0 mx-0">
    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center m-0 p-0">
        <div>
            <img src="https://img.icons8.com/color/60/000000/comic-book.png" />
            <p class="text-center m-0"><b class="number" id="comic-number"></b></p>
            <p class="text-center stats-title">Comics</p>
        </div>
    </div>
    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center  m-0 p-0">
        <div>
            <img src="https://img.icons8.com/color/60/000000/physics-book.png" />
            <p class="text-center m-0"><b class="number" id="stories-number"></b></p>
            <p class="text-center stats-title">Stories</p>
        </div>
    </div>
    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center  m-0 p-0">
        <div>
            <img src="https://img.icons8.com/color/60/000000/red-carpet.png" />
            <p class="text-center m-0"><b class="number" id="events-number"></b></p>
            <p class="text-center stats-title">Events</p>
        </div>
    </div>
    <div class="col-6 col-md-3 d-flex justify-content-center align-items-center m-0 p-0">
        <div>
            <img src="https://img.icons8.com/color/60/000000/tv.png" />
            <p class="text-center m-0"><b class="number" id="series-number"></b></p>
            <p class="text-center stats-title">Series</p>
        </div>
    </div>
</div>

<!-- fd ad -->
<?php include_once "app/includes/fd_ad.html" ?>

<!-- View more Comics, stories, events and series section -->

<div class="row m-0 p-0 mb-5" id="changeableBackground">
    <div class="col-12 col-md-6 col-lg-3 comic-container card-container">
        <h6 class='card-title'>Comic</h6>
        <?php
        $title = $apiComic->data->results[0]->title;
        $modified = $apiComic->data->results[0]->modified;

        echo "<h2 class='card-title'>$title</h2>";
        echo "<p class='text-secondary m-0 card-title'>Date: $modified</p>";

        echo "<button><a href='?page=Comics'>All Comics</a></button>";
        ?>
    </div>
    <div class="col-12 col-md-6 col-lg-3 stories-container card-container">
        <h6 class='card-title'>Stories</h6>
        <?php
        $title = $apiStories->data->results[0]->title;
        $modified = $apiStories->data->results[0]->modified;

        echo "<h2 class='card-title'>$title</h2>";
        echo "<p class='text-secondary m-0 card-title'>Date: $modified</p>";

        echo "<button>All Stories</button>";
        ?>
    </div>
    <div class="col-12 col-md-6 col-lg-3 events-container card-container">
        <h6 class='card-title'>Events</h6>
        <?php
        $title = $apiEvent->data->results[0]->title;
        $modified = $apiEvent->data->results[0]->modified;
        $description = $apiEvent->data->results[0]->description;

        echo "<h2 class='card-title'>$title</h2>";
        echo "<p class='text-secondary m-0 card-title'>Date: $modified</p>";

        echo "<button>All Events</button>";
        ?>
    </div>
    <div class="col-12 col-md-6 col-lg-3 series-container card-container">
        <h6 class='card-title'>Series</h6>
        <?php
        $title = $apiSeries->data->results[0]->title;
        $modified = $apiSeries->data->results[0]->modified;
        $description = $apiSeries->data->results[0]->description;

        echo "<h2 class='card-title'>$title</h2>";
        echo "<p class='text-secondary m-0 card-title'>Date: $modified</p>";

        echo "<button>All Series</button>";
        ?>
    </div>
</div>



<script>
    // Increment the stats section until they reach their total.
    const comicApiValue = <?php echo $apiCharacters->data->results[0]->comics->available; ?>;
    const storiesApiValue = <?php echo $apiCharacters->data->results[0]->stories->available; ?>;
    const eventsApiValue = <?php echo $apiCharacters->data->results[0]->events->available; ?>;
    const seriesApiValue = <?php echo $apiCharacters->data->results[0]->series->available; ?>;
    var comic = 0;
    var stories = 0;
    var events = 0;
    var series = 0;
    var loop = 0;
    var loopMax = 400;

    function incrementStatValue(currentValue, EndValue) {
        return currentValue += EndValue / loopMax;
    }

    function displayStatOnPage() {
        loop++;
        comic = incrementStatValue(comic, comicApiValue);
        stories = incrementStatValue(stories, storiesApiValue);
        events = incrementStatValue(events, eventsApiValue);
        series = incrementStatValue(series, seriesApiValue);

        $('#comic-number').html(Math.floor(comic));
        $('#stories-number').html(Math.floor(stories));
        $('#events-number').html(Math.floor(events));
        $('#series-number').html(Math.floor(series));

        if (loop != loopMax) {
            setTimeout(function() {

                displayStatOnPage()
            }, 0.1000)
        }
    }

    var countTriggered = false;
    window.addEventListener('scroll', function() {
        if (window.scrollY > 150 && !countTriggered) {
            countTriggered = true;
            displayStatOnPage()
        }
    });


    // Preload images
    var images = [];

    function preload() {
        for (var i = 0; i < arguments.length; i++) {
            images[i] = new Image();
            images[i].src = preload.arguments[i];
        }
    }

    //-- usage --//
    preload(
        "<?php echo $apiComic->data->results[0]->thumbnail->path . "." . $apiComic->data->results[0]->thumbnail->extension; ?>",
        "<?php echo $apiEvent->data->results[0]->thumbnail->path . "." . $apiEvent->data->results[0]->thumbnail->extension; ?>",
        "<?php echo $apiSeries->data->results[0]->thumbnail->path . "." . $apiComic->data->results[0]->thumbnail->extension; ?>"
    )


    // Changed the background image and the description on each card entity.
    $(document).ready(function() {
        <?php
        $imageUrl = $apiComic->data->results[0]->thumbnail->path . "." . $apiComic->data->results[0]->thumbnail->extension;
        $img = 'url("' . "$imageUrl" . '") center center';
        echo "$('#changeableBackground').css('background', '$img');";
        ?>
    });

    $('.comic-container').hover(function() {
        <?php
        $imageUrl = $apiComic->data->results[0]->thumbnail->path . "." . $apiComic->data->results[0]->thumbnail->extension;
        $img = 'url("' . "$imageUrl" . '") center center';
        echo "$('#changeableBackground').css('background', '$img');";
        ?>
    });

    $('.stories-container').hover(function() {

    });

    $('.events-container').hover(function() {
        <?php
        $imageUrl = $apiEvent->data->results[0]->thumbnail->path . "." .  $apiEvent->data->results[0]->thumbnail->extension;
        $img = 'url("' . "$imageUrl" . '") center center';
        echo "$('#changeableBackground').css('background', '$img');";
        ?>
    });

    $('.series-container').hover(function() {
        <?php
        $imageUrl = $apiSeries->data->results[0]->thumbnail->path . "." . $apiSeries->data->results[0]->thumbnail->extension;
        $img = 'url("' . "$imageUrl" . '") center center';
        echo "$('#changeableBackground').css('background', '$img');";
        ?>
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