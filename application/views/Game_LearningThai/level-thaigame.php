<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes = base_url();
?>

<style>
body {
    font-family: 'Sarabun', sans-serif;
    background-image: url("<?= $themes ?>assets/images/thai/page5/bg-page.png");
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
}

.score-stat {
    width: 40vh;
    margin: 4vh 0 0 10vh;
    transition: transform 0.3s ease-in-out;
}

.score-stat:hover {
    cursor: pointer;
    transform: scale(1.05);
}

.btn-exit {
    margin-top: 5vh;
    margin-right: 5vh;
    width: 5vh;
    height: 5vh;
    transition: transform 0.3s ease-in-out;
}

.btn-exit:hover {
    cursor: pointer;
    transform: scale(1.1);
}

.btn-home {
    margin-top: 5vh;
    margin-right: 30px;
    width: 6vh;
    height: 5vh;
    transition: transform 0.3s ease-in-out;
}

.btn-home:hover {
    cursor: pointer;
    transform: scale(1.1);
}

.choice {
    display: flex;
    align-items: center;
    border-radius: 80px;
    padding: 10px 20px;
    width: 40vh;
    justify-content: center; 
    border: 1px solid;
}

.choice:hover {
    cursor: pointer;
    color: #ffff;
    background-color: #32a852;
}

.choice span {
    text-decoration: none;
    font-size: 60px;
    font-weight: bold;
    padding-left: 20px;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img src="<?= $themes ?>assets/images/thai/page5/stat.png" class="score-stat">
        </div>
        <div class="col-md-6 text-end">
            <a href="#" onclick="window.close();"><img src="<?= $themes ?>assets/images/thai/page3/exit.png" alt="" class="btn-exit"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 d-flex justify-content-around" style="margin-top: 35vh">
            <a href="<?= site_url('GameLearningThai_controller/rules/1') ?>" style="text-decoration: none; color: #8c6239;">
                <div class="choice active">
                    <img src="<?= $themes ?>assets/images/thai/page5/bullet.png" width="70vh">
                    <span >ระดับ 1</span>
                </div>
            </a>
            <a href="<?= site_url('GameLearningThai_controller/rules/2') ?>" style="text-decoration: none; color: #8c6239;">
                <div class="choice">
                    <img src="<?= $themes ?>assets/images/thai/page5/bullet.png" width="70vh">
                    <span >ระดับ 2</span>
                </div>
            </a>
            <a href="<?= site_url('GameLearningThai_controller/rules/3') ?>" style="text-decoration: none; color: #8c6239;">
                <div class="choice">
                    <img src="<?= $themes ?>assets/images/thai/page5/bullet.png" width="70vh">
                    <span >ระดับ 3</span>
                </div>
            </a>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 d-flex justify-content-around" style="margin-top: 10vh">
            <a href="<?= site_url('GameLearningThai_controller/rules/4') ?>" style="text-decoration: none; color: #8c6239;">
                <div class="choice">
                    <img src="<?= $themes ?>assets/images/thai/page5/bullet.png" width="70vh">
                    <span >ระดับ 4</span>
                </div>
            </a>
            <a href="<?= site_url('GameLearningThai_controller/rules/5') ?>" style="text-decoration: none; color: #8c6239;">
                <div class="choice">
                    <img src="<?= $themes ?>assets/images/thai/page5/bullet.png" width="70vh">
                    <span >ระดับ 5</span>
                </div>
            </a>
            <a href="<?= site_url('GameLearningThai_controller/rules/6') ?>" style="text-decoration: none; color: #8c6239;">
                <div class="choice">
                    <img src="<?= $themes ?>assets/images/thai/page5/bullet.png" width="70vh">
                    <span >ระดับ 6</span>
                </div>
            </a>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>