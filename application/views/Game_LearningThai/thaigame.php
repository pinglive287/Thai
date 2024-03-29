<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes = base_url();
?>

<style>
body {
    font-family: 'Sarabun', sans-serif;
    background-image: url("<?= $themes ?>assets/images/thai/page5/bg-game.png");
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
}

.btn-exit {
    margin-top: 5vh;
    margin-right: 8vh;
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

.score-logo {
    width: 35vh;
    margin-left: 3vh;
}

.txt-score {
    color: #fff;
    font-size: 36px;
    font-family: 'Sarabun', sans-serif;
    margin: 7vh 0 0 29vh;
    position: absolute;
}

.txt-clause {
    color: #fff;
    font-size: 36px;
    font-family: 'Sarabun', sans-serif;
    margin: 7vh 0 0 31vh;
    position: absolute;
}

.txt-time {
    color: #32a852;
    font-size: 50px;
    font-weight: bold;
    font-family: 'Sarabun', sans-serif;
    margin: 5vh 0 0 53vh;
    position: absolute;
}

.title-container {
    position: relative;
}

.title {
    width: 120vh;
}

.title-text {
    font-size: 78px;
    font-weight: bold;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.choice {
    width: 59vh;
    transition: transform 0.3s ease-in-out;
}

.choice:hover {
    cursor: pointer;
    transform: scale(1.03);
}

.choice-text {
    font-size: 78px;
    font-weight: bold;
    position: absolute;
    top: 50%;
    left: 63%;
    transform: translate(-40%, -60%);
    text-align: center;
}

.choice-text2 {
    font-size: 78px;
    font-weight: bold;
    position: absolute;
    top: 50%;
    left: 35%;
    transform: translate(-40%, -60%);
    text-align: center;
}

.boat {
    width: 200vh;
    height: 25vh;
    left: 0;
    top: 75vh;
    position: absolute;
    z-index: -1;
}

.bg-opacity {
    top: 0;
    right: 0;
    width: 300px;
    height: 100vh;
    position: absolute;
    z-index: -1;
}

.answer {
    width: 20vh;
    transition: transform 0.3s ease-in-out;
}

.answer:hover {
    cursor: pointer;
    transform: scale(1.1);
}

.two-time {
    width: 20vh;
    transition: transform 0.3s ease-in-out;
}

.two-time:hover {
    cursor: pointer;
    transform: scale(1.1);
}

.change {
    width: 20vh;
    transition: transform 0.3s ease-in-out;
}

.change:hover {
    cursor: pointer;
    transform: scale(1.1);
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 d-flex">
            <img src="<?= $themes ?>assets/images/thai/page5/logo.gif" class="score-logo">
            <p class="txt-score">10/100</p>
        </div>
        <div class="col-md-6 text-end">
            <p class="txt-clause">1/10</p>
            <p class="txt-time">30</p>
            <a href="<?= site_url('Game_controller') ?>"><img src="<?= $themes ?>assets/images/thai/page5/home.png" alt="" class="btn-home"></a>
            <a href="#" onclick="window.close();"><img src="<?= $themes ?>assets/images/thai/page3/exit.png" alt="" class="btn-exit"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 text-center">
            <div class="title-container">
                <img src="<?= $themes ?>assets/images/thai/page5/title.png" class="title">
                <div class="title-text">ก + แ - ะ = ?</div>
            </div>
            <div class="row mt-4">
                <div class="col text-end">
                    <div class="title-container">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                        <div class="choice-text">แก</div>
                    </div>
                </div>
                <div class="col text-start">
                    <div class="title-container">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                        <div class="choice-text2">เกะ</div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col text-end">
                    <div class="title-container">
                        <img src="<?= $themes ?>assets/images/thai/page5/correct.png" class="choice">
                        <div class="choice-text text-light">แกะ</div>
                    </div>
                </div>
                <div class="col text-start">
                    <div class="title-container">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                        <div class="choice-text2">เก</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="<?= $themes ?>assets/images/thai/page5/boat.gif" class="boat">
                </div>
            </div>
        </div>
        <div class="col-md-2 text-end">
            <img src="<?= $themes ?>assets/images/thai/page5/bg-opacity.png" class="bg-opacity">
            <img src="<?= $themes ?>assets/images/thai/page5/answer.png" class="answer">
            <img src="<?= $themes ?>assets/images/thai/page5/two.png" class="two-time">
            <img src="<?= $themes ?>assets/images/thai/page5/change.png" class="change">
        </div>
    </div>
</div>
