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

        .section-main {
            margin-bottom: 180px;
        }

        .btn.btn-step {
            min-width: 260px;
        }

        .btn-outline-primary {
            border: 1px solid #2F1761;
            background-color: #ffffff;
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
            content: "2";
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
</head>

<body class="scroll-ready page-product-detail">
<svg class="d-none">
    <!-- chevrons -->
    <symbol id="ti-chevron-left" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin">
        <path d="M70 5 L25 50 L70 95" fill="none" stroke="currentColor" stroke-width="8"/>
    </symbol>
    <symbol id="ti-chevron-right" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin">
        <path d="M30 5 L75 50 L30 95" fill="none" stroke="currentColor" stroke-width="8"/>
    </symbol>
</svg>

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
                            <li class="done"></li>
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
                <h2 class="text-center" style="margin-top: 80px;">ข้อมูลผู้ขอเอาประกัน</h2>
                <p class="text-center" style="margin-bottom: 80px;">กรุณากรอกข้อมูลใบคำขอเอาประกันภัย และข้อมูลติดต่อ เพื่อใช้ในการสมัคร</p>

                <div id="formBuyInsurance" class="grid1">
                    <div class="col-lg-10 offset-lg-1 col-12">
                        <h4 class="mb-4">ใบคำขอเอาประกันภัย (กรอกภาษาไทย)</h4>

                        <div class="grid1">
                            <div class="col-12 col-lg-6">
                                <select data-placeholder="คำนำหน้าชื่อ" id="name_title" name="name_title" class="form-control"
                                        data-rule-required="true" data-msg-required="กรุณาใส่ข้อมูล">
                                    <option value=""></option>
                                    <option selected>นาย</option>
                                    <option>นาง</option>
                                    <option>นางสาว</option>
                                </select>
                            </div>
                            <div class="col-lg-6"></div>

                            <div class="form-group col-12 col-lg-6 py-0">
                                <input type="text" class="form-control" name="name" placeholder="ชื่อ" data-rule-required="true"
                                       data-msg-required="กรุณากรอกชื่อ" value="ทศพล">
                            </div>

                            <div class="form-group col-12 col-lg-6 py-0">
                                <input type="text" class="form-control" name="surname" placeholder="นามสกุล" data-rule-required="true"
                                       data-msg-required="กรุณากรอกนามสกุล" value="เกษมสุข">
                            </div>

                            <div class="form-group col-12 col-lg-6 py-0">
                                <select data-placeholder="สถานภาพ" id="status" name="status" class="form-control"
                                        data-rule-required="true" data-msg-required="กรุณาใส่ข้อมูล">
                                    <option value="">สถานภาพ</option>
                                    <option>โสด</option>
                                    <option>สมรส</option>
                                    <option>หย่าร้าง</option>
                                </select>
                            </div>

                            <div class="form-group col-12 col-lg-6 py-0">
                                <select data-placeholder="อาชีพ" id="job" name="job" class="form-control"
                                        data-rule-required="true" data-msg-required="กรุณาใส่ข้อมูล">
                                    <option value="">อาชีพ</option>
                                    <option>เจ้าของกิจการ/บริษัทขนาดใหญ่</option>
                                    <option>นักเรียน/นักศึกษา</option>
                                    <option>ข้าราชการ</option>
                                    <option>พนักงานบริษัท</option>
                                    <option>แม่บ้าน/พ่อบ้าน</option>
                                </select>
                            </div>
                        </div>

                        <h4 class="mb-4" style="margin-top: 50px;">ข้อมูลติดต่อของคุณ</h4>
                        <div class="grid1">
                            <div class="col-12">
                                <input type="email" class="form-control" name="email" placeholder="อีเมลของคุณ" data-rule-required="true" data-msg-required="กรุณากรอกอีเมล" value="tassapon_k@gmail.com">
                            </div>
                            <div class="form-group col-12 py-0">
                                <input type="email" class="form-control" name="email_confirm" placeholder="ยืนยันอีเมล" data-rule-required="true" data-msg-required="ยืนยันอีเมล">
                            </div>
                            <div class="form-group col-12 py-0">
                                <input type="text" class="form-control" name="tel" placeholder="หมายเลขเบอร์โทรศัพท์มือถือ" minlength="10" maxlength="10" data-rule-required="true" data-msg-required="กรุณาใส่ข้อมูล" data-rule-digits="true" data-msg-digits="กรุณาใส่เป็นตัวเลขเท่านั้น" data-rule-minlength="10" data-msg-minlength="เบอร์โทรต้องครบ 10 ตัวอักษร" data-rule-maxlength="10" data-msg-maxlength="เบอร์โทรต้องไม่เกิน 10 ตัวอักษร">
                                <p class="mt-3" style="color: #978BB0">เบอร์นี้ใช้สำหรับรับรหัส OTP เพื่อยืนยันการซื้อกรมธรรม์</p>
                            </div>
                        </div>

                        <hr class="break">

                        <div class="form-group text-left col-12 tac-checkbox">
                            <label for="accept_tc">
                                <input type="checkbox" id="accept_tc" name="accept_tc" data-rule-required="true"
                                       data-msg-required="กรุณากดยอมเงื่อนไขและข้อตกลง">
                                <span class="tcb">
                    <span class="tcb-check"></span>
                  </span>
                                <span class="tcb-text">ข้าพเจ้าได้ตรวจสอบข้อมูลทั้งหมดว่าถูกต้องและเป็นความจริง และยอมรับ <a href="#" style="color: #7A5BBF; text-decoration: underline;">เงื่อนไขการสมัครเอาประกันภัย</a></span>
                            </label>
                        </div>

                        <div class="buttons text-center" style="margin-top: 70px;">
                            <a class="btn btn-step btn-outline-primary mr-sm-4 mr-0 mb-fhd-0 mb-4" href="online_health_question">
                                <span class="btn-text">ย้อนกลับ</span>
                            </a>
                            <a class="btn btn-step btn-secondary" href="online_checkout">
                                <span class="btn-text">ยืนยันข้อมูล</span>
                            </a>
                        </div>

                    </div>
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
