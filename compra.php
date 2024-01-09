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
    <div id="purchase-header" class="container-fluid text-white">
        <?php include './menu.php' ?>
        <div class="row py-4 bg-linear-gradient">
            <div class="col-sm-12 col-md-7 col-lg-6 col-xl-5 offset-md-1 text-center text-md-start py-4">
                <h3 class="mt-4 px-4"><i><?=__('confirm_title')?></i></h3>
                <h1 class="mb-4 px-4"><?=__('confirm_subtitle')?></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row d-block d-md-none bg-white p-4">
            <div class="col">
                <h4 class="text-primary"><img class="purchase-icon me-1 pb-1" src="img/icon_calendar.svg" alt="icon_calendar"> <span  class="purchase-value-date"><?=$calendarDatePlaceholder?></span></h4>
                <h4 class="text-primary mb-4"><img class="purchase-icon me-1 pb-1" src="img/icon_clock.svg" alt="icon_clock"> <?=__('confirm_schedule')?></h4>
                <p><img class="purchase-icon-sub me-1 pb-1" src="img/icon_headset.svg" alt="icon_headset"><span class="purchase-value-qty-a"></span> <?=__('confirm_item_a')?></p>
                <p><img class="purchase-icon-sub me-1 pb-1" src="img/icon_percent.svg" alt="icon_percent"><span class="purchase-value-qty-b"></span> <?=__('confirm_item_b')?></p>
                <p><img class="purchase-icon-sub me-1 pb-1" src="img/icon_euro.svg" alt="icon_euro"><span class="purchase-value-qty-c"></span> <?=__('confirm_item_c')?></p>
                <h3 class="text-primary my-4"><?=__('purchase_total')?>: <span class="purchase-value-total">0</span></h3>
                <div class="alert alert-primary my-3 p-2 text-center" role="alert">
                    <i class="fa-solid fa-circle-info"></i> <?=__('purchase_last')?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-xl-5 offset-xl-1 d-none d-md-block p-4">
                <div class="row">
                    <div class="col-sm-12 col-md-6 mb-2">
                        <p class="fw-bold text-primary">
                            <img class="purchase-icon me-1 pb-1" src="img/icon_calendar.svg" alt="icon_calendar">
                            <span class="purchase-value-date"><?=$calendarDatePlaceholder?></span>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 mb-2">
                        <p class="text-primary fw-bold">
                            <img class="purchase-icon me-1 pb-1" src="img/icon_clock.svg" alt="icon_clock"> <?=__('confirm_schedule')?>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <p><img class="purchase-icon-sub me-1 pb-1" src="img/icon_headset.svg" alt="icon_headset"><span class="purchase-value-qty-a"></span> <?=__('confirm_item_a')?></p>
                        <p><img class="purchase-icon-sub me-1 pb-1" src="img/icon_percent.svg" alt="icon_percent"><span class="purchase-value-qty-b"></span> <?=__('confirm_item_b')?></p>
                        <p><img class="purchase-icon-sub me-1 pb-1" src="img/icon_euro.svg" alt="icon_euro"><span class="purchase-value-qty-c"></span> <?=__('confirm_item_c')?></p>
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex justify-content-start align-items-end">
                        <h2 class="text-primary"><?=__('purchase_total')?>: <span class="purchase-value-total">0</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-primary my-1 p-2 text-center" role="alert">
                            <i class="fa-solid fa-circle-info"></i> <?=__('purchase_last')?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-5 p-4 border-start">
                <h4 class="text-primary"><?=__('confirm_body_title')?></h4>
                <h4 class="mb-4"><?=__('confirm_body_subtitle')?></h4>
                <form id="checkout-form">
                    <div class="mb-3">
                        <label for="confirm-input-firstname" class="form-label d-none d-md-flex">
                            <?=__('confirm_body_firstname')?>
                        </label>
                        <input id="confirm-input-firstname" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-input-lastname" class="form-label d-none d-md-flex">
                            <?=__('confirm_body_lastname')?>
                        </label>
                        <input id="confirm-input-lastname" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-input-email" class="form-label d-none d-md-flex">
                            <?=__('confirm_body_email')?>
                        </label>
                        <input id="confirm-input-email" type="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm-input-email-verify" class="form-label d-none d-md-flex">
                            <?=__('confirm_body_email_verify')?>
                        </label>
                        <input id="confirm-input-email-verify" type="email" class="form-control" required>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label" for="flexCheckDefault">
                            <?=__('confirm_terms')?> <a class="text-primary" href="#!"><?=__('footer_legal_terms')?></a>
                        </label>
                    </div>
                    <div class="text-center text-md-start">
                        <button type="submit" class="btn btn-primary my-2 px-4">
                            <span class="px-4"><?=__('confirm_button')?> <i class="fa-solid fa-arrow-right-long"></i></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include './footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/86165e0bbf.js" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
          $(".purchase-value-date").text(localStorage.getItem('fecha_formatted') || "");
          $(".purchase-value-qty-a").text(localStorage.getItem('qty_a') || "0");
          $(".purchase-value-qty-b").text(localStorage.getItem('qty_b') || "0");
          $(".purchase-value-total").text(localStorage.getItem('total') || "0");
          
          $(this).on('submit', 'form#checkout-form', function(e){
            e.preventDefault();
            
            $("#confirm-input-email, #confirm-input-email-verify").removeClass('is-invalid');

            const regexEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            const regexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,6}$/im;
            
            if (!regexEmail.test($("#confirm-input-email").val())) {
              $("#confirm-input-email").addClass('is-invalid');
              return false;
            }
            
            if (!regexEmail.test($("#confirm-input-email-verify").val())) {
              $("#confirm-input-email-verify").addClass('is-invalid');
              return false;
            }

            if ($("#confirm-input-email").val().toLowerCase() != $("#confirm-input-email-verify").val().toLowerCase()) {
              $("#confirm-input-email, #confirm-input-email-verify").addClass('is-invalid');
              return false;
            }

            let redsys = document.createElement("form");
                redsys.setAttribute("method", "post");
                redsys.setAttribute("action", "<?=$_ENV['CHECKOUT_URL']?>");
                
            let input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "rdate");
            input.setAttribute("value", localStorage.getItem('fecha'));
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "rtime");
            input.setAttribute("value", "00:00");
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "qty_a");
            input.setAttribute("value", localStorage.getItem('qty_a') || "0");
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "qty_b");
            input.setAttribute("value", localStorage.getItem('qty_b') || "0");
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "qty_c");
            input.setAttribute("value", '0');
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "total");
            input.setAttribute("value", $("#total").text().replace('€', ''));
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "firstname");
            input.setAttribute("value", encodeURIComponent($("#confirm-input-firstname").val()));
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "lastname");
            input.setAttribute("value", encodeURIComponent($("#confirm-input-lastname").val()));
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "email");
            input.setAttribute("value", $("#confirm-input-email").val());
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "phone");
            input.setAttribute("value", '123456789');
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "redirect");
            input.setAttribute("value", '<?=$_ENV['REDIRECT_URL']?>');
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "description");
            input.setAttribute("value", "<?=$_ENV['WEB_NAME']?>");
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "attraction");
            input.setAttribute("value", "<?=$_ENV['ATTRACTION_ID']?>");
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "lang");
            input.setAttribute("value", "<?=$userLanguage?>");
            redsys.appendChild(input);

            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "currency");
            input.setAttribute("value", "<?=$userCurrency?>");
            redsys.appendChild(input);

            <?php if ($_ENV['SYSTEM_ENV'] !== 'PRODUCTION') { ?>
            input = document.createElement("input");
            input.setAttribute("type", "text");
            input.setAttribute("name", "test_mode");
            input.setAttribute("value", "<?=$_ENV['SYSTEM_KEY']?>");
            redsys.appendChild(input);
            <?php } ?>

            document.body.appendChild(redsys);
            redsys.submit();
          });
        });
    </script>
  </body>
</html>