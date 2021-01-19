<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <link rel="icon" type="image/png" sizes="32x32" href="https://scbprotect.co.th/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="assets/js/jquery.min.js"></script>
  <title>TELESALES | SCB PROTECT</title>

  <link rel="stylesheet" href="assets/css/app.css" />
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

    .box-purple-custom {
      border: 2px solid #EEEAF9;
      border-radius: 1rem;
      padding: 25px 25px;
      margin-top: 20px;
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

    .btn-outline-primary {
      border: 1px solid #2F1761;
      background-color: #ffffff;
    }
  </style>
</head>

<body class="scroll-ready page-product-detail">

  <nav id="main-nav" class="nav-container toggle-on-top">
    <div class="nmax">
      <div class="nmaxs">
        <div class="tac-container-1">
          <div class="nav-max-inner">
            <!-- <a class="btn btn-back-custom" href="ipad_dashboard.blade.php">
              <img src="assets/img/icons8_back.png" width="42px" style="display: inline-block;">
              <div style="display: inline-block; font-size: 18px;">หน้าแรก</div>
            </a> -->
            <div style="width: 288px;"></div>
            <a href="ipad_telesales" class="nmaxs__logo">
              <img src="assets/img/logo-scb-protect-long.png" alt="SCB Protect Logo">
            </a>
            <div class="progressbox">
              <ul class="progressbar">
                <li class="done"></li>
                <li></li>
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
          <!-- <a class="btn btn-back-custom" href="ipad_premium_cal"
            style="height: 43px; padding: .25rem 0; min-width: 72px;">
            <img src="assets/img/icons8_back.png" width="42px" style="display: inline-block;">
          </a> -->
          <div style="width: 72px;"></div>
          <a href="ipad_dashboard.blade.php" class="nms__logo">
            <img src="assets/img/logo-scb-protect-long.png" alt="SCB Protect Logo">
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

      <section id="telesales" class="pt-2">
        <div class="tac-container-1 color-primary">
          <div class="grid1 align-items-end">
            <div class="col-md-10 col-12">
              <h3 class="mt-4">สวัสดี คุณ ณัฐพล จิตตา</h3>
              <p>รายการจาก Telesales: #1254789650</p>
            </div>
            <div class="col-md-2 col-12 text-md-right text-left">
              <a href="#" style="color: #7A5BBF;">
                <img src="assets/img/icons8_edit.png" width="20px" style="display: inline-block; margin-top: -2px;">
                <div style="display: inline-block;">แก้ไข</div>
              </a>
            </div>
          </div>
          <div class="grid1">
            <div class="col-12 pt-0">
              <div class="box-purple-custom py-0">
                <div class="grid-2-col pt-4 pb-2">
                  <div class="form-group col-lg-4 col-md-6 col-12">
                    <p class="mb-1">ชื่อ-นามสกุล</p>
                    <h4>ณัฐพล จิตตา</h4>
                  </div>
                  <div class="form-group col-lg-4 col-md-6 col-12">
                    <p class="mb-1">เพศ</p>
                    <h4>ชาย</h4>
                  </div>
                  <div class="form-group col-lg-4 col-md-6 col-12">
                    <p class="mb-1">วันเกิด</p>
                    <h4>22/04/2532</h4>
                  </div>
                  <div class="form-group col-lg-4 col-md-6 col-12">
                    <p class="mb-1">สถานภาพ</p>
                    <h4>โสด</h4>
                  </div>
                  <div class="form-group col-lg-4 col-md-6 col-12">
                    <p class="mb-1">อาชีพ</p>
                    <h4>พนักงานบริษัทเอกชน</h4>
                  </div>
                  <div class="form-group col-lg-4 col-md-6 col-12">
                    <p class="mb-1">ต้องการหาประกันให้</p>
                    <h4>ตัวเอง</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="plans" style="padding-bottom: 3rem;">
        <div class="tac-container-1">
          <div class="grid1 color-primary">
            <div class="col-md-10 col-12">
              <h3>ผลิตภัณฑ์ที่เหมาะกับคุณ</h3>
            </div>
            <div class="col-md-2 col-12 text-md-right text-left">
              <a href="#" style="color: #2F1761;">
                <div style="display: inline-block;">ผลิตภัณฑ์ทั้งหมด</div>
                <img src="assets/img/icon-chevron-right-pp.svg">
              </a>
            </div>
          </div>

          <div class="plist-cnt grid1 mt-3" style="opacity: 1; transition: opacity 0.2s ease 0s, height 0.2s ease 0s;">
            <!-- item -->
            <div class="card1 effect-item mx-auto" data-type="health">
              <div class="card1__inner">
                <div class="card1__figure">
                  <!-- <img src="images/lumpsum-thumb-up.jpg"> -->
                  <img src="assets/VRHC-BY-BDMS-02.jpg">
                </div>
                <div class="card1__content">
                  <h4 class="card1__title-top color-cyan">ประกันสุขภาพ</h4>
                  <h3 class="card1__title">Viriyah Healthcare by BDMS</h3>
                  <p class="card1__text">คุ้มครอง คุ้มค่า ราคาเพื่อคนไทย<br class="dt-only"><br
                      class="mb-only">เจ็บป่วย วิริยะจ่าย BDMS รักษา</p>
                  <div class="text-center pt-2">
                    <a class="btn btn-block btn-step btn-secondary" href="ipad_premium_cal">
                      <span class="btn-text">เลือก</span>
                    </a>
                    <a class="btn btn-block btn-outline-primary mt-3" href="ipad_product_detail.blade.php">
                      <span class="btn-text">อ่านเพิ่มเติม</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- end item -->
            <!-- item -->
            <div class="card1 effect-item mx-auto" data-type="protection">
              <div class="card1__inner">
                <div class="card1__figure">
                  <img src="assets/employee-thumb-up.jpg">
                </div>
                <div class="card1__content">
                  <h4 class="card1__title-top">ประกันเพื่อความคุ้มครอง</h4>
                  <h3 class="card1__title">แผนคุ้มตลอดชีพมั่นคง</h3>
                  <p class="card1__text">ที่สุดของความคุ้มค่า ที่สามารถเปลี่ยนจำนวนเงินเอาประกันชีวิต เป็นค่ารักษาพยาบาลผู้ป่วยใน</p>
                  <div class="text-center pt-2">
                    <a class="btn btn-block btn-step btn-secondary" href="#">
                      <span class="btn-text">เลือก</span>
                    </a>
                    <a class="btn btn-block btn-outline-primary mt-3" href="#">
                      <span class="btn-text">อ่านเพิ่มเติม</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- end item -->
            <!-- item -->
            <div class="card1 effect-item mx-auto" data-type="saving">
              <div class="card1__inner">
                <div class="card1__figure">
                  <img src="{{asset('assets/img/aomsook-thumb-up.jpg')}}">
                </div>
                <div class="card1__content">
                  <h4 class="card1__title-top color-secondary">ประกันเพื่อการออม</h4>
                  <h3 class="card1__title">แผนคุ้มออมสุข</h3>
                  <p class="card1__text">เริ่มออมหลักร้อย สู่ฝันหลักแสน <br>พร้อมรับเงินคืนทุกปี</p>
                  <div class="text-center pt-2">
                    <a class="btn btn-block btn-step btn-secondary" href="#">
                      <span class="btn-text">เลือก</span>
                    </a>
                    <a class="btn btn-block btn-outline-primary mt-3" href="#">
                      <span class="btn-text">อ่านเพิ่มเติม</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- end item -->
          </div>
        </div>
      </section>



      <script src="assets/js/jquery.validate.min.js"></script>
      <script src="assets/js/select2.min.js"></script>
      <script type="text/javascript" src="assets/js/app.js"></script>
    </div> <!--scroll-content-inner-->
  </div> <!--scroll-container-->
</body>

</html>
