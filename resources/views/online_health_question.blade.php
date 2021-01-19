<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="https://scbprotect.co.th/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="/assets/js/jquery.min.js"></script>
    <title>ONLINE PURCHASE | SCB PROTECT</title>
    <link rel="stylesheet" href="/assets/css/app.css" />
    <link rel="stylesheet" href="assets/css/smoot_scrollbar_style.css">


    <!-- custom style -->
    <style>
        .nav-container .nmaxs .nav-max-inner {
            justify-content: space-between;
        }

        .cal-summary {
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 99;
            position: fixed;
            /* color: #ffffff; */
            background-color: #ffffff;
            box-shadow: 1px 1px 8px 2px rgba(0, 0, 0, 0.1);
        }

        hr.break {
            border-top: 1px solid #EEEAF9;
            margin: 30px 0px 50px 0px;
        }

        .btn.btn-step {
            min-width: 260px;
        }

        .btn-outline-primary {
            border: 1px solid #2F1761;
            background-color: #ffffff;
        }

        .section-main {
            margin-bottom: 180px;
        }

        ul.question > li {
            padding: 1rem 0;
            border-bottom: 1px solid #EEEAF9;
        }

        ul.question > li:last-child {
            border-bottom: none;
        }

        .custom-control-label::before {
            width: 2rem;
            height: 2rem;
        }

        .custom-control-label::after {
            width: 2rem;
            height: 2rem;
        }

        .custom-control-label {
            padding-left: 1.25rem;
            padding-top: .5rem;
        }

        .custom-control-inline:first-child {
            margin-right: 4rem;
        }

        .progressbox {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            /* left: 40%; */
            height: 80px;
        }

        .progressbox .progressbar {
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            margin: 0;
            padding: 0;
            counter-reset: step;
            left: 50%;
            position: relative;
        }

        .progressbox .progressbar li {
            list-style-type: none;
            position: relative;
            text-align: center;
            width: 72px;
            float: left;
            font-family: prompt-regular;
            font-size: 18px;
            line-height: 1;
            color: #2F1761;
        }

        .progressbox .progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 36px;
            height: 36px;
            line-height: 32px;
            border-radius: 50%;
            background-color: #fff;
            border: 2px solid #7A5BBF;
            display: block;
            text-align: center;
            margin: 0 auto;
            font-family: "Prompt", sans-serif;
        }

        .progressbox .progressbar li.done:before {
            background-color: #7A5BBF;
            color: #fff;
        }

        .progressbox .progressbar li:first-child:after {
            content: none;
        }

        .progressbox .progressbar li:after {
            width: 100%;
            height: 2px;
            content: "";
            position: absolute;
            background-color: #EEEAF9;
            background-repeat: no-repeat;
            top: 18px;
            left: -25%;
            z-index: -1;
        }

        .progressbox .progressbar li.done:after {
            background-color: #7A5BBF;
        }

        .nav-min .progressbox {
            height: auto;
        }

        .nav-min .progressbox .progressbar li:before {
            content: "1";
            height: auto;
        }

        .nav-container .nmaxs .nav-max-inner {
            height: 80px;
        }

        .nav-container .nms {
            height: 60px;
            padding-top: .25rem;
            padding-bottom: .25rem;
        }

        .nav-container .nms a {
            height: 50px;
        }
    </style>
</head>

<body class="scroll-ready page-product-detail">
<nav id="main-nav" class="nav-container toggle-on-top">
    <div class="nmax">
        <div class="nmaxs">
            <div class="tac-container-1">
                <div class="nav-max-inner">
                    <a href="online_premium_cal" class="nmaxs__logo">
                        <img src="/assets/img/logo-scb-protect-long.png" alt="SCB Protect Logo">
                    </a>
                    <div class="progressbox">
                        <ul class="progressbar">
                            <li class="done"></li>
                            <li class=""></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--- Nav: Min --->
    <div class="nav-min">
        <div class="nav-min-sticky nms">
            <div style="display: flex; justify-content: space-between; width: 100%;">
                <a href="online_premium_cal" class="nms__logo">
                    <img src="/assets/img/logo-scb-protect-long.png" alt="SCB Protect Logo">
                </a>
                <div class="progressbox">
                    <ul class="progressbar">
                        <li class="done"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">((function(){
            var load=function(){
                var script="https://s.acquire.io/a-d89e7/init.js?full";
                var x=document.createElement('script');
                x.src=script;x.async=true;
                var sx=document.getElementsByTagName('script')[0];
                sx.parentNode.insertBefore(x, sx);

            };
            if(document.readyState === "complete")
                load();
            else if (window.addEventListener)
                window.addEventListener('load',load,false);
            else if (window.attachEvent) {
                window.attachEvent("onload", load);
            }
        })())</script>
    <noscript><a href="javascript:acquireIO.max('video')"> Start Video Call Now </a></noscript>
</nav>

<div id="stickyContainer">
    <div class="nav-padding"></div>
</div>

<!--- Scroll Container --->
<div id="scrollContainer">
    <div class="scroll-content-inner">
        <div class="nav-padding"></div>

        <section class="section-main">
            <div class="tac-container-1 color-primary">
                <h2 class="text-center" style="margin-top: 80px;">ข้อมูลสุขภาพของคุณ</h2>
                <p class="text-center" style="margin-bottom: 80px;">ไม่จำเป็นต้องตรวจสุขภาพ ประหยัดเวลาเพียงตอบคำถาม 2 ข้อ</p>

                <div class="grid1">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <h4 class="mb-4">กรุณาระบุน้ำหนักและส่วนสูง</h4>
                        <div class="grid1">
                            <div class="form-group text-left col-12 col-lg-6">
                                <input type="text" class="form-control" name="weight" placeholder="น้ำหนัก" data-rule-required="true" data-msg-required="กรุณากรอกน้ำหนัก">
                            </div>
                            <div class="form-group text-left col-12 col-lg-6">
                                <input type="text" class="form-control" name="height" placeholder="ส่วนสูง" data-rule-required="true" data-msg-required="กรุณากรอกส่วนสูง">
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="break">

                <div class="grid1">
                    <div class="col-lg-10 offset-lg-1 col-12 form-group">
                        <h4 class="mb-3">คุณเคยได้รับการวินิจฉัย หรือรับการรักษา <br class="d-hd-block d-none">หรือตั้งข้อสังเกตโดยแพทย์ว่าป่วยเป็นโรคตามรายการท้ายคำถามนี้หรือไม่</h4>
                        <div>
                            <ul class="question">
                                <li>โรคเอดส์ หรือภูมิคุ้มกันบกพร่อง โรคมะเร็ง โรคหัวใจ โรคเส้นเลือดหัวใจตีบ โรคเบาหวาน โรคความดันโลหิตสูง โรคหลอดเลือดในสมอง</li>
                                <li>โรคอัมพฤกษ์/โรคอัมพาต โรคชัก โรคปอด โรควัณโรค โรคเลือด โรคตับ โรคพิษสุราเรื้อรัง โรคไต โรคจิต โรคเอสแอลอี</li>
                                <li>มีอวัยวะส่วนใดของร่างกายพิการ และ/หรือทุพพลภาพถาวรสิ้นเชิง</li>
                            </ul>
                        </div>

                        <h4 class="mb-3 mt-5">คุณเคยมี หรือ กำลังมีอาการ ดังต่อไปนี้หรือไม่</h4>
                        <div>
                            <ul class="question">
                                <li>กล้ามเนื้ออ่อนแรง ปวดศีรษะรุนแรงเรื้อรัง ไอเรื้อรัง ไอเป็นเลือด เจ็บหรือแน่นหน้าอก</li>
                                <li>ปวดท้องเรื้อรัง อาเจียนหรือถ่ายเป็นเลือด ท้องเสียเรื้อรัง ปวดข้อเรื้อรัง</li>
                                <li>คลำพบก้อนเนื้อผิดปกติ</li>
                                <li>ในระหว่าง 6 เดือนที่ผ่านมามีอาการอ่อนเพลียหรือน้ำหนักลดโดยไม่ทราบสาเหตุ</li>
                            </ul>
                        </div>

                        <div class="mt-5 text-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="haveone" name="health_check" class="custom-control-input">
                                <label class="custom-control-label" for="haveone">มีข้อใดข้อหนึ่ง</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="notall" name="health_check" class="custom-control-input" checked>
                                <label class="custom-control-label" for="notall">ไม่ทั้งหมด</label>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="break">

                <div class="buttons text-center">
                    <a class="btn btn-step btn-outline-primary mr-sm-4 mr-0 mb-fhd-0 mb-4" href="online_premium_cal">
                        <span class="btn-text">ย้อนกลับ</span>
                    </a>
                    <a class="btn btn-step btn-secondary" href="online_personal_question">
                        <span class="btn-text">ถัดไป</span>
                    </a>
                </div>

            </div>

        </section>

        <script src="/assets/js/jquery.validate.min.js"></script>
        <script src="/assets/js/select2.min.js"></script>
        <script type="text/javascript" src="/assets/js/app.js"></script>
    </div> <!--scroll-content-inner-->
</div> <!--scroll-container-->

<section id="cal-summary" class="cal-summary">
    <div class="tac-container-1 color-primary">
        <div class="d-flex justify-content-between py-3">
            <div>
                <h3>แผนคุ้มรักษาเหมาจ่าย</h3>
                <h5 style="color: #7A5BBF;">แผน Ultra</h5>
            </div>
            <div class="d-inline-flex align-items-center">
                <div class="mr-4">
                    <h3>3,183.50 <span style="font-size: medium; font-weight: 400;">บาท/เดือน</span></h3>
                </div>
                <a class="btn-help-info" href="#">
                    <img src="/assets/img/icon-info.png" width="20px">
                </a>
            </div>
        </div>
    </div>
</section>

</body>

</html>
