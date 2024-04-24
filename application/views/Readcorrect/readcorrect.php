<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes =  base_url();
?>

<style>
body {
    background-image: url("<?= $themes ?>assets/images/thai/page3/bg.png");
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
}

.img-hover-effect {
    transition: transform 0.3s ease-in-out;
}

.img-hover-effect:hover {
    cursor: pointer;
    transform: scale(1.1);
}

.top-150 {
    margin-top: 150px;
}

.top-100 {
    margin-top: 100px;
}

.top-50 {
    margin-top: 50px;
}

.btn-exit {
    width: 5vh;
    height: 5vh;
}

.btn-exam {
    width: 200px;
}

.btn-allexam {
    width: 500px;
}

@media (max-width: 768px) {
    .img-hover-effect {
        transition: transform 0.3s ease-in-out;
    }

    .img-hover-effect:hover {
        cursor: pointer;
        transform: scale(1.1);
    }

    .btn-exit {
        width: 5vh;
        height: 5vh;
    }

    .btn-exam {
        margin-top: 10vh;
        width: 10vh;
    }

    .btn-allexam {
        width: 30vh;
    }
}

@media (max-width: 430px) {
    .img-hover-effect {
        transition: transform 0.3s ease-in-out;
    }

    .img-hover-effect:hover {
        cursor: pointer;
        transform: scale(1.1);
    }

    .btn-exit {
        width: 4vh;
        height: 4vh;
    }

    .btn-exam {
        margin-top: 5vh;
        width: 6vh;
    }

    .btn-allexam {
        width: 25vh;
    }
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            <div class="row">
                <div class="col mt-3">
                    <div class="text-end">
                        <a href="#" onclick="window.close();"><img src="<?= $themes ?>assets/images/thai/page3/exit.png" class="img-hover-effect btn-exit"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-around top-150">
                    <a href="<?= site_url('Readcorrectly_controller/Exam/1') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-1.png" class="img-hover-effect btn-exam"></a>
                    <a href="<?= site_url('Readcorrectly_controller/Exam/2') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-2.png" class="img-hover-effect btn-exam"></a>
                    <a href="<?= site_url('Readcorrectly_controller/Exam/3') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-3.png" class="img-hover-effect btn-exam"></a>
                    <a href="<?= site_url('Readcorrectly_controller/Exam/4') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-4.png" class="img-hover-effect btn-exam"></a>
                    <a href="<?= site_url('Readcorrectly_controller/Exam/5') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-5.png" class="img-hover-effect btn-exam"></a>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-around top-50">
                    <a href="<?= site_url('Readcorrectly_controller/Exam/6') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-6.png" class="img-hover-effect btn-exam"></a>
                    <a href="<?= site_url('Readcorrectly_controller/Exam/7') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-7.png" class="img-hover-effect btn-exam"></a>
                    <a href="<?= site_url('Readcorrectly_controller/Exam/8') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-8.png" class="img-hover-effect btn-exam"></a>
                    <a href="<?= site_url('Readcorrectly_controller/Exam/9') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-9.png" class="img-hover-effect btn-exam"></a>
                    <a href="<?= site_url('Readcorrectly_controller/Exam/10') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-10.png" class="img-hover-effect btn-exam"></a>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center top-100">
                    <a href="<?= site_url('Readcorrectly_controller/ExamTreasury') ?>"><img src="<?= $themes ?>assets/images/thai/page3/btn-allexam.png" class="img-hover-effect btn-allexam"></a>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
</div>