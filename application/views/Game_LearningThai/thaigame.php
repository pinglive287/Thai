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

.btn-start {
    width: 30vh;
    height: 30vh;
    top: 30%;
    left: 40%;
    position: absolute;
    transition: transform 0.3s ease-in-out;
    z-index: 1;
}

.btn-start:hover {
    cursor: pointer;
    transform: scale(1.1);
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

.txt-level {
    color: #fff;
    font-size: 52px;
    font-family: 'Sarabun', sans-serif;
    top: 5vh;
    left: 40%;
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
    width: 50px;
    text-align: center;
    top: 5vh;
    right: 42vh;
    position: absolute;
}

.title-container {
    position: relative;
}

.title {
    width: 120vh;
}

.title-text {
    font-size: 46px;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 90%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.choice {
    width: 55vh;
    transition: transform 0.3s ease-in-out;
    text-align: center;
    position: relative;
}

.choice:hover {
    cursor: pointer;
    transform: scale(1.03);
}

.choice-text {
    font-size: 46px;
    cursor: pointer;
    top: 45%;
    left: 50%;
    width: 500px;
    transform: translate(-50%, -50%);
    position: absolute;
}

.boat {
    width: 23vh;
    height: 13vh;
    left: 75%;  
    top: 80vh;
    position: absolute;
    z-index: -1;
    animation: moveBoat 30s linear infinite;
}

@keyframes moveBoat {
    0% { left: 75%; }
    100% { left: 0; }
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

.disabled {
    opacity: 0.5;
    pointer-events: none; 
}

#question-container {
    display: none; 
}

#question-container.show {
    display: block;
}

#question-container-start.remove {
    display: none;
}

#btn-start.remove{
    display: none;
}

</style>
<?php 
    if($this->data['Level'] == 1) {
        $Level = '๑';
    } elseif ($this->data['Level'] == 2) {
        $Level = '๒';
    } elseif ($this->data['Level'] == 3) {
        $Level = '๓';
    } elseif ($this->data['Level'] == 4) {
        $Level = '๔';
    } elseif ($this->data['Level'] == 5) {
        $Level = '๕';
    } elseif ($this->data['Level'] == 6) {
        $Level = '๖';
    }
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 d-flex">
            <img src="<?= $themes ?>assets/images/thai/page5/logo.gif" class="score-logo">
            <p class="txt-score">0/100</p>
            <p class="txt-level">ระดับที่ <?= $Level ?></p>
        </div>
        <div class="col-md-6 text-end">
            <p class="txt-clause">0/10</p>
            <p class="txt-time"></p>
            <a href="#" id="home"><img src="<?= $themes ?>assets/images/thai/page5/home.png"
                    alt="" class="btn-home"></a>
            <a href="#" onclick="window.close();"><img src="<?= $themes ?>assets/images/thai/page3/exit.png" alt=""
                    class="btn-exit"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8 text-center" id="question-container">
            
        </div>
        <div class="col-md-8 text-center" id="question-container-start" style="opacity: 0.5;">
            <div class="title-container">
                <img src="<?= $themes ?>assets/images/thai/page5/title.png" class="title">
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="title-container" id="answer1">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                    </div>
                </div>
                <div class="col">
                    <div class="title-container" id="answer2">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <div class="title-container" id="answer3">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                    </div>
                </div>
                <div class="col">
                    <div class="title-container" id="answer4">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col">
                    <img src="<?= $themes ?>assets/images/thai/page5/boat.png" class="boat">
                </div>
            </div>
        </div>
        <div class="col-md-2 text-end">
            <img src="<?= $themes ?>assets/images/thai/page5/answer.png" class="answer disabled" onclick="autoAnswer()">
            <img src="<?= $themes ?>assets/images/thai/page5/two.png" class="two-time disabled" onclick="doubleAnswer()">
            <img src="<?= $themes ?>assets/images/thai/page5/change.png" class="change disabled" onclick="changeQuestion()">
        </div>
        <audio id="correctSound">
            <source src="<?= $themes ?>assets/sounds/correct.mp3" type="audio/mpeg">
        </audio>
    </div>
    <img src="<?= $themes ?>assets/images/thai/page5/btn-start.png" class="btn-start" id="btn-start">
</div>
<script src="<?= $themes ?>assets/files/Question/questionFile.js"></script>

<script>
//-------------ข้อมูลคำถาม คำตอบ-------------//
<?php if ($this->data['Level'] == 1) :  ?>
    var questions = questions;
<?php elseif ($this->data['Level'] == 2) : ?>
    var questions = questions2;
<?php elseif ($this->data['Level'] == 3) : ?>
    var questions = questions3;
<?php elseif ($this->data['Level'] == 4) : ?>
    var questions = questions4;
<?php elseif ($this->data['Level'] == 5) : ?>
    var questions = questions5;
<?php elseif ($this->data['Level'] == 6) : ?>
    var questions = questions6;
<?php endif; ?>
//------------แสดงคำถาม คำตอบ-------------//
var randomQuestion;
var isFirstLoad = true;

$(document).ready(function() {
    document.getElementById("btn-start").addEventListener("click", function() {
        document.getElementById("question-container").classList.add("show");
        document.getElementById("question-container-start").classList.add("remove");
        document.getElementById("btn-start").classList.add("remove");
        Question();
    });
});

function Question() {
    
    if (questions.length === 0) {
        window.location.href = "<?= site_url('GameLearningThai_controller') ?>";
        return; 
    }
    
    var randomIndex = Math.floor(Math.random() * questions.length);
    randomQuestion = questions[randomIndex];
    questions.splice(randomIndex, 1);
    var questionContainer = document.getElementById("question-container");
    var html = `
        <div class="title-container">
            <img src="<?= $themes ?>assets/images/thai/page5/title.png" class="title">
            <div class="title-text">${randomQuestion.Title}</div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="title-container">
                    <span class="answercheck" id="answer1" onclick="playCorrectSound(1, ${randomQuestion.correct})">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                        <div class="choice-text">${randomQuestion.choice1}</div>
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="title-container">
                    <span class="answercheck" id="answer2" onclick="playCorrectSound(2, ${randomQuestion.correct})">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                        <div class="choice-text">${randomQuestion.choice2}</div>
                    </span>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="title-container">
                    <span class="answercheck" id="answer3" onclick="playCorrectSound(3, ${randomQuestion.correct})">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                        <div class="choice-text">${randomQuestion.choice3}</div>
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="title-container">
                    <span class="answercheck" id="answer4" onclick="playCorrectSound(4, ${randomQuestion.correct})">
                        <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                        <div class="choice-text">${randomQuestion.choice4}</div>
                    </span>
                </div>
            </div>
        </div>
    `;
    

    startCountdown();

    document.querySelector(".boat").style.animation = "none";  
    document.querySelector(".boat").offsetHeight; 
    document.querySelector(".boat").style.animation = "moveBoat 30s linear infinite"; 
    
    if (isFirstLoad) {
        var clauseElement = document.querySelector(".txt-clause");
        var currentClause = parseInt(clauseElement.innerText.split('/')[0]);
        var clause = currentClause + 1;
        if (clause > 10) {
            var scoreElement = document.querySelector(".txt-score");
            var currentScore = parseInt(scoreElement.innerText.split('/')[0]);
            var urlParams = new URLSearchParams(window.location.search);
            var No = urlParams.get('No');
            var url = "<?= site_url('GameLearningThai_controller/Score_summary/') ?>" + No + "?score=" + currentScore;
            window.location.href = url;
        } else {
            clauseElement.innerText = clause + "/10";
            questionContainer.innerHTML = html;
        }
    }
}


//------------เช็คข้อถูก ข้อผิด-------------//
var allowMultipleAnswers = false;
var answerCount = 0;

function playCorrectSound(answer, correct) {
    var correctAnswer = document.getElementById("answer" + answer);
    var scoreElement = document.querySelector(".txt-score");
  
    if (answer === correct) {
        var audio = new Audio("<?= $themes ?>assets/sounds/correct.mp3");
        audio.play();

        correctAnswer.innerHTML = `
            <img src="<?= $themes ?>assets/images/thai/page5/correct.png" class="choice">
            <div class="choice-text text-light">${randomQuestion['choice' + correct]}</div>
        `;

        var currentScore = parseInt(scoreElement.innerText.split('/')[0]);
        var newScore = currentScore + 10;
        scoreElement.innerText = newScore + "/100";
        
    } else {
        var audio = new Audio("<?= $themes ?>assets/sounds/wrong.mp3");
        audio.play();

        correctAnswer.innerHTML = `
            <img src="<?= $themes ?>assets/images/thai/page5/wrong.png" class="choice">
            <div class="choice-text text-light">${randomQuestion['choice' + answer]}</div>
        `;
    }
    
    
    if (newScore >= 10 && autoAnswerClicked === false) {
        var answerButton = document.querySelector(".answer");
        answerButton.classList.remove("disabled");
    }

    if (newScore >= 5 && doubleClicked === false) {
        var twoTimeButton = document.querySelector(".two-time");
        twoTimeButton.classList.remove("disabled");
    }

    if (newScore >= 5 && changeClicked === false) {
        var changeButton = document.querySelector(".change");
        changeButton.classList.remove("disabled");
    }

    answerCount++;
    if (allowMultipleAnswers && answerCount < 2) {
        if (answerCount === 1 && answer === correct) {
            var answers = document.querySelectorAll(".answercheck");
            answers.forEach(function(answerElement) {
                answerElement.onclick = null;
            });
                setTimeout(function() {
                allowMultipleAnswers = false;
                isFirstLoad = true;
                Question();
            }, 1500);
        }
       
    } else {
        var answers = document.querySelectorAll(".answercheck");
        answers.forEach(function(answerElement) {
            answerElement.onclick = null;
        });
        setTimeout(function() {
            answerCount = 0;
            isFirstLoad = true;
            allowMultipleAnswers = false;
            Question();
        }, 1500);
    }
    clearInterval(countdownInterval);
}

//------------เฉลย-------------//
var autoAnswerClicked = false;
function autoAnswer() {
    if (!autoAnswerClicked) {
        var correctAnswerIndex = randomQuestion.correct;
        playCorrectSound(correctAnswerIndex, correctAnswerIndex);
        
        var scoreElement = document.querySelector(".txt-score");
        var currentScore = parseInt(scoreElement.innerText.split('/')[0]);
        var newScore = currentScore - 10;
        scoreElement.innerText = newScore + "/100";

        autoAnswerClicked = true;
        
        var answerButton = document.querySelector(".answer");
        answerButton.classList.add("disabled");
    }
}

//------------ตอบได้ 2 ข้อ-------------//
var doubleClicked = false;
function doubleAnswer() {
    if (!doubleClicked) {
        allowMultipleAnswers = true;
        var scoreElement = document.querySelector(".txt-score");
        var currentScore = parseInt(scoreElement.innerText.split('/')[0]);
        var newScore = currentScore - 5;
        scoreElement.innerText = newScore + "/100";

        doubleClicked = true;

        var twoTimeButton = document.querySelector(".two-time");
        twoTimeButton.classList.add("disabled");
    } 
}

//------------เปลี่ยนคำถาม-------------//
var changeClicked = false;
function changeQuestion() {
    if (!changeClicked) {
        Question();
        var scoreElement = document.querySelector(".txt-score");
        var currentScore = parseInt(scoreElement.innerText.split('/')[0]);
        var newScore = currentScore - 5;
        scoreElement.innerText = newScore + "/100";
        changeClicked = true;
        allowMultipleAnswers = false;
        var changeButton = document.querySelector(".change");
        changeButton.classList.add("disabled");
    }
}

//------------นับเวลา-------------//
var timeElement = document.querySelector('.txt-time');
var timeLeft = parseInt(timeElement.innerText);
var countdownInterval;

function startCountdown() {
    clearInterval(countdownInterval);
    timeLeft = 30;
    timeElement.innerText = timeLeft;
    countdownInterval = setInterval(function() {
        timeLeft--;
        timeElement.innerText = timeLeft;

        if (timeLeft < 0) {
            clearInterval(countdownInterval);
            Question(); 
            startCountdown(); 
        }
    }, 1000);
}

function goToSummary() {
    var url = "<?= site_url('GameLearningThai_controller/Score_summary/') ?>" + No + "?score=" + currentScore;
     window.location.href = url;
}

document.getElementById('home').addEventListener('click', function(event) {
    var urlParams = new URLSearchParams(window.location.search);
    var No = urlParams.get('No');
    var url = "<?= site_url('GameLearningThai_controller/Level?No=') ?>" + No;
    window.location.href = url;
});
</script>