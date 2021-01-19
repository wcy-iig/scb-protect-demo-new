<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="https://scbprotect.co.th/favicon-32x32.png">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="assets/css/app.css" />
  <title>PURCHASE SUCCESS | SCB PROTECT</title>
  <link rel="stylesheet" href="assets/css/smoot_scrollbar_style.css">

  <!-- custom style -->
  <style>
    .scroll-content-inner {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .page-product-detail #features {
      padding: 6rem 0 0rem 0;
    }

    #footer {
      z-index: -1;
    }

    #footer .tac-container-1 {
      position: absolute;
      bottom: 1em;
    }

    @media (min-width: 992px) {
      .footer {
        overflow: visible;
        height: 28.33333vh;
      }

      #footerBlobMain {
        top: -9.17708vw;
      }

      .footer__bottom {
        margin-bottom: 1em;
      }
    }


    @media (max-width: 991px) {
      .footer {
        height: 50vw;
      }

      .footer__content {
        padding: 7em 0 0em 0;
      }

      .footer__bottom {
        margin-bottom: 0em;
      }
    }

  </style>
</head>

<body>

<body class="scroll-ready page-product-detail">
<!--- Nav --->
<nav id="main-nav" class="nav-container">
  <div class="nmax">
    <div class="nmaxs">
      <div class="tac-container-1">
        <div class="nav-max-inner">
          <a href="online_premium_cal.blade.php" class="nmaxs__logo mx-auto">
            <img src="assets/img/logo-scb-protect-long.png" alt="SCB Protect Logo">
          </a>
        </div>
      </div>
    </div>
  </div>

  <!--- Nav: Min --->
  <div class="nav-min">
    <div class="nav-min-sticky nms">
      <a href="online_premium_cal.blade.php" class="nms__logo mx-auto">
        <img src="assets/img/logo-scb-protect-long.png" alt="SCB Protect Logo">
      </a>
    </div>
  </div>
</nav>

<!--- Scroll Container --->
<div id="scrollContainer">
  <div class="scroll-content-inner">
    <div class="nav-padding"></div>

    <section id="features">
      <div class="tac-container-1 typo-2">
        <div class="color-primary">
          <!-- feat item -->
          <div class="feat effect-item col-10 col-md-8 col-lg-6 col-fhd-4 offset-fhd-4 offset-lg-3 offset-md-2 offset-1">
            <div class="feat-inner">
              <div class="feat-icon">
                <img src="assets/img/icon-success.png" alt="SCB Protect Purchase Success">
              </div>
              <div class="feat-content">
                <h6 style="color: #7A5BBF; text-align: center;">ชำระเงินสำเร็จแล้ว</h6>
                <h5><span class="color-primary">ความคุ้มครองเริ่มต้นแล้ว</span></h5>
                <p class="text-center" style="color: #7e7e7e; font-size: medium;">หมายเลขคำสั่งซื้อ SCBP938106</p>
                <p class="mt-4 mb-4 text-center" style="font-size: large;">ใบเสร็จรับเงินจะถูกส่งไปยังอีเมลที่ท่านได้ลงทะเบียนไว้<br
                        class="dt-only">ขอขอบคุณที่ไว้วางใจ ให้ SCB Protect ได้ดูแลคุณ</p>
                <div class="buttons text-center pt-2">
                  <a class="btn btn-primary-flat" href="Website-FNA.blade.php">
                    <span class="btn-text">กลับสู่หน้าหลัก</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- End: feat item -->
        </div>
      </div>
    </section>

    <footer id="footer" class="footer">
      <div id="refFooterMb"></div>
      <div id="footerBlobMain"></div>
      <img id="footerBlobB1" src="assets/img/blob-magenta-2.svg">
      <div class="tac-container-1">
        <div class="footer__content">
          <div class="footer__bottom">
            <div class="footer__cp text-center" style="font-size: medium;">
              © สงวนลิขสิทธิ์ 2563<br class="d-md-none" /> บริษัท ไทยพาณิชย์ โพรเทค จำกัด
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
    </footer>

    <script type="text/javascript" src="assets/js/app.js"></script>
  </div>
  <!--scroll-content-inner-->
</div>
<!--scroll-container-->
</body>

</body>

</html>
