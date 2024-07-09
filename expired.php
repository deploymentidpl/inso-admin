<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <?php require_once("include/inc-head.php"); ?>
  <style>
    .expired-detail {
      height: 100vh;
      padding: 60px;
      text-align: center;
      display: flex;
      flex-direction: column;
      gap: 24px;
      align-items: center;
      justify-content: center;
      background-color: var(--danger-color);
    }

    .expired-detail h1 {
      font-size: 60px;
      line-height: 66px;
      font-weight: 800;
      color: #ffffff;
    }

    .expired-detail h2 {
      color: #ffffff;
      font-size: 48px;
      line-height: 48px;
      font-weight: 600;
    }

    .expired-page {
      padding: 0;
    }

    @media screen and (max-width: 1499px) {
      .expired-detail h1 {
        font-size: 48px;
        line-height: 54px;
      }

      .expired-detail h2 {
        font-size: 36px;
        line-height: 40px;
      }

      .expired-detail {
        padding: 30px;
      }
    }

    @media screen and (max-width: 767px) {

      .expired-detail h1 {
        font-size: 30px;
        line-height: 36px;
      }

      .expired-detail h2 {
        font-size: 24px;
        line-height: 28px;
      }

      .expired-detail {
        gap: 16px;
      }
    }
  </style>
</head>

<body class="expired-page">
  <div class="expired-detail">
    <h1>You subscription has been expired.</h1>
    <h2>Kindly renew it</h2>
    <a class="btn btn-white" href="mailto:">Contact Support</a>
  </div>
</body>

</html>