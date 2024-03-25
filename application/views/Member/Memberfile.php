<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes =  base_url();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Example Web</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
            <span class="navbar-text">
                <a href="<?= site_url('Member/logout') ?>">Logout</a>
            </span>
        </div>
    </div>
</nav>

<div class="container-md">
    <div class="row">
        <div class="col-md-4 mt-4">
            <div class="mb-3">
                <h2 for="exampleInputPassword1" class="form-label">Test Import Excel</h2>
                <input type="file" class="form-control mt-4" id="excel_file">
            </div>
        </div>
    </div>
    <div class="row">
        <form action="" method="POST" id="FrmInsert" role="form">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Import Excel</button>
                <table class="table table-bordered mt-2" id="myTable">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td scope="row"></td>
                            <td scope="row"></td>
                            <td scope="row"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
$('#excel_file').change(getDataExcel);

function getDataExcel() {
    let formData = new FormData();
    formData.append('excel_file', $('#excel_file')[0].files[0]);

    $.ajax({
        url: '<?= site_url('Member/read_excel')?>',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
            let jsonData = JSON.parse(data);
            let tableBody = "";
            count = 0;
            $.each(jsonData, function(index, value) {
                count++;
                tableBody += `<tr>
                <td>${count}</td>
                <td><input type='text' class='form-control' name='Product[]' value='${value[0]}' required></td>
                <td><input type='text' class='form-control' name='Price[]' value='${value[1]}' required></td>
                </tr>`;
            });
            $("#myTable tbody").html(tableBody);
        }
    });
}

$('#FrmInsert').submit(function(e) {
    e.preventDefault();
    FrmInsert();
});

function FrmInsert() {
    let Product = $('input[name="Product[]"]').toArray().map(e => e.value);
    let Price = $('input[name="Price[]"]').toArray().map(e => e.value);
    

    $.ajax({
        url: '<?= site_url('Member/importFiles')?>',
        type: 'POST',
        data: {
            Product: Product,
            Price: Price
        },
        success: function(data) {
            if (data == 1) {
                        swal.fire({
                            icon: 'success',
                            title: 'success',
                            type: "success"
                        }).then(function() {
                            window.location.reload();
                        });
                    } else if (data == 2) {
                        swal.fire({
                            icon: 'error',
                            title: '',
                            type: "error"
                        });
                    }
        }
    });
}
</script>