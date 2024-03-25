<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes =  base_url();
?>



<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 " style="margin-top: 20%">
                <div class="card">
                    <div class="card-body ">
                        <form method="POST" id="FrmLogin" role="form">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">USERNAME</label>
                                <input type="text" class="form-control" id="LogUsername" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
                                <input type="password" class="form-control" id="LogPassword">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Register
                            </button>
                        </form>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade m-2" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="" method="POST" id="FrmRegister" role="form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="mb-3 m-2">
                                    <label for="exampleInputEmail1" class="form-label">Firstname</label>
                                    <input type="text" class="form-control" id="Firstname" aria-describedby="emailHelp"
                                        required>
                                </div>
                                <div class="mb-3 m-2">
                                    <label for="exampleInputPassword1" class="form-label">Lastname</label>
                                    <input type="text" class="form-control" id="Lastname" requireds>
                                </div>
                                <div class="mb-3 m-2">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                                        required>
                                </div>
                                <div class="mb-3 m-2">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="Password" requireds>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>

<script type="text/javascript">
$('#FrmRegister').submit(function(e) {
    e.preventDefault();
    FrmRegister();
});

function FrmRegister() {

    let firstname = $('#Firstname').val();
    let lastname = $('#Lastname').val();
    let username = $('#Username').val();
    let password = $('#Password').val();

    $.ajax({
        url: "<?= site_url('Auth/Register') ?>",
        type: "POST",
        data: {
            firstname: firstname,
            lastname: lastname,
            username: username,
            password: password
        },
        cache: false,
        success: function(dataResult) {
            if (dataResult == 'Success') {
                swal.fire({
                    icon: 'success',
                    title: 'register success',
                    type: "success"
                }).then(() => {
                    $('#staticBackdrop').modal('hide');
                });
            } else {
                swal.fire({
                    icon: 'error',
                    title: 'register error',
                    type: "error"
                });
            }
        }
    });
}

$('#FrmLogin').submit(function(e) {
    e.preventDefault();
    FrmLogin();
});

function FrmLogin() {

    let username = $('#LogUsername').val();
    let password = $('#LogPassword').val();

    $.ajax({
        url: "<?= site_url('Auth/Login') ?>",
        type: "POST",
        data: {
            username: username,
            password: password
        },
        cache: false,
        success: function(dataResult) {
            if (dataResult == 'password_wrong') {
                swal.fire({
                    icon: 'error',
                    title: 'รหัสผ่านไม่ถูกต้อง',
                    type: "error"
                });
            } else if (dataResult == 'user') {
                window.location = "<?= site_url('Member') ?>";
            } else if (dataResult == 'admin') {
                window.location = "<?= site_url('Admin') ?>";
            } else {
                swal.fire({
                    icon: 'error',
                    title: 'not found',
                    type: "error"
                });
            }
        }
    });
}
</script>