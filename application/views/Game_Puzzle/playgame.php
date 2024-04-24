<?php
defined('BASEPATH') or exit('No direct script access allowed');
$themes = base_url();
?>

<style>
body {
    font-family: 'promptlight', sans-serif;
    background-image: url("<?= $themes ?>assets/images/thai/page6/playgame/bg-play.png");
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
}

.frame-title {
    display: flex;
    justify-content: center;
    align-items: flex-end;
    margin-left: 20vh;
    margin-right: 1vh;
    height: 15vh;
    text-align: center;
}

.frame-answer {
    margin-top: 3vh;
    margin-left: 21vh;
    margin-right: 1vh;
    height: 15vh;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}

.answer {
    width: 10vh;
    border-bottom: 2px #000 solid;
    margin: 0 1vh;
}

.frame-time {
    display: flex;
    justify-content: flex-end;
    align-items: flex-end;
    height: 15vh;
    margin-right: 3.5vh;
}

.time {
    font-size: 48px;
    font-weight: bold;
    font-family: 'promptlight', sans-serif;
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

.dragon-hero {
    width: 38vh;
    margin-top: 2vh;
    margin-left: 5vh;
}

.boy-hero {
    width: 20vh;
    margin-top: 14vh;
    margin-left: 6vh;
}

.girl-hero {
    width: 21vh;
    margin-top: 17vh;
    margin-left: 5vh;
}

.dragon-heart {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    height: 220px;
    margin-top: 4vh;
}

.dragon-heart img {
    margin-bottom: 40px;
}

.dragon-score {
    font-size: 36px;
    font-weight: bold;
    color: #ffff;
    font-family: 'promptlight', sans-serif;
    position: absolute;
    margin-top: 5vh;
    margin-left: 70px;
}

.hero-score {
    font-size: 36px;
    font-weight: bold;
    color: #ffff;
    font-family: 'promptlight', sans-serif;
    position: absolute;
    margin-top: 5vh;
    margin-left: 200px;
}

.hero-heart {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    height: 200px;
    margin-top: 4vh;
    margin-left: 3vh;
}

.hero-heart img {
    margin-bottom: 40px;
}

.frame-word {
    display: flex;
    flex-wrap: wrap;
}

.btn-word {
    font-size: 36px;
    font-weight: bold;
    font-family: 'Sarabun', sans-serif;
    margin-right: 3vh;
    margin-bottom: 2vh;
    cursor: pointer;
    flex: 1;
    max-width: calc(100% / 10 - 3vh); 
    transition: transform 0.3s ease-in-out;
}

.btn-word:hover {
    cursor: pointer;
    transform: scale(1.5);
}

.btn-sara {
    font-size: 36px;
    font-weight: bold;
    font-family: 'Sarabun', sans-serif;
    margin-left: 5vh;
    margin-bottom: 1vh;
    flex: 1;
    max-width: calc(100% / 10 - 3vh);  
    transition: transform 0.3s ease-in-out;
}

.btn-sara:hover {
    cursor: pointer;
    transform: scale(1.5);
}

.btn-sara:active {
    border: none; 
}


</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div class="row">
                <div class="col">
                    <div class="frame-title">
                        <h1 style="font-family: niramit; font-size: 48px;" id="questionTitle"></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="frame-answer">
                        <span class="answer"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <div class="frame-time">
                        <h1 class="time">180</h1>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-end">
                        <a href="<?= site_url('GamePuzzle_controller') ?>"><img
                                src="<?= $themes ?>assets/images/thai/page6/choicerole/home.png" alt=""
                                class="btn-home"></a>
                        <a href="#" onclick="window.close();"><img
                                src="<?= $themes ?>assets/images/thai/page6/choicerole/exit.png" alt=""
                                class="btn-exit"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="row">
                        <div class="col-4">
                            <div class="row">
                                <div class="col-7"></div>
                                <div class="col-3" style="padding-left: 7px;">
                                    <div class="dragon-heart">
                                        <?php
                                            $total_images = 5; 

                                            for ($i = 1; $i <= $total_images; $i++) {
                                                echo '<img src="' . $themes . 'assets/images/thai/page6/playgame/red-heart.png" alt="" width="20vh">';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="dragon-heart">
                                        <?php
                                            $total_images = 5; 

                                            for ($i = 1; $i <= $total_images; $i++) {
                                                echo '<img src="' . $themes . 'assets/images/thai/page6/playgame/red-heart.png" alt="" width="20vh">';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                        <h2 class="dragon-score">1</h2>
                            <img src="<?= $themes ?>assets/images/thai/page6/playgame/dragon.gif" alt=""
                                class="dragon-hero">
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <h2 class="hero-score">3</h2>
                    <div class="row">
                        <div class="col">
                            <div class="text-start">
                                <?php if ($this->data['Role'] == 1): ?>
                                <img src="<?= $themes ?>assets/images/thai/page6/playgame/boy.gif" alt="" class="boy-hero">
                                <?php else: ?>
                                <img src="<?= $themes ?>assets/images/thai/page6/playgame/girl.gif" alt="" class="girl-hero">
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-5">
                                    <div class="hero-heart">
                                        <?php
                                            $total_images = 5; 

                                            for ($i = 1; $i <= $total_images; $i++) {
                                                echo '<img src="' . $themes . 'assets/images/thai/page6/playgame/gray-heart.png" alt="" width="20vh">';
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="hero-heart" style="margin-left: 0;">
                                        <?php
                                            $total_images = 5; 

                                            for ($i = 1; $i <= $total_images; $i++) {
                                                echo '<img src="' . $themes . 'assets/images/thai/page6/playgame/red-heart.png" alt="" width="20vh">';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-5">
            <div class="row" style="margin-top: 17vh; border-right: 5px solid #ff0000;">
                <div class="col frame-word">
                    <span class="btn-word">ก</span>
                    <span class="btn-word">ข</span>
                    <span class="btn-word">ฃ</span>
                    <span class="btn-word">ค</span>
                    <span class="btn-word">ฅ</span>
                    <span class="btn-word">ฆ</span>
                    <span class="btn-word">ง</span>
                    <span class="btn-word">จ</span>
                    <span class="btn-word">ฉ</span>
                    <span class="btn-word">ช</span>
                    <span class="btn-word">ซ</span>
                    <span class="btn-word">ฌ</span>
                    <span class="btn-word">ญ</span>
                    <span class="btn-word">ฎ</span>
                    <span class="btn-word">ฏ</span>
                    <span class="btn-word">ฐ</span>
                    <span class="btn-word">ฑ</span>
                    <span class="btn-word">ฒ</span>
                    <span class="btn-word">ณ</span>
                    <span class="btn-word">ด</span>
                    <span class="btn-word">ต</span>
                    <span class="btn-word">ถ</span>
                    <span class="btn-word">ท</span>
                    <span class="btn-word">ธ</span>
                    <span class="btn-word">น</span>
                    <span class="btn-word">บ</span>
                    <span class="btn-word">ป</span>
                    <span class="btn-word">ผ</span>
                    <span class="btn-word">ฝ</span>
                    <span class="btn-word">พ</span>
                    <span class="btn-word">ฟ</span>
                    <span class="btn-word">ภ</span>
                    <span class="btn-word">ม</span>
                    <span class="btn-word">ย</span>
                    <span class="btn-word">ร</span>
                    <span class="btn-word">ล</span>
                    <span class="btn-word">ว</span>
                    <span class="btn-word">ศ</span>
                    <span class="btn-word">ษ</span>
                    <span class="btn-word">ส</span>
                    <span class="btn-word">ห</span>
                    <span class="btn-word">ฬ</span>
                    <span class="btn-word">อ</span>
                    <span class="btn-word">ฮ</span>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row" style="margin-top: 17vh; margin-right: 3vh;">
                <div class="col frame-word">
                    <span class="btn btn-sara">่</span>
                    <span class="btn btn-sara">้</span>
                    <span class="btn btn-sara">๊</span>
                    <span class="btn btn-sara">๋</span>
                    <span class="btn btn-sara">็</span>
                    <span class="btn btn-sara">์</span>
                    <span class="btn btn-sara">ั</span>
                    <span class="btn btn-sara">ิ</span>
                    <span class="btn btn-sara">ี</span>
                    <span class="btn btn-sara">ึ</span>
                    <span class="btn btn-sara">ื</span>
                    <span class="btn btn-sara">ุ</span>
                    <span class="btn btn-sara">ู</span>
                    <span class="btn btn-sara">เ</span>
                    <span class="btn btn-sara">แ</span>
                    <span class="btn btn-sara">โ</span>
                    <span class="btn btn-sara">ใ</span>
                    <span class="btn btn-sara">ไ</span>
                    <span class="btn btn-sara">ะ</span>
                    <span class="btn btn-sara">า</span>
                    <span class="btn btn-sara">อ</span>
                    <span class="btn btn-sara">ำ</span>
                    <span class="btn btn-sara">ฤ</span>
                    <span class="btn btn-sara">ฦ</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= $themes ?>assets/files/Question/PuzzleQuiz.js"></script>

<script>
$(document).ready(function() {
    Question();
});

function Question() {
    var randomIndex = Math.floor(Math.random() * questions.length);
    var selectedQuestion = questions[randomIndex];

    var questionTitleElement = document.getElementById('questionTitle');
    questionTitleElement.innerHTML = selectedQuestion.Title;

    var correctAnswer = selectedQuestion.correct;
    var hiddenAnswer = '';
    for (var i = 0; i < correctAnswer.length; i++) {
        if (correctAnswer[i] === ' ') {
            hiddenAnswer += ' '; 
        } else {
            hiddenAnswer += '<span class="answer"></span>'; 
        }
    }

    document.querySelector('.frame-answer').innerHTML = hiddenAnswer;
}

</script>