<form method="GET">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Hulk, Thor, Spider Man">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
        </div>
    </div>
</form>

<div class="row m-0 p-0">
    <div class="col-12 col-md-6">
         <?php 
            $imageUrl = $apiResult->data->results[0]->thumbnail->path . "." .  $apiResult->data->results[0]->thumbnail->extension;
            echo "<img src='$imageUrl' class='character-image'>"; 
         ?>
    </div>
    <div class="col-12 col-md-6">
        <h2><?php echo $apiResult->data->results[0]->name; ?></h2>
        <p><?php echo $apiResult->data->results[0]->description;?></p>
    </div>
</div>


<?php echo $apiResult->attributionHTML; ?>
<?php echo $apiResult->data->total; ?>
<?php echo $apiResult->data->count; ?>





