<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes =  base_url();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar w/ text</a>
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
                <a href="<?= site_url('Admin/logout') ?>">Logout</a>
            </span>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col mt-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal"
                data-bs-whatever="@mdo">Modal</button>
            <div class="row mt-2">
                <div class="col-md-3">
                    <select class="form-select" id='userData'>
                        <option value="">-- Selected --</option>
                        <?php 
                                      foreach($UserData as $row){
                                      ?>
                        <option value="<?= $row->ID ?>"><?= $row->Firstname ?> <?= $row->Lastname ?>
                        </option>';
                        <?php
                                      }
                                      ?>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" id="searchTable" placeholder="ค้นหาข้อมูล">
                </div>
            </div>
            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Add Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST" id="FrmInsert" role="form">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="Product" aria-describedby="emailHelp"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Price <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="Price" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Images 1 <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="Image1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Images 2</label>
                                    <input type="file" class="form-control" id="Image2">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Images 3</label>
                                    <input type="file" class="form-control" id="Image3">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Images 4</label>
                                    <input type="file" class="form-control" id="Image4">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Images 5</label>
                                    <input type="file" class="form-control" id="Image5">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered mt-2 " id="tbl_Product">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image1</th>
                        <th scope="col">Image2</th>
                        <th scope="col">Image3</th>
                        <th scope="col">Image4</th>
                        <th scope="col">Image5</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody class="text-center" id="myTable">
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    getProduct();

    $("#searchTable").on("keyup", function() {
   let value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   });
  });

});
$('#userData').change(getProduct);
function getProduct() {
    let table_body = $('#tbl_Product tbody');
    let count = 0;
     // function getproduct
     let UserID = $('#userData').val();
      

    $.ajax({
        url: "<?= site_url('Admin/getProduct') ?>",
        method: "POST",
        data:{ UserID: UserID },
        dataType: 'json',
        success: function(data) {
            console.log(data)
            table_body.html('');
            count = 0;
            $.each(data, function(index, row) {
                var dateTimeString = new Date(row.CreatedAt);
                var dateString = dateTimeString.toISOString().split("T")[0];
                count++;
                let table_row = `<tr>
                        <td>${count}</td>
                        <td class="">${row.Product || ''}</td>
                        <td style="text-align: right">${row.Price || ''}</td>
                        <td class="text-center"><img src="${row.Image1 || '<?= $themes ?>image/img.png'}" width="200px" height="150px"/></td>
                        <td class="text-center"><img src="${row.Image2 || '<?= $themes ?>image/img.png'}" width="200px" height="150px"/></td>
                        <td class="text-center"><img src="${row.Image3 || '<?= $themes ?>image/img.png'}" width="200px" height="150px"/></td>
                        <td class="text-center"><img src="${row.Image4 || '<?= $themes ?>image/img.png'}" width="200px" height="150px"/></td>
                        <td class="text-center"><img src="${row.Image5 || '<?= $themes ?>image/img.png'}" width="200px" height="150px"/></td>
                        <td style="text-align: left">${row.Firstname || ''} ${row.Lastname || ''}</td>
                        <td style="text-align: center">${dateString || ''}</td>
                    </tr>`;

                table_body.append(table_row);
            });
            $('#tbcount').text(`จำนวนข้อมูลทั้งหมด ${count} ชุด`);
        }
    });
}


</script>