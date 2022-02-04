<?php require "view/_partials/head.view.php";?>
<div class="mt-5">
    <h2 class="text-center text-success">Company List</h2>
    <table class="table table-bordered table-striped table-responsive text-center">
        <tr>
            <th>Company name</th>
            <th>Company Id</th>
            <th>PVM Code</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Activity</th>
            <th>Manager</th>
            <th>Delete/Update</th>
        </tr>
        <?php foreach($Company->listCompany() as $data): ?>
            <tr>
                <td><?=$data['title'];?></td>
                <td><?=$data['code'];?></td>
                <td><?=$data['pvm_code'];?></td>
                <td><?=$data['address'];?></td>
                <td><?=$data['phone'];?></td>
                <td><?=$data['email'];?></td>
                <td><?=$data['activity'];?></td>
                <td><?=$data['manager'];?></td>
                <td><a class="text-decoration-none text-danger" href="/deleteCompany/id/<?=$data['code'];?>">Delete</a>/<a class="text-decoration-none text-success" href="/updateCompany">Update</a></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>
<div class="d-flex justify-content-center mt-3">
    <a class="btn btn-success w-25" href="/">Go back</a>
</div>
<?php require "view/_partials/htmlEnd.php";?>