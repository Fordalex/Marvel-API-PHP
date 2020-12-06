<div class="row m-0 p-3">
    <div class="col-12 col-md-6 col-lg-4">
        <form action="?page=character" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="search" placeholder="Hulk, Thor, Spider-Man">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="page" value="character">Button</button>
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

<div class="row m-0 p-0">
    <div class="col-12">
        <h4>Comics</h4>
    </div>
        <?php 
            for ($i = 0; $i < 6; $i++) {
                echo "<div class='col-12 col-md-6 col-lg-4'>";
                echo "<div class='comic-wrapper'>";
                echo $apiCharacters->data->results[0]->comics->items[$i]->name;
                echo "</div>";
                echo "</div>";
            }   
        ?>
    </div>
</div>

<div class="row m-0 p-0">
    <div class="col-12">
        <h4>Stories</h4>
    </div>
        <?php 
            for ($i = 0; $i < 6; $i++) {
                echo "<div class='col-12 col-md-6 col-lg-4'>";
                echo "<div class='comic-wrapper'>";
                echo $apiCharacters->data->results[0]->stories->items[$i]->name;
                echo "</div>";
                echo "</div>";
            }   
        ?>
    </div>
</div>

<div class="row m-0 p-0">
    <div class="col-12">
        <h4>Events</h4>
    </div>
        <?php 
            for ($i = 0; $i < 6; $i++) {
                echo "<div class='col-12 col-md-6 col-lg-4'>";
                echo "<div class='comic-wrapper'>";
                echo $apiCharacters->data->results[0]->events->items[$i]->name;
                echo "</div>";
                echo "</div>";
            }   
        ?>
    </div>
</div>

<div class="row m-0 p-0">
    <div class="col-12">
        <h4>Series</h4>
    </div>
        <?php 
            for ($i = 0; $i < 6; $i++) {
                echo "<div class='col-12 col-md-6 col-lg-4'>";
                echo "<div class='comic-wrapper'>";
                echo $apiCharacters->data->results[0]->series->items[$i]->name;
                echo "</div>";
                echo "</div>";
            }   
        ?>
    </div>
</div>