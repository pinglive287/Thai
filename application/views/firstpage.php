<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes =  base_url();
?>

<style>
    body {
        background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
    }
</style>

<div class="container">
    <div class="row mt-5 text-center">
        <div class="col">
            <a href="<?= site_url('Test_controller') ?>" class="text-decoration-none text-dark"><h3 class="fw-bold">คลังข้อสอบ</h3></a>
        </div>
        <div class="col">
            <a href="<?= site_url('Learning_media_controller') ?>" target="_blank" class="text-decoration-none text-dark"><h3 class="fw-bold">สะกดคำ</h3></a>
        </div>
        <div class="col">
            <a href="<?= site_url('Readcorrectly_controller') ?>" target="_blank" class="text-decoration-none text-dark"><h3 class="fw-bold">อ่านออก อ่านถูก</h3></a>
        </div>
        <div class="col">
            <a href="<?= site_url('Readfluently_controller') ?>" target="_blank" class="text-decoration-none text-dark"><h3 class="fw-bold">อ่านเร็ว อ่านคล่อง</h3></a>
        </div>
        <div class="col">
            <a href="<?= site_url('Game_controller') ?>" target="_blank" class="text-decoration-none text-dark"><h3 class="fw-bold">เกมรอบรู้ภาษาไทย</h3></a>
        </div>
    </div>
</div>
