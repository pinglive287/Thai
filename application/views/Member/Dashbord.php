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
                <a href="<?= site_url('Member/logout') ?>">Logout</a>
            </span>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col mt-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">Modal</button>
            <a href="<?= site_url('Member/file')?>" type="button" class="btn btn-primary">Import Excel</a>
            <a href="<?= site_url('Member/export')?>" type="button" class="btn btn-warning">Export Excel</a>
            <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Add Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST" id="FrmInsert" role="form" >
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
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></td>
                        <td scope="row"></a></td>
                        <td scope="row"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    getProduct();
});

function getProduct() {
    let table_body = $('#tbl_Product tbody');
    let count = 0;

    $.ajax({
        url: "<?= site_url('Member/getProduct') ?>",
        method: "POST",
        dataType: 'json',
        success: function(data) {
            console.log(data)
            table_body.html('');
            count = 0;
            $.each(data, function(index, row) {
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
                        <td>
                            <div class="text-center">
                            <div class="text-center">
                            <button type="button" class="btn btn-warning fw-bold" data-bs-toggle="modal" data-bs-target="#editModal${count}">
                            Edit1
                            </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="editModal${count}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-left">
                            <div class="modal-body">
                            <div class="row">
                            <div class="col-md-6">
                            <label class="form-label">Product</label>
                            <input type="text" class="form-control" id="Up_product${count}" value="${row.Product || ''}" required>
                            </div>
                            <div class="col-md-6">
                            <label class="form-label">Price</label>
                            <input type="text" class="form-control" id="Up_price${count}" value="${row.Price || ''}" required>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4 mt-2">
                            <img id="previewImg1" src="${row.Image1 || '<?= $themes ?>image/img.png'}" width="200px" height="200px"/>
                            <input type="file" class="form-control mt-2" id="Up_Image1${count}" onchange="previewImage(this, 'previewImg1')">
                            </div>
                            <div class="col-md-4 mt-2">
                            <img id="previewImg2" src="${row.Image2 || '<?= $themes ?>image/img.png'}" width="200px" height="200px"/>
                            <input type="file" class="form-control mt-2" id="Up_Image2${count}" onchange="previewImage(this, 'previewImg2')">
                            </div>
                            <div class="col-md-4 mt-2">
                            <img id="previewImg3" src="${row.Image3 || '<?= $themes ?>image/img.png'}" width="200px" height="200px"/>
                            <input type="file" class="form-control mt-2" id="Up_Image3${count}" onchange="previewImage(this, 'previewImg3')">
                            </div>
                            <div class="col-md-4 mt-2">
                            <img id="previewImg4" src="${row.Image4 || '<?= $themes ?>image/img.png'}" width="200px" height="200px"/>
                            <input type="file" class="form-control mt-2" id="Up_Image4${count}" onchange="previewImage(this, 'previewImg4')">
                            </div>
                            <div class="col-md-4 mt-2">
                            <img id="previewImg5" src="${row.Image5 || '<?= $themes ?>image/img.png'}" width="200px" height="200px"/>
                            <input type="file" class="form-control mt-2" id="Up_Image5${count}" onchange="previewImage(this, 'previewImg5')">
                            </div>
                            </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary fw-bold" onclick="updateProduct(${row.ID}, ${count})">Edit</button>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                        </td>
                        <td class="text-center"><button type="button" class="btn btn-danger fw-bold" onclick="FrmDelete(${row.ID})">Delete</button></td>
                    </tr>`;

                table_body.append(table_row);
            });
            $('#tbcount').text(`จำนวนข้อมูลทั้งหมด ${count} ชุด`);
        }
    });
}

$('#FrmInsert').submit(function(e) {
    e.preventDefault();
    FrmInsert();
});

function previewImage(input, imgId) {
    let file = input.files[0];
    let reader = new FileReader();
    let previewImg = document.getElementById(imgId);

    reader.onload = function(e) {
        previewImg.src = e.target.result;
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        previewImg.src = '<?php echo $themes . 'assets/images/no_img/200x200.png'; ?>';
    }

    let fileName = input.files[0].name;
    let nextSibling = input.nextElementSibling;
    if (nextSibling) {
        nextSibling.innerText = fileName;
    }
}

function FrmInsert() {
    let Product = $('#Product').val();
    let Price = $('#Price').val();
    let Image1 = $('#Image1')[0].files[0];
    let Image2 = $('#Image2')[0].files[0];
    let Image3 = $('#Image3')[0].files[0];
    let Image4 = $('#Image4')[0].files[0];
    let Image5 = $('#Image5')[0].files[0];

    let formData = new FormData();
    formData.append('Product', Product);
    formData.append('Price', Price);
    formData.append('Image1', Image1);
    formData.append('Image2', Image2);
    formData.append('Image3', Image3);
    formData.append('Image4', Image4);
    formData.append('Image5', Image5);
    $.ajax({
        url: "<?= site_url('Member/Create') ?>",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(dataResult) {
            if (dataResult == 'Success') {
                swal.fire({
                    icon: 'success',
                    title: 'เพิ่มข้อมูลสำเร็จ',
                    type: "success"
                }).then(() => {
                    $('#modal').modal('hide');
                });
            } else {
                swal.fire({
                    icon: 'error',
                    title: 'ไม่สามารถเพิ่มข้อมูลได้',
                    type: "error"
                });
            }
        }
    });
}

function updateProduct(productID, modalCount) {
    let product = $(`#Up_product${modalCount}`).val();
    let price = $(`#Up_price${modalCount}`).val();
    let Image1 = $(`#Up_Image1${modalCount}`)[0].files[0];
    let Image2 = $(`#Up_Image2${modalCount}`)[0].files[0];
    let Image3 = $(`#Up_Image3${modalCount}`)[0].files[0];
    let Image4 = $(`#Up_Image4${modalCount}`)[0].files[0];
    let Image5 = $(`#Up_Image5${modalCount}`)[0].files[0];
    console.log(Image1); console.log(Image2); console.log(Image3);
    let formData = new FormData();
    formData.append('productID', productID);
    formData.append('product', product);
    formData.append('price', price);
    formData.append('Image1', Image1);
    formData.append('Image2', Image2);
    formData.append('Image3', Image3);
    formData.append('Image4', Image4);
    formData.append('Image5', Image5);


    $.ajax({
        url: "<?= site_url('Member/Update') ?>",
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response == 1) {
                console.log(response)
                getProduct();
                $(`#editModal${modalCount}`).modal('hide');
                swal.fire({
                    icon: 'success',
                    title: 'แก้ไขข้อมูลสำเร็จ',
                    type: "success"
                }).then(function() {
                    window.location.reload();
                });
            } else if (response == 2) {
                swal.fire({
                    icon: 'error',
                    title: 'ไม่สามารถลบข้อมูลได้',
                    type: "error"
                });
            }
        }
    });
}

function FrmDelete(ID) {
    swal.fire({
        title: 'ท่านต้องการลบรายการที่เลือกหรือไม่ ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#1c67bd',
        cancelButtonColor: '#d33',
        confirmButtonText: 'ตกลง',
        cancelButtonText: 'ยกเลิก',
        customClass: {
            confirmButton: 'btn-confirm',
            cancelButton: 'btn-cancel'
        }
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: "<?= site_url('Member/Delete') ?>",
                type: 'POST',
                data: {
                    id: ID
                },
                success: function(dataResult) {
                    if (dataResult == 1) {
                        swal.fire({
                            icon: 'success',
                            title: 'ลขข้อมูลสำเร็จ',
                            type: "success"
                        }).then(function() {
                            window.location.reload();
                        });
                    } else if (dataResult == 2) {
                        swal.fire({
                            icon: 'error',
                            title: 'ไม่สามารถลบข้อมูลได้',
                            type: "error"
                        });
                    }
                }
            });
        }
    })
}
</script>