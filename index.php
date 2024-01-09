<?php include './config.php' ?>
<!doctype html>
<html lang="<?=$userLanguage?>">

<head>
    <?php include './google/header.php' ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$_ENV['WEB_NAME']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/datepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/datepicker.override.css" />
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <?php include './google/body.php' ?>
    <div id="main-header" class="container-fluid text-white">
        <?php include './menu.php' ?>
        <div class="row pt-4 bg-linear-gradient">
            <div class="col-sm-12 col-md-7 col-lg-6 col-xl-5 offset-md-1 text-center text-md-start">
                <h3 class="mt-4 px-4"><?=__('main_title')?></h3>
                <h1 class="mb-4 px-4"><?=__('main_subtitle_a')?> <i><?=__('main_subtitle_b')?></i></h1>
            </div>
        </div>
        <div class="row pt-2 pb-3 bg-linear-gradient" id="section-purchase">
            <div class="col-sm-12 col-md-7 col-lg-6 col-xl-5 offset-md-1 mb-4 p-0">
                <div id="card-purchase" class="card text-white p-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center text-md-start">
                                <h2><?=__('purchase_title')?></h2>
                                <div class="alert alert-primary my-1 p-2" role="alert">
                                    <i class="fa-solid fa-circle-info"></i> <?=__('purchase_last')?>
                                </div>
                                <div class="alert alert-primary my-1 p-2" role="alert" id="totalAllowedError">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <?=__("purchase_error_limit", ['totalAllowed' => $totalAllowed])?>
                                </div>
                                <div class="alert alert-primary my-1 p-2" role="alert" id="nopickedDateError">
                                    <i class="fa-solid fa-circle-info"></i> <?=__('purchase_error_date')?>
                                </div>
                                <div class="alert alert-primary my-1 p-2" role="alert" id="nopickedQuantityError">
                                    <i class="fa-solid fa-circle-info"></i> <?=__('purchase_error_qty')?>
                                </div>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-12 col-md-6 d-flex d-md-none">
                                <p><?=__('parchase_input_a')?> <i class="fa-solid fa-circle-info ms-2"></i></p>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <label class="form-label d-none d-md-flex">
                                    <?=__('parchase_input_a')?> <i class="fa-solid fa-circle-info ms-2"></i>
                                </label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary btn-purchase-action btn-sub" type="button"
                                        data-input="a">-</button>
                                    <input id="purchase-input-a" type="text" class="form-control text-center"
                                        placeholder="" value="0" readonly>
                                    <button class="btn btn-outline-secondary btn-purchase-action btn-add" type="button"
                                        data-input="a">+</button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex d-md-none">
                                <p><?=__('parchase_input_b')?> <i class="fa-solid fa-circle-info ms-2"></i></p>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <label class="form-label d-none d-md-flex">
                                    <?=__('parchase_input_b')?> <i class="fa-solid fa-circle-info ms-2"></i>
                                </label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary btn-purchase-action btn-sub" type="button"
                                        data-input="b">-</button>
                                    <input id="purchase-input-b" type="text" class="form-control text-center"
                                        placeholder="" value="0" readonly>
                                    <button class="btn btn-outline-secondary btn-purchase-action btn-add" type="button"
                                        data-input="b">+</button>
                                </div>
                            </div>



                            <div class="col-12 col-md-6 d-flex d-md-none">
                                <p><?=__('parchase_input_b')?> <i class="fa-solid fa-circle-info ms-2"></i></p>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <label class="form-label d-none d-md-flex">
                                    <?=__('parchase_input_b')?> <i class="fa-solid fa-circle-info ms-2"></i>
                                </label>
                                <div class="input-group mb-3">
                                    <button class="btn btn-outline-secondary btn-purchase-action btn-sub" type="button"
                                        data-input="b">-</button>
                                    <input id="purchase-input-b" type="text" class="form-control text-center"
                                        placeholder="" value="0" readonly>
                                    <button class="btn btn-outline-secondary btn-purchase-action btn-add" type="button"
                                        data-input="b">+</button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex d-md-none">
                                <p><?=__('parchase_input_date')?></i></p>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <label class="form-label d-none d-md-flex">
                                    <?=__('parchase_input_date')?></i>
                                </label>
                                <div class="input-group mb-3">
                                    <input id="purchase-input-date" class="form-control text-center" value="0"
                                        placeholder="<?=$calendarDatePlaceholder?>" readonly>

                                </div>
                            </div>
                        </div>
                        <div class="row d-flex d-md-none">
                            <div class="col-sm-12 text-center">
                                <h2 id="totalAmount"><?=__('purchase_total')?></h2>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="button" class="btn btn-primary btn-submit">
                                    <?=__('purchase_button')?> <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row d-none d-md-flex">
                            <div class="col-md-6 text-center">
                                <button type="button" class="btn btn-primary btn-submit w-100">
                                    <?=__('purchase_button')?> <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                            <div class="col-md-6 text-center">
                                <h2 id="totalAmount"><?=__('purchase_total')?>: <span>0</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row text-center text-primary pb-2 px-2">
            <div class="col">
                <h2><b><?=__('welcome_title')?></b></h2>
            </div>
        </div>
        <div class="row text-center p-2">
            <div class="col">
                <p><?=__('welcome_text')?></p>
            </div>
        </div>
        <div class="row d-none d-md-flex mt-3">
            <div class="col-md-6">
                <h2><?=__('info_title')?></h2>
                <p><?=__('info_text_a')?></p>
                <p><?=__('info_text_b')?></p>
                <p><?=__('info_text_c')?></p>
                <p><?=__('info_text_d')?></p>
                <button type="button" class="btn btn-primary go-top">
                    <?=__('info_reserve')?> <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
            <div class="col-md-6 text-end d-md-flex flex-column">
                <img class="img-fluid flex-grow-1" src="img/welcome_pic.jpg" alt="welcome_pic" />
                <p class="pt-3 pe-4 mb-2">
                    <b><?=__('pic_title')?></b><br />
                    <i></i> <?=__('pic_subtitle')?>
                </p>
                <h4 class="pb-3 pe-4"><?=__('pic_text')?></h4>
            </div>
        </div>
        <div class="row d-flex d-md-none">
            <div class="col-sm-12 p-0 mb-2 text-end">
                <img class="img-fluid w-100" src="img/welcome_pic.jpg" alt="welcome_pic" />
                <p class="pt-3 pe-4 mb-2">
                    <b><?=__('pic_title')?></b><br />
                    <?=__('pic_subtitle')?>
                </p>
                <h4 class="pb-3 pe-4"><?=__('pic_text')?></h4>
            </div>
            <div class="col-sm-12 px-4">
                <h2 class="mb-4"><?=__('info_title')?></h2>
                <p><?=__('info_text_a')?></p>
                <p><a class="text-primary text-center my-2" data-bs-toggle="collapse" href="#collapseInfo" role="button"
                        aria-expanded="false" aria-controls="collapseInfo">
                        <?=__('main_read_more')?>
                    </a></p>
                <div class="collapse" id="collapseInfo">
                    <p><?=__('info_text_b')?></p>
                    <p><?=__('info_text_c')?></p>
                    <p><?=__('info_text_d')?></p>
                </div>
                <button type="button" class="btn btn-primary go-top w-100">
                    <?=__('info_reserve')?> <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
        </div>
        <div class="row my-4" id="section-schedule">
            <div class="col-sm-12 col-md-6 px-4 my-1 d-flex">
                <div class="card extra-info">
                    <div class="card-body">
                        <h2><img class="extra-info-icon me-2" src="img/icon_museo.svg" alt="icon_museo" />
                            <?=__('card_a_title')?></h2>
                        <div class="extra-info-separator"></div>
                        <p><?=__('card_a_item_a')?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 px-4 my-1 d-flex">
                <div class="card extra-info">
                    <div class="card-body">
                        <h2><img class="extra-info-icon me-2" src="img/icon_info.svg" alt="icon_museo" />
                            <?=__('card_b_title')?></h2>
                        <div class="extra-info-separator"></div>
                        <p><?=__('card_b_item_a')?></p>
                        <p><?=__('card_b_item_b')?></p>
                        <p><?=__('card_b_item_c')?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-none d-md-flex mt-3">
            <div class="col text-center text-white my-4">
                <div id="extra-info"></div>
                <h2><i><?=__('info_extra_title')?></i></h2>
                <h2 class="my-5 mx-2 px-4"><?=__('info_extra_subtitle')?></h2>
                <p><?=__('info_extra_text_a')?></p>
                <p><?=__('info_extra_text_b')?></p>
            </div>
        </div>
        <div class="row d-flex d-md-none  bg-explore">
            <div class="col-sm-12 p-0">
                <img class="img-fluid w-100" src="img/art_1.png" alt="art_1">
            </div>
            <div class="col-sm-12 p-4 text-center text-white bg-extra-info">
                <h2><i><?=__('info_extra_title')?></i></h2>
                <h2 class="my-5 mx-2 px-4"><?=__('info_extra_subtitle')?></h2>
                <p><?=__('info_extra_text_a')?></p>
                <p><?=__('info_extra_text_b')?></p>
            </div>
        </div>
        <div class="row d-none d-md-flex">
            <div class="d-flex col-md-4 p-0 m-0">
                <img class="img-fluid m-0 pe-2 pb-2" src="img/art_1.png" alt="art_1">
            </div>
            <div class="d-flex col-md-4 p-0 m-0">
                <img class="img-fluid m-0 pe-2 pb-2" src="img/art_2.png" alt="art_2">
            </div>
            <div class="d-flex col-md-4 p-0 m-0">
                <img class="img-fluid m-0 pb-2" src="img/art_3.png" alt="art_3">
            </div>
            <div class="d-flex col-md-4 p-0 m-0">
                <img class="img-fluid m-0 pe-2 pb-2" src="img/art_4.png" alt="art_4">
            </div>
            <div class="d-flex col-md-4 p-0 m-0">
                <img class="img-fluid m-0 pe-2 pb-2" src="img/art_5.png" alt="art_5">
            </div>
            <div class="d-flex col-md-4 p-0 m-0">
                <img class="img-fluid m-0 pb-2" src="img/art_6.png" alt="art_6">
            </div>
        </div>
        <div class="row text-center">
            <div class="col my-4">
                <button type="button" class="btn btn-primary go-top">
                    <?=__('info_reserve')?> <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row bg-explore">
            <div class="col-sm-12 col-md-6 py-4 px-0 p-sm-4 d-flex">
                <img class="img-fluid w-100" src="img/explore_pic.jpg" alt="explore_pic">
            </div>
            <div class="col-sm-12 col-md-6 text-white p-4">
                <h2 class="mb-4"><?=__('explore_title')?></h2>
                <p class="mb-4"><?=__('explore_text_a')?></p>
                <p><?=__('explore_text_b')?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center p-4 my-4" id="section-location">
            <div class="col text-primary">
                <h1><?=__('location_title')?></h1>
            </div>
        </div>
        <div class="row text-center my-2">
            <div class="col text-primary p-0">
                <a href="https://www.google.com/maps/place/Museo+Nacional+del+Prado/@40.4146136,-3.6960517,16z/data=!4m6!3m5!1s0xd42289d66d8a2ed:0x1094f07d93ad885a!8m2!3d40.4137818!4d-3.6921271!16zL20vMDFobHEz?hl=es&entry=ttu"
                    target="_blank">
                    <img class="img-fluid w-100" src="img/map_location.png" alt="map_location">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-7 offset-md-3 text-primary p-0">
                <div class="accordion p-2" id="accordionFlushExample">
                    <div class="accordion-item my-3 border border-secondary-subtle">
                        <img class="location-md-icon" src="img/icon_location_walk.svg" alt="icon_location_walk">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                <?=__('location_item_a_title')?>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <ul>
                                    <li class="my-2 mb-3"><?=__('location_item_a_item_a')?></li>
                                    <li class="mb-3"><?=__('location_item_a_item_b')?></li>
                                    <li class="mb-3"><?=__('location_item_a_item_c')?></li>
                                    <li class="mb-3"><?=__('location_item_a_item_d')?></li>
                                    <li class="mb-3"><?=__('location_item_a_item_e')?></li>
                                    <li class="mb-3"><?=__('location_item_a_item_f')?></li>
                                    <li class="mb-1"><?=__('location_item_a_item_g')?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-3 border border-secondary-subtle">
                        <img class="location-md-icon" src="img/icon_location_metro.svg" alt="icon_location_walk">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                <?=__('location_item_b_title')?>
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                FALTA
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-3 border border-secondary-subtle">
                        <img class="location-md-icon" src="img/icon_location_taxi.svg" alt="icon_location_taxi">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                <?=__('location_item_c_title')?>
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                FALTA
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-3 border border-secondary-subtle">
                        <img class="location-md-icon" src="img/icon_location_bus.svg" alt="icon_location_bus">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                <?=__('location_item_d_title')?>
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                FALTA
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-3 border border-secondary-subtle">
                        <img class="location-md-icon" src="img/icon_location_bike.svg" alt="icon_location_bike">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                <?=__('location_item_e_title')?>
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                FALTA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-rules" id="section-rules">
            <div class="col-sm-12 col-md-6 p-4">
                <h2 class="mb-4"><?=__('rules_title')?></h2>
                <ul class="mt-4 font-custompx">
                    <li class="my-3"><?=__('rules_text_a')?></li>
                    <li class="my-3"><?=__('rules_text_b')?></li>
                    <li class="my-3"><?=__('rules_text_c')?></li>
                    <li class="my-3"><?=__('rules_text_d')?></li>
                    <li class="my-3"><?=__('rules_text_e')?></li>
                    <li class="my-3"><?=__('rules_text_f')?></li>
                    <li class="my-3"><?=__('rules_text_g')?></li>
                    <li class="my-3"><?=__('rules_text_h')?></li>
                    <li class="my-3"><?=__('rules_text_i')?></li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-6 py-4 px-0 p-sm-4 d-md-flex flex-column text-end">
                <img class="img-fluid rule" src="img/rules_pic.jpg" alt="rules_pic">
                <div class="pt-3  mb-2 px-4 w-100">
                    <p class="w-75 float-end">
                        <i> <?=__('rules_notes')?></i>
                    </p>

                </div>
            </div>


        </div>
    </div>


    <?php include './footer.php' ?>
    <div class="modal fade" id="pickerModal" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="datepicker"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"><?=__('purchase_cancel')?></button>
                    <button type="button" class="btn btn-primary btn-submit"><?=__('purchase_reserve')?></button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/86165e0bbf.js" crossorigin="anonymous"></script>
    <script src="/js/datepicker.min.js"></script>
    <script>
    const pickerModalEl = document.getElementById('pickerModal')
    const pickerModal = new bootstrap.Modal(pickerModalEl)

    const currentDate = new Date()

    let totalValue = 0
    let datepickerValue = ""

    $(function() {
        $("#totalAllowedError, #nopickedDateError, #nopickedQuantityError").hide()

        $("#purchase-input-date").val("")
        $("#purchase-input-a").val(0)
        $("#purchase-input-b").val(0)

        const picker = datepicker("#datepicker", {
            autoClose: false,
            alwaysShow: true,
            startDay: 1,
            maxDate: addDays(currentDate, 60),
            minDate: currentDate,
            customMonths: <?=json_encode($calendarMonths)?>,
            customDays: <?=json_encode($calendarDaysAbbrev)?>,
            <?php if (count($calendarDisabledDates) > 0) { ?>
            disabledDates: [<?php for ($i=0; $i < count($calendarDisabledDates); $i++) { ?>
                new Date(<?=$calendarDisabledDates[$i][0]?>, <?=$calendarDisabledDates[$i][1]-1?>,
                    <?=$calendarDisabledDates[$i][2]?>
                ) <?=$i!=count($calendarDisabledDates)-1?',':''?>
                <?php } ?>
            ],
            events: [<?php for ($i=0; $i < count($calendarDisabledDates); $i++) { ?>
                new Date(<?=$calendarDisabledDates[$i][0]?>, <?=$calendarDisabledDates[$i][1]-1?>,
                    <?=$calendarDisabledDates[$i][2]?>
                ) <?=$i!=count($calendarDisabledDates)-1?',':''?>
                <?php } ?>
            ],
            <?php } ?>
            onShow: instance => $(
                ".qs-datepicker-container div.qs-num.qs-square:not(-qs-event):not(.qs-disabled):first"
            ).addClass('qs-first-available'),
            onSelect: (instance, d) => {
                datepickerValue = formatDate(d)
                $("#purchase-input-date").val(d.toLocaleDateString("<?=$userLanguage?>", {
                    year: "numeric",
                    month: "2-digit",
                    day: "2-digit",
                }))
            }
        })

        $("#datepicker-icon, #purchase-input-date").click(function(e) {
            e.stopPropagation()
            pickerModal.show()
        })

        $(".btn-purchase-action").click(function(e) {
            e.preventDefault()
            const $btn = $(this)
            const $input = $(`#purchase-input-${$btn.data('input')}`)
            const currentVal = +$input.val() || 0
            if ($btn.hasClass('btn-add')) {
                $input.val(currentVal < <?=$totalAllowed?> ? currentVal + 1 : <?=$totalAllowed?>)
            } else {
                $input.val(currentVal == 0 ? 0 : currentVal - 1)
            }
            calcular()
        })

        $(".go-top").click(function(e) {
            e.preventDefault()
            window.scrollTo({
                top: 110,
                behavior: 'smooth'
            })
        })

        $(".btn-submit").click(function(e) {
            e.preventDefault()
            $("#totalAllowedError").hide()
            const totalCount = (+$("#purchase-input-a").val()) + (+$("#purchase-input-b").val())
            if (datepickerValue.length != 10 || datepickerValue == "") {
                $("#nopickedDateError").show()
            } else if (totalCount > <?=$totalAllowed?>) {
                $("#totalAllowedError").show()
            } else if (totalValue > 0) {
                localStorage.setItem("fecha", datepickerValue)
                localStorage.setItem("fecha_formatted", $("#purchase-input-date").val())
                localStorage.setItem("qty_a", $("#purchase-input-a").val())
                localStorage.setItem("qty_b", $("#purchase-input-b").val())
                window.location.href = "compra.php"
            } else {
                $("#nopickedQuantityError").show()
            }
            pickerModal.hide()
        })
    })

    function addDays(date, days) {
        let result = new Date(date)
        result = result.setDate(result.getDate() + days)
        return new Date(result)
    }

    function formatDate(d) {
        return `${d.getFullYear()}-${("0" + (d.getMonth() + 1)).slice(-2)}-${("0" + d.getDate()).slice(-2)}`
    }

    function calcular() {
        totalValue = +$("#purchase-input-a").val() * <?=$amountValues['qtya'] ?? 0?> +
            +$("#purchase-input-b").val() * <?=$amountValues['qtyb'] ?? 0?>;
        if (totalValue > 0) {
            $("#totalAmount > span").text(`€${totalValue}`)
            localStorage.setItem("total", totalValue + "€")
        } else {
            $("#totalAmount > span").text("€0")
        }
    }

    pickerModalEl.addEventListener('shown.bs.modal', function(event) {
        $(".qs-datepicker-container div.qs-num.qs-square:not(-qs-event):not(.qs-disabled):first").css({
            'color': 'var(--bs-blue, #0d6efe)',
            'font-weight': 'bold'
        })
    })

    calcular()

    window.addEventListener("pageshow", function() {
        calcular()
    }, false)
    </script>
</body>

</html>