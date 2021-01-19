<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="https://scbprotect.co.th/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="/assets/js/jquery.min.js"></script>
    <title>CHECK OUT | SCB PROTECT</title>

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
            content: "3";
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

        .box-purple-custom {
            border: 2px solid #EEEAF9;
            border-radius: 1rem;
            padding: 25px 25px;
            margin-top: 20px;
        }

        #price .box-purple-custom,
        #payment-method .box-purple-custom {
            cursor: pointer;
            padding: 30px 25px;
        }

        #price .box-purple-custom.active,
        #payment-method .box-purple-custom.active {
            border-color: #2f1761;
            background-color: #fff;
            box-shadow: 1px 1px 1.75rem 0 rgba(122, 88, 191, 0.2);
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
                            <li class="done"></li>
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
                <h2 class="text-center" style="margin-top: 80px;">ยืนยันและชำระเงินเบี้ยประกัน</h2>
                <p class="text-center" style="margin-bottom: 80px;">กรุณาตรวจสอบข้อมูลของท่าน และชำระเงิน เพื่อเริ่มต้นความคุ้มครอง</p>

                <div id="formBuyInsurance">
                    <div class="grid1">
                        <div class="col-lg-8 col-12">
                            <h4 class="mb-4">เลือกรูปแบบการชำระเบี้ยประกัน</h4>
                            <div id="price" class="grid1">
                                <div class="col-6">
                                    <div class="box-purple-custom text-center active mt-0">
                                        <h5 class="mb-3">ราย 6 เดือน</h5>
                                        <h3>฿ 19,101.00</h3>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="box-purple-custom text-center mt-0">
                                        <h5 class="mb-3">รายปี</h5>
                                        <h3>฿ 38,200.00</h3>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-4 mt-5">เลือกวิธีการชำระเงิน</h4>
                            <div id="payment-method" class="grid1">
                                <div class="col-6">
                                    <div class="box-purple-custom text-center active mt-0">
                                        <h5>บัตรเครดิต / บัตรเดบิต</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="box-purple-custom text-center mt-0">
                                        <h5>โอนผ่านบัญชีธนาคาร</h5>
                                    </div>
                                </div>
                            </div>

                            <hr class="break">

                            <div id="payment-credit">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="creditcard_number" placeholder="หมายเลขบัตรเครดิต/บัตรเดบิต" data-rule-required="true" data-msg-required="กรุณากรอกหมายเลขบัตรเครดิต">
                                </div>
                                <div class="form-group pt-0">
                                    <input type="text" class="form-control" name="creditcard_holder" placeholder="ชื่อบนหน้าบัตร" data-rule-required="true" data-msg-required="กรุณากรอกชื่อบนหน้าบัตร">
                                </div>
                                <div class="grid1 mt-3">
                                    <div class="form-group col-8 col-md-9 py-0">
                                        <input type="text" class="form-control" name="creditcard_goodthur" placeholder="วันหมดอายุ (MM/YY)" data-rule-required="true" data-msg-required="กรุณากรอกชื่อวันหมดอายุ">
                                    </div>
                                    <div class="form-group col-4 col-md-3 py-0">
                                        <input type="number" class="form-control" name="creditcard_cvv" placeholder="CVV" data-rule-required="true" data-msg-required="กรุณากรอกรหัส CVV">
                                    </div>
                                </div>
                                <p class="mt-4 text-center" style="color: #7e7e7e;">
                                    Secured by
                                    <img src="/images/2C2P-Logo.wine.png" height="34px">
                                </p>
                            </div>

                        </div>

                        <div class="col-lg-4 col-12">
                            <div style="box-shadow: 1px 1px 1.75rem 0 rgba(122, 88, 191, 0.2);border-radius: 1rem;overflow: hidden;background-color: #ffffff;">
                                <div style="background: url(images/head-elipse.svg) no-repeat center bottom/600% auto;color: #F7B334;padding: 1.5rem 1rem;;text-align: center;">
                                    <h4 style="font-size: 30px;margin: 0;">แผนคุ้มรักษาเหมาจ่าย</h4>
                                </div>
                                <div style=" padding: 0 30px;text-align: center;color: #2f1761;">
                                    <table role="presentation" style="border-collapse: collapse;" cellpadding="0" cellspacing="0" width="100%">
                                        <tr style="border-bottom: 1px solid #F7B334;">
                                            <td valign="top" width="50%" style="padding:25px 0px 15px 0;text-align: left;">
                                                <p style="margin: 0;line-height: 1.8;">
                                                    ชื่อ-นามสกุล :</p>
                                            </td>
                                            <td valign="top" width="50%" style="padding:25px 0px 15px 0;text-align:right;">
                                                <p style="margin: 0;line-height: 1.8;font-weight: 500;">
                                                    ทศพล เกษมสุข</p>
                                            </td>
                                        </tr>
                                        <tr style="border-bottom: 1px solid #F7B334;">
                                            <td valign="top" width="50%" style="padding:15px 0px;text-align: left;">
                                                <p style="margin: 0;line-height: 1.8;">
                                                    เพศ :</p>
                                            </td>
                                            <td valign="top" width="50%" style="padding:15px 0px;text-align:right;">
                                                <p style="margin: 0;line-height: 1.8;font-weight: 500;">
                                                    ชาย</p>
                                            </td>
                                        </tr>
                                        <tr style="border-bottom: 1px solid #F7B334;">
                                            <td valign="top" width="50%" style="padding:15px 0px;text-align: left;">
                                                <p style="margin: 0;line-height: 1.8;">
                                                    แบบแผนประกัน :</p>
                                            </td>
                                            <td valign="top" width="50%" style="padding:15px 0px;text-align:right;">
                                                <p style="margin: 0;line-height: 1.8;font-weight: 500;">
                                                    แผน Ultra</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td valign="top" width="50%" style="padding:15px 0px 30px 0;text-align: left;">
                                                <p style="margin: 0;line-height: 1.8;">
                                                    เบี้ยประกันรายปี :</p>
                                            </td>
                                            <td valign="top" width="50%" style="padding:15px 0px 30px 0;text-align:right;">
                                                <p style="margin: 0;line-height: 1.8;font-weight: 500;">
                                                    38,200 ฿</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="box-purple-custom color-primary">
                                <h5>อายุรับประกันภัย</h5>
                                <p>อายุ 1 เดือน 1 วัน - 60 ปี ต่ออายุได้ถึงอายุ 84 ปี (คุ้มครองถึงอายุ 85 ปี)</p>

                                <h5>งวดการชำระเบี้ยประกัน</h5>
                                <p>รายปี หรือ ราย 6 เดือน</p>

                                <h5>ความคุ้มครองแผนคุ้มรักษาเหมาจ่าย<br class="d-fhd-block d-none">
                                    จ่ายตามจริงสูงสุด 3,300,000 ต่อปี</h5>
                                <ul>
                                    <li>ค่าห้อง ค่าอาหาร ค่าบริการพยาบาลประจำวัน ในหอผู้ป่วยปกติ และหอผู้ป่วยหนัก (ไอ.ซี.ยู)</li>
                                    <li>ค่ารักษาพยาบาลอื่นๆ ในโรงพยาบาล หรือสถานพยาบาลเวชกรรม</li>
                                    <li>ค่าแพทย์ และค่าธรรมเนียม สำหรับการรักษา โดยการผ่าตัด</li>
                                    <li>ค่าแพทย์เยี่ยมไข้หรือค่าปรึกษาแพทย์ผู้เชี่ยวชาญเฉพาะโรค</li>
                                    <li>ค่ารักษาพยาบาลฉุกเฉินขณะเป็นผู้ป่วยนอก (เนื่องจากอุบัติเหตุ)</li>
                                    <li>ค่ารักษาพยาบาลกรณีผู้ป่วยนอกสำหรับค่าล้างไต ค่าเคมีบำบัด และรังสีบำบัด</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="buttons text-center" style="margin-top: 60px;">
                        <a class="btn btn-step btn-outline-primary mr-sm-4 mr-0 mb-fhd-0 mb-4" href="online_personal_question">
                            <span class="btn-text">ย้อนกลับ</span>
                        </a>
                        <a class="btn btn-step btn-secondary" href="{{asset('/leadUpdate')}}">
                            <span class="btn-text">ชำระเงิน</span>
                        </a>
                    </div>

                    <hr class="break" style="margin-top: 60px;">

                    <div class="grid1">
                        <div class="col-12">
                            <h5>หมายเหตุ</h5>
                            <ul>
                                <li>แผนคุ้มรักษาเหมาจ่าย เป็นชื่อทางการตลาดของ สัญญาเพิ่มเติมการประกันภัยสุขภาพแบบเหมาจ่าย +
                                    สัญญาเพิ่มเติมค่ารักษาพยาบาลรายวัน แบบเฮชบี 1,000</li>
                                <li>เบี้ยประกันภัยสามารถนำไปลดหย่อนภาษีเงินได้บุคคลธรรมดา ตามเกณฑ์ที่กรมสรรพากรกำหนด</li>
                                <li>ผู้ซื้อควรทำความเข้าใจในรายละเอียดความคุ้มครองและเงื่อนไขก่อนตัดสินใจทำประกันภัยทุกครั้ง</li>
                                <li>รับประกันโดย บริษัท เอฟดับบลิวดี ประกันชีวิต จำกัด (มหาชน)</li>
                                <li>บริษัท ไทยพาณิชย์ โพรเทค จำกัด เป็นนายหน้าประกันชีวิตในการนำเสนอผลิตภัณฑ์ประกันภัย</li>
                            </ul>
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
