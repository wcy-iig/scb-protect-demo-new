
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <link rel="icon" type="image/png" sizes="32x32" href="https://scbprotect.co.th/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="assets/js/jquery.min.js"></script>
  <title>PREMIUM CALCULATION | SCB PROTECT</title>

  <link rel="stylesheet" href="assets/css/app.css"/>
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

  <!--  Widget Code -->
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
  <noscript><a href="https://www.acquire.io?welcome" title="live chat software">Acquire</a></noscript>
  <!-- / Widget Code -->

</head>

<body class="scroll-ready page-product-detail">

  <nav id="main-nav" class="nav-container toggle-on-top">
    <div class="nmax">
      <div class="nmaxs">
        <div class="tac-container-1">
          <div class="nav-max-inner">
            <a class="btn btn-back-custom" href="ipad_telesales">
              <img src="assets/img/icons8_back.png" width="42px" style="display: inline-block;">
              <div style="display: inline-block; font-size: 18px;">เลือกผลิตภัณฑ์</div>
            </a>
            <a href="ipad_telesales" class="nmaxs__logo">
              <img src="assets/img/logo-scb-protect-long.png" alt="SCB Protect Logo">
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
          <a class="btn btn-back-custom" href="ipad_telesales"
            style="height: 43px; padding: .25rem 0; min-width: 72px;">
            <img src="assets/img/icons8_back.png" width="42px" style="display: inline-block;">
          </a>
          <a href="ipad_telesales" class="nms__logo">
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

    <div class="plx-bgs">
      <div class="plx plx-prod-fullwidth" data-plx-trigger="#bg-full" data-plx-mt="16vw" data-plx-mul="0"></div>
      <div class="plx plx-prod-white-2" data-plx-trigger="#qna" data-plx-mt="-15vw" data-plx-mul="0"></div>
    </div>

    <!-- <section id="intro" data-onepage="ข้อมูล">
      <div class="slide slide-hero2" data-opt-nav="true">
        <div class="slide-item layout-default">
          <div class="inner">
            <div class="dt-only" style="background-image: url(images/Banner_Lumpsum.jpg)">
              <div class="content-wrap tac-container-1">
                <div class="content">
                  <h3 class="mb-2">ประกันภัยสุขภาพและอุบัติเหตุ Viriyah Healthcare by BDMS</h3>
                  <p>คุ้มครอง คุ้มค่า ราคาเพื่อคนไทย</p>
                  <div style="display:flex; padding: 1rem 0.5rem; justify-content: space-around; width: 50%;">
                    <img src="images/viriyah-logo-transparent.png" style="height: 2rem; width: auto;">
                    <img src="images/logo-itic-bdms.png" class="mt-1" style="height: 2rem; width: auto;">
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-only">
              <div class="img-bg" style="background-image: url(images/Banner_Lumpsum-mb.jpg)"></div>
              <div class="content-wrap tac-container-1">
                <div class="content">
                  <h3 class="mb-2">ประกันภัยสุขภาพและอุบัติเหตุ Viriyah Healthcare by BDMS</h3>
                  <p>คุ้มครอง คุ้มค่า ราคาเพื่อคนไทย</p>
                  <div style="display:flex; padding: 1rem 0.5rem; justify-content: space-around; width: 100%;">
                    <img src="images/viriyah-logo-transparent.png" style="height: 2rem; width: auto;">
                    <img src="images/logo-itic-bdms.png" class="mt-1" style="height: 2rem; width: auto;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section id="intro" style="background-color: #978BB0;">
      <div class="tac-container-1">
        <div class="row">
          <div class="col-12">
            <img src="../../public/assets/images/VRHC-BY-BDMS-01.jpg" width="100%">
          </div>
        </div>
      </div>
    </section>

    <section id="bg-full"></section>

    <section id="premium-cal">
      <div class="tac-container-1 color-primary">
        <h2 class="text-center" style="margin-bottom: 80px;">ให้เราช่วยค้นหาแพ็กเกจที่เหมาะกับคุณ <a href="javascript:acquireIO.max('video')"> Start Video Call Now </a></h2>
      </div>
    </section>

    <!-- <div id="formBuyInsurance" class="color-primary">
      <data-fna></data-fna>
    </div> -->

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
                    <div
                      style="margin-left: 40px; justify-content: space-between; display: flex; flex-direction: column; width: 100%;">
                      <h5 class="">แผน Super</h5>
                      <div class="mr-4 my-1">
                        <h3>1,650.00 <span style="font-size: medium; font-weight: 400;">บาท/เดือน</span></h3>
                      </div>
                      <a href="#" class="mt-2" style="color: #978BB0;">
                        <img src="assets/img/icon-info.png" width="18px">
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
                    <div
                      style="margin-left: 40px; justify-content: space-between; display: flex; flex-direction: column; width: 100%;">
                      <h5 class="">แผน Grand</h5>
                      <div class="mr-4 my-1">
                        <h3>1,985.50 <span style="font-size: medium; font-weight: 400;">บาท/เดือน</span></h3>
                      </div>
                      <a href="#" class="mt-2" style="color: #978BB0;">
                        <img src="assets/img/icon-info.png" width="18px">
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
                    <div
                      style="margin-left: 40px; justify-content: space-between; display: flex; flex-direction: column; width: 100%;">
                      <h5 class="">แผน Ultra</h5>
                      <div class="mr-4 my-1">
                        <h3>3,183.50 <span style="font-size: medium; font-weight: 400;">บาท/เดือน</span></h3>
                      </div>
                      <a href="#" class="mt-2" style="color: #978BB0;">
                        <img src="assets/img/icon-info.png" width="18px">
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
                  <img src="assets/img/icon-plus.png" width="20px" class="mr-2">
                  สัญญาเพิ่มเติมค่ารักษาพยาบาลรายวัน แบบเฮชบี
                </h5>
              </div>
              <a href="#" class="" style="color: #978BB0;">
                <img src="assets/img/icon-info.png" width="18px">
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
            <h3>Viriyah Healthcare by BDMS</h3>
            <h5 style="color: #7A5BBF;">แผน Ultra</h5>
          </div>
          <div class="d-inline-flex align-items-center">
            <div class="mr-4">
              <h3>3,183.50 <span style="font-size: medium; font-weight: 400;">บาท/เดือน</span></h3>
            </div>
            <a class="btn btn-secondary" href="ipad_checkout">
              <span class="btn-text">ถัดไป</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script>
      // $(document).ready(function () {
      //   var fna_step = 1;

      //   fetch("/ipad/fna-1.html")
      //   .then(response => {
      //     return response.text()
      //   })
      //   .then(data => {
      //     document.querySelector("data-fna").innerHTML = data;
      //   });

      //   $(document).on("click", "a.fna-ans", function () {
      //     fna_step++;
      //     let fna_url = '/ipad/fna-'+fna_step+'.html';

      //     // section-premium-cal
      //     if(fna_step == 4) {
      //       fetch('/ipad/section-premium-cal.html')
      //         .then(response => {
      //           return response.text()
      //         })
      //         .then(data => {
      //           document.querySelector("data-fna").innerHTML = data;
      //         });

      //     } else {
      //       fetch(fna_url)
      //         .then(response => {
      //           return response.text()
      //         })
      //         .then(data => {
      //           document.querySelector("data-fna").innerHTML = data;
      //         });
      //     }
      //   });
      // });
    </script>
  </div> <!--scroll-content-inner-->
</div> <!--scroll-container-->
</body>

</html>
