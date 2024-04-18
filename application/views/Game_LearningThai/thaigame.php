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
    width: 50px;
    text-align: center;
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

.disabled {
    opacity: 0.5;
    pointer-events: none; 
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 d-flex">
            <img src="<?= $themes ?>assets/images/thai/page5/logo.gif" class="score-logo">
            <p class="txt-score">0/100</p>
        </div>
        <div class="col-md-6 text-end">
            <p class="txt-clause">0/10</p>
            <p class="txt-time"></p>
            <a href="<?= site_url('GameLearningThai_controller') ?>"><img src="<?= $themes ?>assets/images/thai/page5/home.png"
                    alt="" class="btn-home"></a>
            <a href="#" onclick="window.close();"><img src="<?= $themes ?>assets/images/thai/page3/exit.png" alt=""
                    class="btn-exit"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8 text-center" id="question-container">

        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col">
                    <img src="<?= $themes ?>assets/images/thai/page5/boat.gif" class="boat">
                </div>
            </div>
        </div>
        <div class="col-md-2 text-end">
            <img src="<?= $themes ?>assets/images/thai/page5/bg-opacity.png" class="bg-opacity">
            <img src="<?= $themes ?>assets/images/thai/page5/answer.png" class="answer disabled" onclick="autoAnswer()">
            <img src="<?= $themes ?>assets/images/thai/page5/two.png" class="two-time disabled" onclick="doubleAnswer()">
            <img src="<?= $themes ?>assets/images/thai/page5/change.png" class="change disabled" onclick="changeQuestion()">
        </div>
        <audio id="correctSound">
            <source src="<?= $themes ?>assets/sounds/correct.mp3" type="audio/mpeg">
        </audio>
    </div>
</div>
<script>
//-------------ข้อมูลคำถาม คำตอบ-------------//
<?php if ($this->data['Level'] == 1) :  ?>
    var questions = [{
            "choice1": "แก",
            "choice2": "เกะ",
            "choice3": "แกะ",
            "choice4": "เกอะ",
            "correct": "3",
            "Title": "ก + แ-ะ =?"
        },
        {
            "choice1": "นาดี",
            "choice2": "ดูปู",
            "choice3": "ปะจุ",
            "choice4": "ธุระ",
            "correct": "2",
            "Title": "ข้อใดประสมด้วยสระอู"
        },
        {
            "choice1": "ยาว",
            "choice2": "สั้น",
            "choice3": "กลาง",
            "choice4": "ไม่มีข้อใดถูก",
            "correct": "2",
            "Title": "เตะ ออกเสียงสั้นหรือเสียงยาว"
        },
        {
            "choice1": "1 คำ",
            "choice2": "2 คำ",
            "choice3": "3 คำ",
            "choice4": "4 คำ",
            "correct": "3",
            "Title": "<b>''ตามาหารูปู''</b> มีคำที่สะกดด้วยสระอากี่คำ"
        },
        {
            "choice1": "สวม",
            "choice2": "ใส่",
            "choice3": "นุ่ง",
            "choice4": "ถอด",
            "correct": "1",
            "Title": "เลือกเติมคำในช่องว่างให้ได้ใจความเหมาะสม <br><b>''น้อยหน่า.................เสื้อและกางเกงใหม่''</b>"
        },
        {
            "choice1": "สุภาพ - อ่อนน้อม",
            "choice2": "ยิ้มแย้ม - เศร้าซึม",
            "choice3": "อ่อนแอ - แข็งแกร่ง",
            "choice4": "สดใส-ซึมเศร้า",
            "correct": "1",
            "Title": "เลือกข้อที่มีความหมายคล้ายกัน"
        },
        {
            "choice1": "ปลา - แม่น้ำ",
            "choice2": "ถุงเท้า - กระเป๋า",
            "choice3": "ไข่ - แม่ไก่",
            "choice4": "ต้นไม้-กระถาง",
            "correct": "2",
            "Title": "คำคู่ใด ไม่เกี่ยวข้องกัน"
        },
        {
            "choice1": "1 คำ",
            "choice2": "2 คำ",
            "choice3": "3 คำ",
            "choice4": "4 คำ",
            "correct": "2",
            "Title": "<b>''สมชายกินข้าวมันไก่''</b> มีคำที่มี น สะกดอยู่กี่คำ"
        },
        {
            "choice1": "ข้างล่าง",
            "choice2": "วังเวง",
            "choice3": "โขลงช้าง",
            "choice4": "ข้าวแกง",
            "correct": "4",
            "Title": "ข้อใดมีตัวสะกดต่างจากพวก"
        },
        {
            "choice1": "ด้าน - ค้าน",
            "choice2": "เป้า - ป่าว",
            "choice3": "เงา - เหงา",
            "choice4": "คี่ - ขี้",
            "correct": "4",
            "Title": "ข้อใดที่อ่านออกเสียงเหมือนกัน"
        },
        {
            "choice1": "คำขวัญ",
            "choice2": "นิทาน",
            "choice3": "ปริศนาคำทาย",
            "choice4": "สุภาษิต",
            "correct": "3",
            "Title": "<b>''อะไรเอ่ย สี่ตีนเดินมาหลังคามุงกระเบื้อง''</b><br> จากข้อความจัดอยู่ในประเภทใด"
        },
        {
            "choice1": "ข้าว ฉัน กิน",
            "choice2": "ฉัน ข้าว กิน",
            "choice3": "ฉัน กิน ข้าว",
            "choice4": "ไม่มีข้อใดถูก",
            "correct": "3",
            "Title": "ข้อใดเรียงประโยคถูกต้อง <b>''กิน ข้าว ฉัน''</b>"
        },
        {
            "choice1": "โรงเรียน ฉัน ไป",
            "choice2": "ฉัน ไป โรงเรียน",
            "choice3": "ฉัน โรงเรียน ไป",
            "choice4": "ไม่มีข้อใดถูก",
            "correct": "2",
            "Title": "ข้อใดเรียงประโยคถูกต้อง <b>''โรงเรียน ฉัน ไป''</b>"
        },
        {
            "choice1": "3 คำ 1 พยางค์",
            "choice2": "3 คำ 3 พยางค์",
            "choice3": "2 คำ 3 พยางค์",
            "choice4": "1 คำ 3 พยางค์",
            "correct": "4",
            "Title": "<b>''หนังสือพิมพ์''</b> มีกี่คำ กี่พยางค์"
        },
        {
            "choice1": "แม่ไปตลาดบ่อย",
            "choice2": "แม่ไปตลาดบ่อยๆ",
            "choice3": "บ่อยๆ แม่ไปตลาด",
            "choice4": "แม่ๆ ไปตลาดบ่อย",
            "correct": "2",
            "Title": "<b>''แม่ไปตลาดบ่อยบ่อย''</b> เขียนอย่างไร"
        },
        {
            "choice1": "8 ขา",
            "choice2": "6 ขา",
            "choice3": "4 ขา",
            "choice4": "2 ขา",
            "correct": "3",
            "Title": "หมามีกี่ขา"
        },
        {
            "choice1": "อยาก อย่า ย้าย อย่าง",
            "choice2": "อย่า อยู่ ยาก อย่าง",
            "choice3": "อย่า ย่าง ยาย อยู่",
            "choice4": "อย่าง อยู่ อยาก อย่า",
            "correct": "4",
            "Title": "ข้อใดเป็นอักษร อ นำ ย ทั้งหมด"
        },
        {
            "choice1": "42 ตัว",
            "choice2": "44 ตัว",
            "choice3": "46 ตัว",
            "choice4": "48 ตัว",
            "correct": "2",
            "Title": "พยัญชนะไทยมีทั้งหมดกี่ตัว"
        },
        {
            "choice1": "พอ - ออ - ลอ - พล",
            "choice2": "พอ - ออ - นอ - พร",
            "choice3": "พอ - ออ - รอ - พอน",
            "choice4": "พอ - ออ - รอ - พร",
            "correct": "4",
            "Title": "ข้อใดอ่านถูกต้อง"
        },
        {
            "choice1": "ไบ",
            "choice2": "ใบ",
            "choice3": "โบ",
            "choice4": "บัย",
            "correct": "2",
            "Title": "<b>''มีบัวอยู่ชนิดหนึ่งที่มี......ใหญ่เท่ากระด้ง สามารถให้คนเข้าไปยืนบนนั้นได้''</b> ในช่องว่างควรเติมคำตอบใด"
        },
        {
            "choice1": "สะใภ้",
            "choice2": "ผู้ใหญ่",
            "choice3": "ดีใจ",
            "choice4": "ไหว้พระ",
            "correct": "4",
            "Title": "ข้อใดที่ไม่ได้ใช้สระเหมือนคำอื่น"
        },
        {
            "choice1": "สถานีตำรวจ",
            "choice2": "สถานีรถไฟ",
            "choice3": "สถานีอนามัย",
            "choice4": "สถานีรถประจำทาง",
            "correct": "3",
            "Title": "ข้อใดเป็นคำ 6 พยางค์"
        },
        {
            "choice1": "โ-",
            "choice2": "-า",
            "choice3": "-แ",
            "choice4": "-ะ",
            "correct": "4",
            "Title": "ข้อใดเป็นสระเสียงสั้น"
        },
        {
            "choice1": "ตามาหาอา",
            "choice2": "ตามาหาอีกา",
            "choice3": "ในนามีอีกา",
            "choice4": "อาไปหาตา",
            "correct": "1",
            "Title": "ข้อใดประสมด้วยสระ -า ทั้งหมด"
        },
        {
            "choice1": "ข้างบน",
            "choice2": "ข้างหลัง",
            "choice3": "ข้างล่าง",
            "choice4": "ข้างหน้า",
            "correct": "4",
            "Title": "สระโอ เขียนไว้ตรงไหนของพยัญชนะ"
        },
        {
            "choice1": "-อ",
            "choice2": "-า",
            "choice3": "-ะ",
            "choice4": "โ-",
            "correct": "1",
            "Title": "สระตัวใดเขียนไว้ข้างหน้าพยัญชนะ"
        },
        {
            "choice1": "เสียงสามัญ และ เสียงตรี",
            "choice2": "เสียงเอก และ เสียงโท",
            "choice3": "เสียงจัตวา และ เสียงโท",
            "choice4": "เสียงจัตวา และ เสียงตรี",
            "correct": "4",
            "Title": "คำว่า <b>''ขาวจั๊วะ''</b> มีเสียงวรรณยุกต์ใด"
        },
        {
            "choice1": "เรือใบ",
            "choice2": "เพลินใจ",
            "choice3": "ของใช้",
            "choice4": "เผื่อแผ่",
            "correct": "2",
            "Title": "ข้อใดมีคำที่ประสมด้วยสระ เ-อ และสระ ใ-"
        },
        {
            "choice1": "เรือใบ",
            "choice2": "เพลินใจ",
            "choice3": "ของใช้",
            "choice4": "เผื่อแผ่",
            "correct": "2",
            "Title": "ข้อใดมีคำที่ประสมด้วยสระ เ-อ และสระ ใ-"
        },
        {
            "choice1": "กะ - ตา",
            "choice2": "บ้าน - โต๊ะ",
            "choice3": "แก - แกะ",
            "choice4": "เตะ - แตะ",
            "correct": "4",
            "Title": "ข้อใดเป็นคำที่มีสระเสียงสั้นทั้งหมด"
        },
        {
            "choice1": "ไม้เอก เป็น ลูกบ่วย",
            "choice2": "ไม้โท เป็น ลูกบ้วย",
            "choice3": "ไม้ตรี เป็น ลูกบ๊วย",
            "choice4": "ไม้จัตวา เป็น ลูกบ๋วย",
            "correct": "3",
            "Title": "คำว่า <b>''ลูกบวย''</b> ควรเติมเครื่องหมายวรรณยุกต์ให้คำถูกต้องและมีความหมาย"
        },
        {
            "choice1": "สวน",
            "choice2": "สด",
            "choice3": "เสือ",
            "choice4": "เกิด",
            "correct": "4",
            "Title": "ข้อใดเป็นคำที่มีสระเปลี่ยนรูป"
        },
        {
            "choice1": "ตอ - ออ - มอ - เต็ม",
            "choice2": "ตอ - เอะ - มอ - เต็ม",
            "choice3": "ตอ - โอะ - มอ - เต็ม",
            "choice4": "ตอ - เอ - มอ - เต็ม",
            "correct": "2",
            "Title": "ข้อใดอ่านถูกต้อง"
        },
        {
            "choice1": "รัก",
            "choice2": "ถั่ว",
            "choice3": "เล็ก",
            "choice4": "คน",
            "correct": "4",
            "Title": "ข้อใดเป็นคำที่มีสระลดรูป"
        },
        {
            "choice1": "พ่อแม่ พี่น้อง คุณครู",
            "choice2": "พ่อ แม่ พี่ น้อง",
            "choice3": "คุณครู พี่สาว น้องสาว",
            "choice4": "พ่อแม่ พี่สาว น้องสาว",
            "correct": "2",
            "Title": "ข้อใดเป็นคำพยางค์เดียวทั้งหมด"
        },
        {
            "choice1": "1 พยางค์",
            "choice2": "2 พยางค์",
            "choice3": "3 พยางค์",
            "choice4": "4 พยางค์",
            "correct": "3",
            "Title": "คำว่า <b>''จระเข''</b> มีกี่พยางค์"
        },
        {
            "choice1": "สดใส - ร่าเริง",
            "choice2": "สวย - น่ารัก",
            "choice3": "ใหญ่โต - กว้างขวาง",
            "choice4": "กลางวัน - กลางคืน",
            "correct": "4",
            "Title": "คำคู่ใด มีความหมายตรงข้ามกัน"
        },
        {
            "choice1": "มอ - โอะ - ดอ - มด",
            "choice2": "ขอ - ออ - ดอ - ขวด",
            "choice3": "จอ - โอะ - นอ - จน",
            "choice4": "รอ - เอือ - งอ - เรือง",
            "correct": "2",
            "Title": "ข้อใดอ่านผิด"
        },
        {
            "choice1": "ใ-",
            "choice2": "ไ-",
            "choice3": "โ-",
            "choice4": "เ-",
            "correct": "2",
            "Title": "ข้อใดที่เรียกว่า <b>''ไม้มลาย''</b>"
        },
        {
            "choice1": "สระอือ",
            "choice2": "สระอัว",
            "choice3": "สระเอ",
            "choice4": "สระอู",
            "correct": "4",
            "Title": "สระตัวใดเขียนไว้ข้างล่างพยัญชนะ"
        },
        {
            "choice1": "เสย",
            "choice2": "หาย",
            "choice3": "ถ่าย",
            "choice4": "เสีย",
            "correct": "4",
            "Title": "ข้อใดไม่มี ย สะกด"
        },
        {
            "choice1": "นอนหลับ",
            "choice2": "สังหาร",
            "choice3": "มณีกาล",
            "choice4": "วันวาน",
            "correct": "4",
            "Title": "คำในข้อใดสะกดด้วยมาตรา แม่กน ทั้งสองคำ"
        },
        {
            "choice1": "ลา",
            "choice2": "กา",
            "choice3": "วา",
            "choice4": "ผา",
            "correct": "2",
            "Title": "คำใดวรรณยุกต์ผันได้ครบ 5 เสียง"
        },
        {
            "choice1": "ทอง",
            "choice2": "กบ",
            "choice3": "ขวด",
            "choice4": "ขัน",
            "correct": "4",
            "Title": "ข้อใดเป็นคำที่มีสระเปลี่ยนรูป"
        },
        {
            "choice1": "สอน",
            "choice2": "ร้องเพลง",
            "choice3": "ทำนา",
            "choice4": "ค้าขาย",
            "correct": "1",
            "Title": "จงหาคำที่มีความหมายสอดคล้องกับคำที่กำหนดให้  <b>ครู : ………………</b>"
        },
        {
            "choice1": "เป็น",
            "choice2": "ทหาร",
            "choice3": "สมชาติ",
            "choice4": "ไม่มีข้อใดถูก",
            "correct": "3",
            "Title": "คำใดเป็นประธานในประโยค <b>''สมชาติเป็นทหาร''</b>"
        },
        {
            "choice1": "ไป",
            "choice2": "ตั้ง",
            "choice3": "วาง",
            "choice4": "อยู่",
            "correct": "4",
            "Title": "<b>''บ้านเธอ...............ที่ไหน''</b> ควรเติมคำในข้อใด"
        },
        {
            "choice1": "ลูกแก้ว",
            "choice2": "วัวกลัว",
            "choice3": "แจ๋วแหวว",
            "choice4": "มะพร้าว",
            "correct": "2",
            "Title": "ข้อใดไม่มีคำที่อยู่ใน แม่เกอว"
        },
        {
            "choice1": "ม้าลาย - วิ่งมา",
            "choice2": "เรือลอย - หลายใจ",
            "choice3": "ผู้ชาย - พายเรือ",
            "choice4": "เสือ - สิงห์",
            "correct": "3",
            "Title": "คำในข้อใดมีเสียงสระคล้องจองกัน"
        },
        {
            "choice1": "โหน",
            "choice2": "ไต่",
            "choice3": "โยน",
            "choice4": "กระโดด",
            "correct": "2",
            "Title": "หาคำที่มีความหมายเข้ากับคำที่กำหนดให้  <b>ปีน : .....</b>"
        },
        {
            "choice1": "ฃ  ค  ฅ",
            "choice2": "ค  ฅ  ข",
            "choice3": "ฅ  ค  จ",
            "choice4": "ฃ ฃ ค",
            "correct": "1",
            "Title": "ก  ข  .....  .....  .....  ฆ  ง  พยัญชนะตัวใดที่หายไป"
        },
    ];
<?php elseif ($this->data['Level'] == 2) : ?>
    var questions = [{
        "choice1": "6 พยางค์",
        "choice2": "7 พยางค์",
        "choice3": "8 พยางค์",
        "choice4": "9 พยางค์",
        "correct": "3",
        "Title": "เมื่อนั้น โฉมจันท์กัลยามารศรี <b>''ข้อความที่ขีดเส้นใต้มีกี่พยางค์''</b>"
    },
    {
        "choice1": "สุกเกษมสานต์",
        "choice2": "สุขเกษมศาน",
        "choice3": "สุขเกษมศานต์",
        "choice4": "สุขเกษมสานต์",
        "correct": "3",
        "Title": "<b>''สุก - กะ - เสม - สาน''</b> คำอ่านนี้เขียนอย่างไร"
    },
    {
        "choice1": "ตายแล้วลามาเกิด",
        "choice2": "มาเกิดแล้วตาย",
        "choice3": "เกิดแล้วไปตายใหม่",
        "choice4": "ถูกทุกข้อ",
        "correct": "1",
        "Title": "<b>''จุ - ติ''</b> อ่านว่า จุติ คำนี้แปลว่าอะไร"
    },
    {
        "choice1": "2 พยางค์",
        "choice2": "3 พยางค์",
        "choice3": "4 พยางค์",
        "choice4": "5 พยางค์",
        "correct": "3",
        "Title": "<b>''พบสองเฒ่าปลูกถั่วงา นางนั่งวันทาขมีขมัน''</b> คำว่า ขมีขมัน ออกเสียงกี่พยางค์"
    },
    {
        "choice1": "คำเรียก",
        "choice2": "คำแทน",
        "choice3": "คำแสดงอาการ",
        "choice4": "คำสร้อย",
        "correct": "1",
        "Title": "คำนามเรียกอีกอย่างหนึ่งว่าอะไร"
    },
    {
        "choice1": "อัน",
        "choice2": "เล่ม",
        "choice3": "ลำ",
        "choice4": "แท่ง",
        "correct": "2",
        "Title": "คำว่า <b>''หนังสือ'/b'> มีลักษณนามว่าอย่างไร"
    },
    {
        "choice1": "ปรัศนี",
        "choice2": "อัศเจรีย์",
        "choice3": "วิสรรชนีย์",
        "choice4": "สัญประกาศ",
        "correct": "1",
        "Title": "เครื่องหมาย (?) มีชื่อเรียกว่าอะไร"
    },
    {
        "choice1": "? = สัญประกาศ",
        "choice2": "! = อัศเจรีย์",
        "choice3": ". = มหัพภาค",
        "choice4": "''  '' = อัญประกาศ",
        "correct": "1",
        "Title": "ข้อใดผิด"
    },
    {
        "choice1": "(  )",
        "choice2": "ๆ",
        "choice3": "=",
        "choice4": "!",
        "correct": "4",
        "Title": "<b>''โอ้โห เธองามจริงๆ''</b> ใช้เครื่องหมายวรรคตอนใด"
    },
    {
        "choice1": "ดช.",
        "choice2": "ดญ.",
        "choice3": "กทม.",
        "choice4": "พค.",
        "correct": "3",
        "Title": "ข้อใดใช้ (.) ได้ถูกต้อง"
    },
    {
        "choice1": "เล่นเกมส์",
        "choice2": "เล่นเกมศ์",
        "choice3": "เล่นเกมษ์",
        "choice4": "เล่นเกม",
        "correct": "4",
        "Title": "คำในข้อใดเขียนถูกต้อง"
    },
    {
        "choice1": "เล่นเกม",
        "choice2": "คอมพิวเตอร์",
        "choice3": "วรรณคดี",
        "choice4": "หงุดหงิด",
        "correct": "1",
        "Title": "คำใดมีลักษณะเป็นคำไทยแท้"
    },
    {
        "choice1": "หัวเสีย",
        "choice2": "หน้าทะเล้น",
        "choice3": "รักชาติ",
        "choice4": "โรงเรียน",
        "correct": "2",
        "Title": "คำประสมใดที่เกิดจากคำนามและคำวิเศษณ์ประสมกัน"
    },
    {
        "choice1": "วัน + คดี",
        "choice2": "วรรณ + คะ + ดี",
        "choice3": "วรรณ + คดี",
        "choice4": "วรรณะ + คดี",
        "correct": "4",
        "Title": "<b>''วรรณคดี''</b> เกิดจากรากศัพท์ของบาลีสันสกฤตคำใดที่สมาสกัน"
    },
    {
        "choice1": "อักษรควบ",
        "choice2": "อักษรนำ",
        "choice3": "คำประสม",
        "choice4": "คำซ้ำ",
        "correct": "2",
        "Title": "<b>''หงุดหงิด''</b> มีลักษณะคำอยู่ในคำตอบข้อใด"
    },
    {
        "choice1": "คนเราต้องปรึกษาหารือกันบ้าง",
        "choice2": "สามีชอบตะคอกข่มขืนใจให้ภรรยาเสียใจ",
        "choice3": "เขาชอบทำเสียงโหวกเหวกอยู่ในลำคอ",
        "choice4": "เธอมีเรื่องขัดข้องหมองมัวอะไรอยู่ในใจ",
        "correct": "1",
        "Title": "คำซ้อนในข้อใดสอดคล้องกับบริบทในคำตอบ"
    },
    {
        "choice1": "ตายไป",
        "choice2": "ตายจาก",
        "choice3": "วายวอด",
        "choice4": "กลายจาก",
        "correct": "2",
        "Title": "<b>''ล้มหาย...................''</b> ควรเติมคำในข้อใด"
    },
    {
        "choice1": "ยามร้าย",
        "choice2": "ยามดี",
        "choice3": "ยามเย็น",
        "choice4": "ไม่มีข้อใดถูก",
        "correct": "1",
        "Title": "<b>''เคราะห์หาม..................''</b> ควรเติมคำในข้อใด"
    },
    {
        "choice1": "ภาคเหนือ",
        "choice2": "ภาคใต้",
        "choice3": "ภาคอีสาน",
        "choice4": "ภาคตะวันออก",
        "correct": "2",
        "Title": "เกาะหนู เกาะแมว เป็นนิทานทางภาคใด"
    },
    {
        "choice1": "สุราษฎร์ธานี",
        "choice2": "สงขลา",
        "choice3": "ยะลา",
        "choice4": "พะเยา",
        "correct": "2",
        "Title": "เรื่องเกาะหนู เกาะแมว เป็นนิทานที่เล่ากันในจังหวัดใด"
    },
    {
        "choice1": "คำนาม",
        "choice2": "คำสรรพนาม",
        "choice3": "คำกิริยา",
        "choice4": "คำวิเศษณ์",
        "correct": "2",
        "Title": "คำที่ใช้แทนชื่อคน สัตว์ สิ่งของ สถานที่ เป็นคำชนิดใด"
    },
    {
        "choice1": "จำนง   ซาบซึ้ง",
        "choice2": "ประทับ  เวทมนตร์",
        "choice3": "ก๋วยเตี๋ยว  เครื่องราง",
        "choice4": "ยาเสพติด  พิษภัย",
        "correct": "3",
        "Title": "คำในข้อใดประสมด้วยสระเสียงยาวทุกคำ"
    },
    {
        "choice1": "ตีนคู้",
        "choice2": "ฟันหนู",
        "choice3": "ลากข้าง",
        "choice4": "พินทุ",
        "correct": "1",
        "Title": "คำว่า <b>''ตู้''</b> มีรูปสระใดประสมอยู่"
    },
    {
        "choice1": "นั่งก้มหน้า",
        "choice2": "ถามคำถาม",
        "choice3": "คุยกันเบาๆ",
        "choice4": "ตั้งใจฟัง",
        "correct": "4",
        "Title": "ขณะคุณครูพูด นักเรียนควรปฏิบัติอย่างไร"
    },
    {
        "choice1": "วัว",
        "choice2": "พัด",
        "choice3": "ถั่ว",
        "choice4": "ตัว",
        "correct": "2",
        "Title": "ข้อใดอ่านออกเสียงสระ อะ"
    },
    {
        "choice1": "ลูกชาย  เลือดหมู",
        "choice2": "เจ็บป่วย  อาหาร",
        "choice3": "กางร่ม  วิ่งแข่ง",
        "choice4": "ร่างกาย  กลางวัน",
        "correct": "1",
        "Title": "ข้อใดประสมสระแบบคงรูปทุกคำ"
    },
    {
        "choice1": "ไข้",
        "choice2": "ไหม้",
        "choice3": "ร้าน",
        "choice4": "ไส้",
        "correct": "3",
        "Title": "ข้อใดอ่านออกเสียงวรรณยุกต์ ต่างจากคำว่า “บ้าน”"
    },
    {
        "choice1": "แข็ง",
        "choice2": "เป็น",
        "choice3": "เจ็บ",
        "choice4": "เค็ม",
        "correct": "1",
        "Title": "ข้อใดออกเสียงสระต่างจากข้ออื่น"
    },
    {
        "choice1": "1 คำ",
        "choice2": "2 คำ",
        "choice3": "3 คำ",
        "choice4": "4 คำ",
        "correct": "4",
        "Title": "“ปลูกเผือก ผักกาด หญ้าแพรก” คำที่อ่านออกเสียง แม่กก มีกี่คำ"
    },
    {
        "choice1": "กว้างขวาง เพลงดัง",
        "choice2": "งบดุล ผลัดเวร",
        "choice3": "สงสาร ลูกกรง",
        "choice4": "โรงหนัง กังวาน",
        "correct": "1",
        "Title": "คำในข้อใดมีตัวสะกดในมาตราเดียวกัน"
    },
    {
        "choice1": "มะม่วง เอือมระอา",
        "choice2": "กมล ขนม",
        "choice3": "ชวนชม กลมกล่อม",
        "choice4": "ตรมตรอม หยุมหยิม",
        "correct": "4",
        "Title": "คำในข้อใดมีตัวสะกดในมาตราเดียวกัน"
    },
    {
        "choice1": "ศิลปะ วิปลาส",
        "choice2": "ฉบับ ตลบ",
        "choice3": "ระเห็จ มลทิน",
        "choice4": "บรรทุก บรรจบ",
        "correct": "2",
        "Title": "คำในข้อใดมีตัวสะกดในมาตราเดียวกัน"
    },
    {
        "choice1": "ไข่มุก คอนกรีต",
        "choice2": "เกสร บาป",
        "choice3": "วิหค คลินิก",
        "choice4": "สงสาร ผักกาด",
        "correct": "3",
        "Title": "คำในข้อใดมีตัวสะกดในมาตราเดียวกัน"
    },
    {
        "choice1": "ซากศพ",
        "choice2": "ธรรมชาติ",
        "choice3": "โกหก",
        "choice4": "พกลม",
        "correct": "4",
        "Title": "ข้อใดมีตัวสะกดมาตราเดียวกับคำว่า ภาคภูมิ"
    },
    {
        "choice1": "ภาคเรียน",
        "choice2": "ภูมิใจ",
        "choice3": "งานเขียน",
        "choice4": "เชี่ยวชาญ",
        "correct": "1",
        "Title": "ข้อใดมีตัวสะกดมาตราเดียวกับคำว่า พากเพียร"
    },
    {
        "choice1": "ขอบใจจ้ะ",
        "choice2": "ขอบคุณครับ/ค่ะ",
        "choice3": "ขอบพระคุณครับ/ค่ะ",
        "choice4": "กราบขอบพระคุณครับ/ค่ะ",
        "correct": "4",
        "Title": "ถ้าเราจะกล่าวขอบคุณพระสงฆ์ควรใช้คำพูดว่าอย่างไร"
    },
    {
        "choice1": "ขอบใจ",
        "choice2": "ขอบคุณนะ",
        "choice3": "ขอบพระคุณครับ",
        "choice4": "เป็นพระมหากรุณาธิคุณอย่างสูงะ",
        "correct": "3",
        "Title": "คุณพ่อให้เงินสมคิดไปโรงเรียน สมคิดควรกล่าวคำว่าอะไร"
    },
    {
        "choice1": "ชงโค",
        "choice2": "ชะเอม",
        "choice3": "ชวนชม",
        "choice4": "ชมพู่",
        "correct": "1",
        "Title": "ถ้าเรียงลำดับตามพจนานุกรมคำในข้อใดอยู่ลำดับแรกสุด"
    },
    {
        "choice1": "โรคภัย ไข้หวัด",
        "choice2": "เช้ามืด ปีใหม่",
        "choice3": "ศีรษะ ห้องสีขาว",
        "choice4": "สาวสวย รำพึง",
        "correct": "3",
        "Title": "ข้อใดมีพยัญชนะต้นเป็นอักษรสูงทั้งหมด"
    },
    {
        "choice1": "ปาท๋องโก๋",
        "choice2": "เป็ด",
        "choice3": "ปลื้ม",
        "choice4": "ปิงปอง",
        "correct": "2",
        "Title": "ถ้าเรียงลำดับตามพจนานุกรมคำในข้อใดอยู่ลำดับท้ายสุด"
    },
    {
        "choice1": "กางเกง  กอง  ไก่เตี้ย  กำแพง",
        "choice2": "กำแพง  กอง  กางเกง  ไก่เตี้ย",
        "choice3": "ไก่เตี้ย  กอง  กางเกง  กำแพง",
        "choice4": "กอง  กางเกง  กำแพง  ไก่เตี้ย",
        "correct": "4",
        "Title": "ข้อใดเรียงลำดับคำตามพจนานุกรมได้ถูกต้อง"
    },
    {
        "choice1": "นิ",
        "choice2": "ดู",
        "choice3": "โต",
        "choice4": "จะ",
        "correct": "1",
        "Title": "ข้อใดเป็นพยางค์เพียงอย่างเดียว"
    },
    {
        "choice1": "ผลิต",
        "choice2": "มรรยาท",
        "choice3": "กรรมสิทธิ์",
        "choice4": "กลไก",
        "correct": "3",
        "Title": "ข้อใดมี 3 พยางค์"
    },
    {
        "choice1": "4 คำ  4  พยางค์",
        "choice2": "3 คำ  5  พยางค์",
        "choice3": "5 คำ  4  พยางค์",
        "choice4": "5 คำ  5  พยางค์",
        "correct": "2",
        "Title": "“ผักคะน้าต้นใหญ่” วลีนี้มีกี่คำ กี่พยางค์"
    },
    {
        "choice1": "1 คำ  1 พยางค์",
        "choice2": "4 คำ  4  พยางค์",
        "choice3": "4 คำ  1  พยางค์",
        "choice4": "1 คำ  4  พยางค์",
        "correct": "4",
        "Title": "“หนังสือการ์ตูน” วลีนี้มีกี่คำ กี่พยางค์"
    },
    {
        "choice1": "รัฐสภา",
        "choice2": "ตุ๊กตา",
        "choice3": "นามธรรม",
        "choice4": "โฆษณา",
        "correct": "1",
        "Title": "ข้อใดมีพยางค์ต่างจากข้ออื่น"
    },
    {
        "choice1": "ดนัยวิ่งเร็ว",
        "choice2": "น้องร้องไห้",
        "choice3": "ฉันกิน",
        "choice4": "ฝนตกหนัก",
        "correct": "3",
        "Title": "ข้อใดต่างจากข้ออื่น"
    },
    {
        "choice1": "อย่าไปเล่นกลางถนน",
        "choice2": "แม่ค้าขายผัก",
        "choice3": "ฉันไม่ชอบสุนัข",
        "choice4": "ใครไปทะเล",
        "correct": "2",
        "Title": "ข้อใดเป็นประโยคบอกเล่า"
    },
    {
        "choice1": "ทำไมถึงมาที่นี่",
        "choice2": "อะไรที่ทำให้เธอเป็นแบบนี้",
        "choice3": "ใครจะไปเที่ยวก็ได้",
        "choice4": "ฉันควรทำอย่างไรดี",
        "correct": "3",
        "Title": "ข้อใดไม่ใช่ประโยคคำถาม"
    },
    {
        "choice1": "ประโยคบอกเล่า",
        "choice2": "ประโยคขอร้อง",
        "choice3": "ประโยคคำสั่ง",
        "choice4": "ประโยคปฏิเสธ",
        "correct": "3",
        "Title": "<b>''จงแต่งประโยคจากคำที่กำหนดให้''</b> เป็นประโยคประเภทใด"
    },
];
<?php endif; ?>
//------------แสดงคำถาม คำตอบ-------------//
var randomQuestion;
var isFirstLoad = true;

$(document).ready(function() {
    Question();
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
                <div class="title-container" id="answer1" onclick="playCorrectSound(1, ${randomQuestion.correct})">
                    <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                    <div class="choice-text">${randomQuestion.choice1}</div>
                </div>
            </div>
            <div class="col">
                <div class="title-container" id="answer2" onclick="playCorrectSound(2, ${randomQuestion.correct})">
                    <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                    <div class="choice-text">${randomQuestion.choice2}</div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="title-container" id="answer3" onclick="playCorrectSound(3, ${randomQuestion.correct})">
                    <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                    <div class="choice-text">${randomQuestion.choice3}</div>
                </div>
            </div>
            <div class="col">
                <div class="title-container" id="answer4" onclick="playCorrectSound(4, ${randomQuestion.correct})">
                    <img src="<?= $themes ?>assets/images/thai/page5/choice.png" class="choice">
                    <div class="choice-text">${randomQuestion.choice4}</div>
                </div>
            </div>
        </div>
    `;
    questionContainer.innerHTML = html;

    startCountdown();

    if (isFirstLoad) {
        var clauseElement = document.querySelector(".txt-clause");
        var currentClause = parseInt(clauseElement.innerText.split('/')[0]);
        var clause = currentClause + 1;
        clauseElement.innerText = clause + "/10";
    }

    if (clause > 10) {
        window.location.href = "<?= site_url('GameLearningThai_controller') ?>";
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
            var answers = document.querySelectorAll(".title-container");
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
        var answers = document.querySelectorAll(".title-container");
        answers.forEach(function(answerElement) {
            answerElement.onclick = null;
        });
        setTimeout(function() {
            answerCount = 0;
            isFirstLoad = true;
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
</script>