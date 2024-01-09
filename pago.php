<?php include './config.php' ?>
<!doctype html>
<html lang="<?=$userLanguage?>">
  <head>
    <?php include './google/header.php' ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$_ENV['WEB_NAME']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body class="bg-grey">
    <?php include './google/body.php' ?>
    <div id="main-header" class="container-fluid text-white">
        <?php include './menu.php' ?>
    </div>
    <div class="container">
        <div class="row py-4 mb-4">
            <div class="col text-center">
                <?php if (isset($_GET['status']) && $_GET['status'] == 'ok') { ?>
                <img src="img/ok.png" alt="ok" class="purchase-response-icon" />
                <h4><?=__('checkout.ok1')?></h4>
                <br/>
                <p><b><?=__('checkout.ok3', ['redsysID' => @$_GET['oid'] ?? "-"])?></b></p>
                <br/>
                <p><?=__('checkout.ok4')?></p>
                <a href="/" class="btn btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_continue')?></a>
                <?php } else if (isset($_GET['status']) && $_GET['status'] == 'ko') { ?>
                <img src="img/warning.png" alt="denied" class="purchase-response-icon" />
                <h4><?=__('checkout.denied1')?></h4>
                <br/>
                <p><?=__('checkout.denied2')?></p>
                <p><?=__('checkout.denied3')?></p>
                <a href="/" class="btn btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_retry')?></a><br/>
                <a href="javascript:void(0)" class="btn btn-chat btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_chat')?></a>
                <?php } else { ?>
                <img src="img/ko.png" alt="error" class="purchase-response-icon" />
                <h4><?=__('checkout.failed1')?></h4>
                <br/>
                <p><?=__('checkout.failed2')?></p>
                <p><?=__('checkout.failed3')?></p>
                <a href="/" class="btn btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_retry')?></a><br/>
                <a href="javascript:void(0)" class="btn btn-chat btn-primary px-4 mt-2 text-uppercase"><?=__('checkout.btn_chat')?></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include './footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/86165e0bbf.js" crossorigin="anonymous"></script>
  </body>
</html>