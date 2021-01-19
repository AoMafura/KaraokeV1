<?php include ('shared/employees-top.php') ?>
<?php include ('shared/left.php') ?>

<div class = "col-md-9 right">
    <h3 class = "mt-4 mb-3">Employees List</h3>
    <h6>Search Employee:</h6>
    <input type="text" class="form-control form-control-sm" style="max-width: 20rem;" placeholder = "Enter Cash Register ID...">
    <div class="form-group mt-3">
      <h6>Search By Branch:</h6>
      <select class="form-control form-control-sm mr-2" style = "max-width: 20rem; float: left;" id="exampleSelect1">
        <option>Branch 1</option>
        <option>Branch 2</option>
        <option>Branch 3</option>
        <option>Branch 4</option>
        <option>Branch 5</option>
        <option>Branch 6</option>
      </select>
      <button class = "btn btn-primary btn-sm">Filter</button>
      <button class = "btn btn-primary btn-sm" style="float: right;">Create New</button>
    </div>
    <center>
    <table class="table text-dark mt-4">
        <thead>
            <tr>
                <th scope="col">Lorem Ipsum</th>
                <th scope="col">Lorem Ipsum</th>
                <th scope="col">Lorem Ipsum</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-light">
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Update</a></td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Delete</a></td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Update</a></td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Delete</a></td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Update</a></td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Delete</a></td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Update</a></td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Delete</a></td>
            </tr>
            <tr class="table-light">
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4">Lorem Ipsum</td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Update</a></td>
                <td class = "p-4"><a class = "btn btn-primary btn-sm text-white" style = "max-width: 5rem;">Delete</a></td>
            </tr>
        </tbody>
    </table> 
    </center>
</div>

<?php include ('shared/footer.php') ?>