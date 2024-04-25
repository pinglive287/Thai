<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes = base_url();
?>

<style>
body {
    font-family: 'Sarabun', sans-serif;
    background-image: url("<?= $themes ?>assets/images/thai/page5/bg-score.png");
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
}

.btn-exit {
    margin-top: 5vh;
    margin-right: 5vh;
    width: 5vh;
    height: 5vh;
    transition: transform 0.3s ease-in-out;
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

.score {
    font-size: 12rem;
    color: #000;
    font-family: 'niramit', sans-serif;
    margin-top: 20vh;
    margin-left: 70vh;
}

</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 text-end">
            <a href="<?= site_url('GameLearningThai_controller/Level') ?>"><img src="<?= $themes ?>assets/images/thai/page5/home.png"alt="" class="btn-home"></a>
            <a href="#" onclick="window.close();"><img src="<?= $themes ?>assets/images/thai/page3/exit.png" alt="" class="btn-exit"></a>
        </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center ">
            <span class="score" id="scoreValue"></span>
        </div>
    </div>
    
</div>

<script>
    function convertToThaiNumber(number) {
        const thaiNumbers = ['๐', '๑', '๒', '๓', '๔', '๕', '๖', '๗', '๘', '๙'];
        return String(number).replace(/\d/g, (match) => thaiNumbers[parseInt(match)]);
    }

    var urlParams = new URLSearchParams(window.location.search);
    var score = urlParams.get('score');
    var thaiScore = convertToThaiNumber(score);

    document.getElementById('scoreValue').innerText = thaiScore + " คะแนน";
</script>


