<?php require "view/_partials/head.view.php";?>
<div class="container">
    <form method="post" type="submit">
        <div class="d-flex justify-content-center mt-5">
        <input class="rounded w-100" type="search" placeholder="  Input Company Name">
        <button type="submit" class="btn btn-success">Search</button>
        </div>
    </form>
    <div class="d-flex justify-content-center mt-4">
        <a type="submit" class="btn btn-success w-100" href="/addCompany">Add Company</a>
    </div>
    <?php if(!empty($Company)):?>
        <div class="d-flex justify-content-center mt-4">
            <a type="submit" class="btn btn-success w-100" href="/listCompany">List Companies</a>
        </div>
    <?php endif;?>
</div>
<?php require "view/_partials/htmlEnd.php";?>
