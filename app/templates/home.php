<h1>Home Page</h1>
<p>About</p>
<div class="row m-0 p-0">
    <div class="col-12 py-3 bg-light d-flex justify-content-center">
        <form action='app/form/set_search.php' method='GET' class='search-container'>
            <button class='btn btn-outline-danger' type='submit' id='button-addon2' name='page' value='character'><i class='fas fa-search'></i></button>
            <input type='text' name='search' placeholder='Hulk, Avengers, Vision...'>
            <select>
                <option selected>Character</option>
                <option value='1'>Comics</option>
                <option value='2'>Stories</option>
                <option value='3'>Events</option>
                <option value='3'>Series</option>
            </select>
        </form>
    </div>
</div>

<?php include_once "app/includes/fd_ad.html" ?>