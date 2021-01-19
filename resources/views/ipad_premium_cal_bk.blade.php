
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <link rel="icon" type="image/png" sizes="32x32" href="https://scbprotect.co.th/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="/assets/js/jquery.min.js"></script>
  <title>PREMIUM CALCULATION | SCB PROTECT</title>

  <link rel="stylesheet" href="/assets/css/app.css"/>
  <link rel="stylesheet" href="assets/css/smoot_scrollbar_style.css">

  <!-- custom style -->
  <style>
    .nav-container .nmaxs__logo {
      margin-right: 0;
    }

    .nav-container .nmaxs .nav-max-inner {
      justify-content: space-between;
    }

    .nav-container .nms {
      height: 60px;
      padding-top: .5rem;
      padding-bottom: .5rem;
    }

    .nav-container .nms a {
      height: auto;
    }

    .slide-hero2 .dt-only {
      padding-bottom: 25.35%;
      background-position-y: -50px;
    }

    .slide-hero2 .dt-only p {
      margin-bottom: 1rem;
    }

    #premium-cal {
      padding-top: 5em;
    }

    .box-purple-custom {
      border: 2px solid #EEEAF9;
      border-radius: 1rem;
      padding: 25px 25px;
      margin-top: 20px;
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

    .control {
      position: relative;
      box-sizing: border-box;
    }

    .control-input {
      position: absolute;
      opacity: 0;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      margin: 0;
      left: 0;
      top: calc(50% - 8px);
      width: 16px;
      height: 16px;
      pointer-events: none;
    }

    label {
      margin-bottom: 0px;
    }

    .control-label:after, .control-label:before {
      content: "";
      display: block;
      border: 1px solid transparent;
    }

    .control-label:after {
      position: absolute;
      top: calc(50% + 3px);
      /* top: 50%; */
      left: 7px;
      background-size: 60%;
      background-repeat: no-repeat;
      background-position: 50%;
      transform: scale(0);
      transition: transform .3s ease;
      width: 10px;
      height: 10px;
    }

    .control-label:before {
      border-color: #EEEAF9 !important;
      position: absolute;
      top: calc(50% - 9px);
      /* top: 50%; */
      left: 0;
      flex-shrink: 0;
      transition: border-color .3s ease;
      margin-right: .6rem;
      border-color: #e2e2e2;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, .05);
      background: #fff;
      border-radius: 2px;
      width: 24px;
      height: 24px;
    }

    .control-input[type=radio]+.control-label:before {
      border-radius: 100%;
    }

    .control-input[type=radio]+.control-label:after {
      background-color: #2F1761;
      border-radius: 50%;
    }

    .control-input:checked+.control-label:after {
      transform: translateY(-50%) scale(1.6) !important;
    }

    .control-input:checked+.control-label:before {
      border-color: #2F1761 !important;
    }

    .package-item.active {
      border-color: #2f1761;
      background-color: #fff;
      box-shadow: 1px 1px 1.75rem 0 rgba(122, 88, 191, 0.2);
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

    .btn-back-custom {
      color: #7A5BBF !important;
      padding: 20px 2rem;
      height: 80px;
      min-width: 288px;
      padding-left: 0;
      text-align: left;
    }

    .btn-back-custom:focus {
      box-shadow: none;
    }
  </style>

</head>

<body class="scroll-ready page-product-detail">

  <nav id="main-nav" class="nav-container toggle-on-top">
    <div class="nmax">
      <div class="nmaxs">
        <div class="tac-container-1">
          <div class="nav-max-inner">
            <a class="btn btn-back-custom" href="ipad_telesales">
              <img src="/assets/img/icons8_back.png" width="42px" style="display: inline-block;">
              <div style="display: inline-block; font-size: 18px;">เลือกผลิตภัณฑ์</div>
            </a>
            <a href="ipad_dashboard.blade.php" class="nmaxs__logo">
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
      <div class="nav-min-sticky nms align-items-center">
        <div style="display: flex; justify-content: space-between; width: 100%;">
          <a class="btn btn-back-custom" href="ipad_premium_cal"
            style="height: 43px; padding: .25rem 0; min-width: 72px;">
            <img src="/assets/img/icons8_back.png" width="42px" style="display: inline-block;">
          </a>
          <a href="ipad_dashboard.blade.php" class="nms__logo">
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

    <div class="plx-bgs">
      <div class="plx plx-prod-fullwidth" data-plx-trigger="#bg-full" data-plx-mt="16vw" data-plx-mul="0"></div>
      <div class="plx plx-prod-white-2" data-plx-trigger="#qna" data-plx-mt="-15vw" data-plx-mul="0"></div>
    </div>

    <section id="intro" data-onepage="ข้อมูล">
      <div class="slide slide-hero2" data-opt-nav="true">
        <!--	Slide Item -->
        <div class="slide-item layout-default">
          <div class="inner">
            <!--	Desktop -->
            <div class="dt-only" style="background-image: url(/images/Banner_Lumpsum.jpg)">
              <div class="content-wrap tac-container-1">
                <div class="content">
                  <h4 class="">ประกันสุขภาพออนไลน์</h4>
                  <h3 class="">แผนคุ้มรักษาเหมาจ่าย</h3>
                  <p>หมดกังวลเรื่องค่ารักษาพยาบาลด้วย<br class="dt-only">แผนคุ้มรักษาเหมาจ่าย จ่ายตามจริง<br class="dt-only">ทุกค่าใช้จ่ายในโรงพยาบาล</p>
                </div>
              </div>
            </div>
            <!--	Mobile -->
            <div class="mb-only">
              <div class="img-bg" style="background-image: url(/images/Banner_Lumpsum-mb.jpg)"></div>
              <div class="content-wrap tac-container-1">
                <div class="content">
                  <h4 class="">ประกันสุขภาพออนไลน์</h4>
                  <h3 class="">แผนคุ้มรักษาเหมาจ่าย</h3>
                  <p>ที่สุดของความคุ้มค่า ที่สามารถเปลี่ยนจำนวนเงินเอาประกันชีวิต เป็นค่ารักษาพยาบาลผู้ป่วยใน หลังอายุ 60 ปี</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--	End: Slide Item -->
      </div>
      <!--<div class="plx-prod-blue-banner"></div>-->
    </section>

    <section id="premium-cal">
      <div class="tac-container-1 color-primary">
        <h2 class="text-center" style="margin-bottom: 80px;">เริ่มกรอกข้อมูล เพื่อดูเบี้ยประกันที่เหมาะกับคุณ</h2>
        <h3 class="mb-4">ข้อมูลเกี่ยวกับคุณ</h3>
        <div id="formBuyInsurance" class="grid1">
          <div class="form-group col-6">
            <h4>เพศของคุณ</h4>
            <div class="pcat" style="margin-top: 20px; box-shadow: none; border: 2px solid #EEEAF9">
              <a class="pcat__item active">
                <div class="pcat__inner">
                  <div style="margin: 0 auto .75rem auto;">
                    <img src="/assets/img/icons8_user_male.png" width="68px">
                  </div>
                  <div class="pcat__content">
                    <span>ชาย</span>
                  </div>
                </div>
              </a>
              <a class="pcat__item">
                <div class="pcat__inner">
                  <div style="margin: 0 auto .75rem auto;">
                    <img src="/assets/img/icons8_female_user.png" width="68px">
                  </div>
                  <div class="pcat__content">
                    <span>หญิง</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="form-group col-6">
            <h4>วันเกิดของคุณ</h4>
            <div class="box-purple-custom">
              <div class="form-group text-left col-12 mt-3">
                <select data-placeholder="วัน / เดือน / ปีเกิดของคุณ (พ.ศ.)" id="birthdate" name="birthdate" class="form-control"
                  data-rule-required="true" data-msg-required="กรุณาใส่ข้อมูล">
                  <option selected>10/12/2530</option>
                </select>
                <p class="mt-3" style="color: #978BB0">เบี้ยประกัน จะแตกต่างกันตามเพศและอายุ ของผู้สมัครเอาประกันชีวิต</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="bg-full"></section>

    <section id="premium-cal-package" style="margin-bottom: 180px;">
      <div class="tac-container-1 color-primary">
        <h4>เลือกแพ็กเกจที่คุณสนใจ</h4>

        <div class="grid1">
          <div class="col-4">
            <div class="box-purple-custom package-item" style="padding:16px">
              <span>
                <div class="control">
                  <input id="package-super" type="radio" name="package-option" value="super" class="control-input" checked>
                  <label for="package-super" class="control-label">
                    <div style="margin-left: 40px; justify-content: space-between; display: flex; flex-direction: column; width: 100%;">
                      <h5 class="">แผน Super</h5>
                      <div class="mr-4 my-1">
                        <h3>1,650.00 <span style="font-size: medium; font-weight: 400;">บาท/เดือน</span></h3>
                      </div>
                      <a href="#" class="mt-2" style="color: #978BB0;">
                        <img src="/assets/img/icon-info.png" width="18px">
                        รายละเอียดเพิ่มเติม</a>
                    </div>
                  </label>
                </div>
              </span>
            </div>
          </div>
          <div class="col-4">
            <div class="box-purple-custom package-item" style="padding:16px">
              <span>
                <div class="control">
                  <input id="package-grand" type="radio" name="package-option" value="grand" class="control-input" checked>
                  <label for="package-grand" class="control-label">
                    <div style="margin-left: 40px; justify-content: space-between; display: flex; flex-direction: column; width: 100%;">
                      <h5 class="">แผน Grand</h5>
                      <div class="mr-4 my-1">
                        <h3>1,985.50 <span style="font-size: medium; font-weight: 400;">บาท/เดือน</span></h3>
                      </div>
                      <a href="#" class="mt-2" style="color: #978BB0;">
                        <img src="/assets/img/icon-info.png" width="18px">
                        รายละเอียดเพิ่มเติม</a>
                    </div>
                  </label>
                </div>
              </span>
            </div>
          </div>
          <div class="col-4">
            <div class="box-purple-custom package-item active" style="padding:16px">
              <span>
                <div class="control">
                  <input id="package-ultra" type="radio" name="package-option" value="ultra" class="control-input" checked>
                  <label for="package-ultra" class="control-label">
                    <div style="margin-left: 40px; justify-content: space-between; display: flex; flex-direction: column; width: 100%;">
                      <h5 class="">แผน Ultra</h5>
                      <div class="mr-4 my-1">
                        <h3>3,183.50 <span style="font-size: medium; font-weight: 400;">บาท/เดือน</span></h3>
                      </div>
                      <a href="#" class="mt-2" style="color: #978BB0;">
                        <img src="/assets/img/icon-info.png" width="18px">
                        รายละเอียดเพิ่มเติม</a>
                    </div>
                  </label>
                </div>
              </span>
            </div>
          </div>
          <div class="col-12">
            <div class="box-purple-custom mt-0" style="display: flex; justify-content: space-between; cursor: pointer;">
              <div>
                <h5 class="mb-0">
                  <img src="/assets/img/icon-plus.png" width="20px" class="mr-2">
                  สัญญาเพิ่มเติมค่ารักษาพยาบาลรายวัน แบบเฮชบี</h5>
              </div>
              <a href="#" class="" style="color: #978BB0;">
                <img src="/assets/img/icon-info.png" width="18px">
                รายละเอียดเพิ่มเติม</a>
            </div>
          </div>
        </div>

      </div>
    </section>

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
            <a class="btn btn-secondary" href="ipad_checkout">
              <span class="btn-text">ซื้อออนไลน์</span>
            </a>
          </div>
        </div>
      </div>
    </section>

<!-- <footer id="footer" class="footer">
      <div id="refFooterMb"></div>
      <div id="footerBlobMain"></div>
      <img id="footerBlobB1" src="/assets/img/blob-magenta-2.svg">
      <div class="tac-container-1">
        <div class="footer__content">
          <div class="footer__left">
            <div class="footer__time">
              <b>เวลาทําการ</b><br>
              วันจันทร์ - วันศุกร์<br>
              เวลา 8:30 - 17:30 น.
            </div>
            <div class=footer__tel>
              <span>โทร.</span>
              <a href="tel:020377899">02-037-7899</a>
            </div>
            <div class="footer__address">
              <b>สํานักงานใหญ่</b><br>
              บริษัท ไทยพาณิชย์ โพรเทค จำกัด<br>
              อาคาร จี ทาวเวอร์ แกรนด์พระราม 9 <br class="mb-only">ชั้น 20 เลขที่ 9 ถนนพระราม 9 ห้วยขวาง ห้วยขวาง กทม 10310
            </div>
          </div>
          <div class="footer__right">
            <div class="footer__socials">
              <a href="#" class="footer__social">
                <svg>
                  <use xlink:href="#ti-instagram-round"/>
                </svg>
              </a>
              <a href="#" class="footer__social">
                <svg>
                  <use xlink:href="#ti-twitter-round"/>
                </svg>
              </a>
              <a href="//www.facebook.com/scbprotect" target="_blank" class="footer__social">
                <svg>
                  <use xlink:href="#ti-facebook-round"/>
                </svg>
              </a>
              <a href="//lin.ee/9E4NbMH" target="_blank" class="footer__social">
                <svg>
                  <use xlink:href="#ti-line-round"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="footer__bottom">
            <div class="footer__cp">
              <a href="http://oiceservice.oic.or.th/">
                ตรวจสอบนายหน้า
              </a> |
              © สงวนลิขสิทธิ์ 2563<br class="d-md-none"/> บริษัท ไทยพาณิชย์ โพรเทค จำกัด
            </div>
          </div>
        </div>
      </div>
      <div class="footer__tel-bar">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </footer> -->

      <script src="/assets/js/jquery.validate.min.js"></script>
      <script src="/assets/js/select2.min.js"></script>
      <script type="text/javascript" src="/assets/js/app.js"></script>
    </div> <!--scroll-content-inner-->
  </div> <!--scroll-container-->
</body>

</html>
