<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes = base_url();
?>

<style>
body {
    background-image: url("<?= $themes ?>assets/images/thai/page2/bg-choose.png");
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
}

.btn-close {
    margin-right: 10px;
    width: 5vw;
    height: 10vh;
    opacity: 1;
    transition: transform 0.3s ease-in-out;
}

.btn-close:hover {
    cursor: pointer;
    transform: scale(1.1);
}

.btn-home {
    width: 5vw;
    height: 10vh;
    opacity: 1;
    transition: transform 0.3s ease-in-out;
}

.btn-home:hover {
    cursor: pointer;
    transform: scale(1.1);
}

.btn-choose {
    width: 30vh;
    height: 11vh;
}

.btn-choose:hover {
    cursor: pointer;
    opacity: 0.5;
}

.btn-prev {
    width: 15vh;
    height: 8vh;
    transition: transform 0.3s ease-in-out;
}

.btn-prev:hover {
    transform: scale(1.1);
}

.btn-next {
    width: 15vh;
    height: 8vh;
    margin-left: 2vh;
    transition: transform 0.3s ease-in-out;
}

.btn-next:hover {
    transform: scale(1.1);
}
</style>

<?php if ($this->data['ID'] == 1) : ?>
<div class="container-fluid">
    <div class="row justify-content-end align-items-end">
        <div class="col-auto">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/home.png" alt="" class="btn-home">
            </a>
            <a href="#" onclick="window.close();">
                <img src="<?= $themes ?>assets/images/thai/page2/close.png" alt="" class="btn-close">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 12vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose1.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose6.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose11.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose16.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose21.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose26.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 2vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose2.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose7.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose12.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose17.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose22.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose27.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 2vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose3.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose8.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose13.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose18.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose23.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose28.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 2vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose4.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose9.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose14.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose19.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose24.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose29.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 2vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose5.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose10.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose15.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose20.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose25.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose30.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-5 text-end">
            <img src="<?= $themes ?>assets/images/thai/page2/btn-prev.png" alt="" class="btn-prev" style="opacity: 0.5;">
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5 text-start">
            <a href="<?= site_url('Learning_media_controller/Choose/2') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/btn-next.png" alt="" class="btn-next">
            </a>
        </div>
    </div>
</div>

<?php elseif ($this->data['ID'] == 2) : ?>
<div class="container-fluid">
    <div class="row justify-content-end align-items-end">
        <div class="col-auto">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/home.png" alt="" class="btn-home">
            </a>
            <a href="#" onclick="window.close();">
                <img src="<?= $themes ?>assets/images/thai/page2/close.png" alt="" class="btn-close">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 12vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose1.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose2.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose3.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose4.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose5.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose6.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 2vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose2.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose7.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose12.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose17.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose22.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose27.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 2vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose3.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose8.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose13.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose18.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose23.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose28.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 2vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose4.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose9.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose14.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose19.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose24.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose29.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-around" style="margin-top: 2vh;">
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose5.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose10.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose15.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose20.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose25.png" alt="" class="btn-choose">
            </a>
            <a href="<?= site_url('Learning_media_controller/media') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/choose/btn-choose30.png" alt="" class="btn-choose">
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-5 text-end">
            <a href="<?= site_url('Learning_media_controller/Choose/1') ?>">
                <img src="<?= $themes ?>assets/images/thai/page2/btn-prev.png" alt="" class="btn-prev">
            </a>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5 text-start">
            <img src="<?= $themes ?>assets/images/thai/page2/btn-next.png" alt="" class="btn-next" style="opacity: 0.5;">
        </div>
    </div>
</div>
<?php endif; ?>
