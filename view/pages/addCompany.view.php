<?php require "view/_partials/head.view.php";?>
<div class="container">
    <div class="d-flex justify-content-center bg-dark">
    <form class="m-5" method="post">
        <div class="row">
        <div class="form-group mb-3 col-4">
            <input type="text" class="form-control" name="title" placeholder="Company name" >
        </div>
        <div class="form-group mb-3 col-4">
            <input type="text" class="form-control" name="code" placeholder="Code/id">
        </div>
        <div class="form-group mb-3 col-4">
            <input type="text" class="form-control" name="pvm_code" placeholder="PVM Code">
        </div>
        </div>
        <div class="row">
        <div class="form-group mb-3 col-4">
            <input type="text" class="form-control" name="address" placeholder="Address">
        </div>
        <div class="form-group mb-3 col-4">
            <input type="text" class="form-control" name="phone" placeholder="Phone number">
        </div>
        <div class="form-group mb-3 col-4">
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        </div>
        <div class="row">
        <div class="form-group mb-3 col-6">
            <input type="text" class="form-control" name="activity" placeholder="Activity">
        </div>
        <div class="form-group mb-3 col-6">
            <input type="text" class="form-control" name="manager" placeholder="manager">
        </div>
        </div>
        <div class="d-flex justify-content-between">
            <a class="btn btn-warning" href="/">Return</a>
        <button type="submit" class="btn btn-success" name="save">Submit</button>
        </div>
    </form>
    </div>
</div>
<?php require "view/_partials/htmlEnd.php";?>
