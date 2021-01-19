
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <link rel="icon" type="image/png" sizes="32x32" href="https://scbprotect.co.th/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/app.css"/>
  <title>SCB PROTECT</title>
  <meta name="description"
    content="ประกันสุขภาพ แผนคุ้มรักษาเหมาจ่าย จ่ายทุกค่ารักษาพยาบาล หากคุณต้องนอนโรงพยาบาล ค่ารักษาเท่าไหร่ก็จ่ายตามนั้น อ่านข้อมูลเพิ่มเติมให้ที่ SCB PROTECT">
  <link rel="stylesheet" href="assets/css/smoot_scrollbar_style.css">

  <!-- custom style -->
  <style>
    .nav-container .nmaxs__logo {
      margin-right: 0;
    }

    .nav-container .nmaxs .nav-max-inner {
      justify-content: space-between;
      align-items: center;
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

    .list-work {
      list-style-type: none;
      padding-left: 0;
    }

    .list-work > a:hover > li {
      background-color: rgba(238, 234, 249, 0.5);
    }

    .list-work > a > li {
      padding-top: .75rem;
      padding-bottom: .75rem;
      border-top: 1px solid #EEEAF9;
      /* border-bottom: 1px solid #EEEAF9; */
    }

    .feat .feat-inner {
      padding: 1.5625rem 0rem 0rem 0rem;
    }
  </style>
</head>

<body class="scroll-ready page-product-detail">
  <svg class="d-none">
    <!-- blobs -->
    <symbol id="blob-hero-b1" viewBox="0 0 1263.71 1168.78" preserveAspectRatio="xMinYMin">
      <path fill="currentColor" d="M1154.71,893.74C990.59,1114.12,519.9,1291.56,209,1060S-16.57,379.91,147.55,159.53s549.24-211.31,860.18,20.26S1318.84,673.36,1154.71,893.74Z"/>
    </symbol>
    <symbol id="blob-hero-a1" viewBox="0 0 129.41 111.6" preserveAspectRatio="xMinYMin">
      <path fill="currentColor" d="M129.13,51.93c-2.55,26-34.54,63.31-74.59,59.38S-2.3,66.5.25,40.5,37.34-3.39,77.39.54,131.68,25.93,129.13,51.93Z"/>
    </symbol>
  </svg>

  <!--- Nav --->
  <nav id="main-nav" class="nav-container toggle-on-top">
    <div class="nmax">
      <div class="nmaxs">
        <div class="tac-container-1">
          <div class="nav-max-inner">
            <a href="#">
              <img src="assets/img/icons8_menu.png">
            </a>
            <a href="ipad_dashboard.blade.php" class="nmaxs__logo">
              <img src="assets/img/logo-scb-protect-long.png" alt="SCB Protect Logo">
            </a>
            <a href="#">
              <img src="assets/img/icons8_male_user.png">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!--- Nav: Min --->
    <div class="nav-min">
      <div class="nav-min-sticky nms align-items-center">
        <a href="#" style="height: 43px;">
          <img src="assets/img/icons8_menu.png">
        </a>
        <a href="ipad_dashboard.blade.php" class="nms__logo mx-auto">
          <img src="assets/img/logo-scb-protect-long.png" alt="SCB Protect Logo">
        </a>
        <a href="#" style="height: 43px;">
          <img src="assets/img/icons8_male_user.png">
        </a>
      </div>
    </div>
  </nav>


  <div id="stickyContainer">
    <div class="nav-padding"></div>
  </div>

  <div id="scrollContainer">
    <div class="scroll-content-inner">
      <div class="nav-padding"></div>

      <div class="plx-bgs">
        <div class="plx plx-prod-fullwidth" data-plx-trigger="#plans" data-plx-mt="0vw" data-plx-mul="0"></div>
        <div class="plx plx-prod-white-2" data-plx-trigger="#qna" data-plx-mt="-30vw" data-plx-mul="0"></div>
      </div>

      <section id="intro" data-onepage="ข้อมูล">
        <div class="tac-container-1">
          <div class="grid1">
            <div class="col-12">
              <div class="mt-4">
                <img src="images/banner-RED3-desktop.jpg" width="100%" style="border-radius: 1rem; box-shadow: 1px 1px 1.75rem 0 rgba(122, 88, 191, 0.2);">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="plans">
        <div class="tac-container-1 typo-2" data-sh=".feat h5">
          <div class="grid1 color-primary text-center">
            <div class="feat effect-item col-sm-6 col-lg-6">
              <div class="feat-inner">
                <div class="feat-content">
                  <h5 class="mb-3" style="font-size: 24px; font-weight: bold;">รายการรอดำเนินการ</h5>
                  <ul class="list-work">
                    <a href="ipad_telesales">
                      <li>
                        <p class="mb-2 color-primary" style="font-size: 20px; font-weight: bold;">คุณ ณัฐพล จิตตา</p>
                        <p class="mb-2 color-primary my-1" style="font-size: 16px;">098-4598760</p>
                        <p class="mb-2 mb-0" style="color: #7E7E7E; font-size: 16px;">Telesales: #1254789650</p>
                      </li>
                    </a>
                    <a href="#">
                      <li>
                        <p class="mb-2 color-primary" style="font-size: 20px; font-weight: bold;">คุณ วิทยา เกื้อหนุน</p>
                        <p class="mb-2 color-primary my-1" style="font-size: 16px;">065-5304680</p>
                        <p class="mb-2 mb-0" style="color: #7E7E7E; font-size: 16px;">Telesales: #1459389651</p>
                      </li>
                    </a>
                    <a href="#">
                      <li>
                        <p class="color-primary my-2" style="font-size: 16px; font-weight: bold;">รายการทั้งหมด</p>
                      </li>
                    </a>
                  </ul>
                </div>
              </div>
            </div>
            <div class="feat effect-item col-sm-6 col-lg-6">
              <div class="feat-inner">
                <div class="feat-content">
                  <h5 class="mb-3" style="font-size: 24px; font-weight: bold;">สิ่งที่ต้องทำวันนี้</h5>
                  <ul class="list-work">
                    <a href="#">
                      <li>
                        <p class="color-primary my-2" style="font-size: 16px; font-weight: bold;">ต่ออายุกรมธรรม์ คุณ นิตยา สวัสดี</p>
                      </li>
                    </a>
                    <a href="#">
                      <li>
                        <p class="color-primary my-2" style="font-size: 16px; font-weight: bold;">ต่ออายุกรมธรรม์ คุณ ธนา ศรีโท</p>
                      </li>
                    </a>
                    <a href="#">
                      <li>
                        <p class="color-primary my-2" style="font-size: 16px; font-weight: bold;">วันเกิด คุณ ไตรภพ ยุตรัตน์</p>
                      </li>
                    </a>
                    <a href="#">
                      <li>
                        <p class="color-primary my-2" style="font-size: 16px; font-weight: bold;">ชำระเบี้ยประกันรายเดือน คุณ สิงหา ธนาสวัสดิ์</p>
                      </li>
                    </a>
                    <a href="#">
                      <li>
                        <p class="color-primary my-2" style="font-size: 16px; font-weight: bold;">รายการทั้งหมด</p>
                      </li>
                    </a>
                  </ul>
                </div>
              </div>
            </div>
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
