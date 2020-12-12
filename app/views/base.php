<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/d4ed0579d0.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app/static/css/style.css">
    <link rel="stylesheet" href="app/static/css/footer.css">
    <link rel="stylesheet" href="app/static/css/navigation.css">
    <title>Marvel - <?php echo $title; ?></title>
</head>

<body>

    <nav class="d-flex justify-content-between px-2">
        <div>Marvel</div>
        <ul class="container-fluid m-0 p-0 d-flex justify-content-center">
            <li><a href="?page=home">Home</a></li>
            <li><a href="?page=Character">Character</a></li>
            <li><a href="?page=Comics">Comics</a></li>
            <li><a href="?page=Stories">Stories</a></li>
            <li><a href="?page=Events">Events</a></li>
            <li><a href="?page=Series">Series</a></li>
        </ul>
        <form action="?page=character" method="GET" class="search-container">
                <button class="btn btn-outline-danger" type="submit" id="button-addon2" name="page" value="character"><i class="fas fa-search"></i></button>
                    <input type="text" name="search" placeholder="Hulk, Avengers, Vision...">
                    <select>
                        <option selected>Character</option>
                        <option value="1">Comics</option>
                        <option value="2">Stories</option>
                        <option value="3">Events</option>
                        <option value="3">Series</option>
                    </select>
</div>
        </form>
    </nav>
    
    <main>
        <?php
        include $main_content;
        ?>
    </main>

    <footer>
        <div class="row m-0 p-0">
            <div class="col-12 col-md-6 col-lg-2">
                <h6>Fordsdevelopment</h6>
                <hr>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <h6>Acknowledgement</h6>
                <hr>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <h6>Acknowledgement</h6>
                <hr>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <h6>Acknowledgement</h6>
                <hr>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <h6>Acknowledgement</h6>
                <hr>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <h6>Acknowledgement</h6>
                <hr>
            </div>
            <!-- social -->
            <div class="col-12 m-0 p-0">
                <div class="d-flex justify-content-center">
                    <a href="https://www.facebook.com/Fords-development-102522668044543/" class="m-0" target="_blank">
                        <i class="fab fa-facebook-square clickable mr-3" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/fordsdevelopment/?hl=en" class="m-0" target="_blank">
                        <i class="fab fa-instagram clickable mr-3" aria-hidden="true"></i>
                    </a>
                    <a href="mailto:fordsdevelopment@gmail.com" class="m-0" target="_blank">
                        <i class="far fa-envelope clickable mr-3" aria-hidden="true"></i>
                    </a>
                    <a href="https://github.com/Fordalex" class="m-0" target="_blank">
                        <i class="fab fa-github clickable mr-3" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>