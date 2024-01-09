    <!-- Card Desinging     -->

    <!-- Mobile View Card Design Start  -->
    <div class="container-fluid">
        <div class="row d-block  d-sm-none d-md-none ">
            <div class="col-12 text-center">
                <div class="card  text-white bg-dark">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="fw-bolder ">No te quedes sin entrar.
                                    Reserva tus entradas ahora.</h2>
                                <p class="text-white-50">
                                    Compra tus entradas anticipadas: la única manera de asegurar tu visita.
                                    Sumérgete en la
                                    impresionante pinacoteca y las esculturas de ensueño del Museo del Prado de
                                    Madrid.
                                </p>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-6 d-flex d-md-none ">
                                        <p><?=__('parchase_input_b')?> <i class="fa-solid fa-circle-info ms-2"></i></p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label d-none d-md-flex ">
                                            <?=__('parchase_input_b')?> <i class="fa-solid fa-circle-info ms-2"></i>
                                        </label>
                                        <div class="input-group mb-3">
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-sub"
                                                type="button" data-input="b">-</button>
                                            <input id="purchase-input-b" type="text" class="form-control text-center"
                                                placeholder="" value="0" readonly>
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-add"
                                                type="button" data-input="b">+</button>
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
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-sub"
                                                type="button" data-input="b">-</button>
                                            <input id="purchase-input-b" type="text" class="form-control text-center"
                                                placeholder="" value="0" readonly>
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-add"
                                                type="button" data-input="b">+</button>
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
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-sub"
                                                type="button" data-input="b">-</button>
                                            <input id="purchase-input-b" type="text" class="form-control text-center"
                                                placeholder="" value="0" readonly>
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-add"
                                                type="button" data-input="b">+</button>
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
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-sub"
                                                type="button" data-input="b">-</button>
                                            <input id="purchase-input-b" type="text" class="form-control text-center"
                                                placeholder="" value="0" readonly>
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-add"
                                                type="button" data-input="b">+</button>
                                        </div>
                                    </div>
                                    <div class="row d-flex d-md-none">
                                        <div class="col12 text-center">
                                            <h2 id="totalAmount"><?=__('purchase_total')?></h2>
                                        </div>
                                        <div class="col12 text-center">
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
            </div>
        </div>
    </div>
    <!-- Mobile View Card Design End  -->



    <div class="container-fluid bg-footer text-white px-4 footer-desgning">


        <!-- Desktop View Card Design Start -->
        <div class="row d-none  d-md-block ">
            <div class="offset-0 col-12 col-md-10 position-absolute  offset-md-1">
                <div class="card mx-4 shadow-lg custimzed-card py-4 py-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="fw-bolder ">No te quedes sin entrar.
                                    Reserva tus entradas ahora.</h2>
                                <p class="text-white-50">
                                    Compra tus entradas anticipadas: la única manera de asegurar tu visita.
                                    Sumérgete en la
                                    impresionante pinacoteca y las esculturas de ensueño del Museo del Prado de
                                    Madrid.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-12 col-md-6 d-flex d-md-none ">
                                        <p><?=__('parchase_input_b')?> <i class="fa-solid fa-circle-info ms-2"></i></p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label d-none d-md-flex ">
                                            <?=__('parchase_input_b')?> <i class="fa-solid fa-circle-info ms-2"></i>
                                        </label>
                                        <div class="input-group mb-3">
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-sub"
                                                type="button" data-input="b">-</button>
                                            <input id="purchase-input-b" type="text" class="form-control text-center"
                                                placeholder="" value="0" readonly>
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-add"
                                                type="button" data-input="b">+</button>
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
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-sub"
                                                type="button" data-input="b">-</button>
                                            <input id="purchase-input-b" type="text" class="form-control text-center"
                                                placeholder="" value="0" readonly>
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-add"
                                                type="button" data-input="b">+</button>
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
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-sub"
                                                type="button" data-input="b">-</button>
                                            <input id="purchase-input-b" type="text" class="form-control text-center"
                                                placeholder="" value="0" readonly>
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-add"
                                                type="button" data-input="b">+</button>
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
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-sub"
                                                type="button" data-input="b">-</button>
                                            <input id="purchase-input-b" type="text" class="form-control text-center"
                                                placeholder="" value="0" readonly>
                                            <button class="btn btn-outline-secondary btn-purchase-action btn-add"
                                                type="button" data-input="b">+</button>
                                        </div>
                                    </div>
                                    <div class="row d-flex d-md-none">
                                        <div class="col12 text-center">
                                            <h2 id="totalAmount"><?=__('purchase_total')?></h2>
                                        </div>
                                        <div class="col12 text-center">
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
            </div>
        </div>

        <!-- Desktop View Card Design End -->
        <div class="row my-4 d-none d-md-flex">
            <div class="col-md-6">
                <p>
                    <?=__('footer_payment')?>
                    <img class="image-fluid footer-card" src="img/icon_visa.svg" alt="icon_visa">
                    <img class="image-fluid footer-card card-border p-1" src="img/icon_mastercard.svg"
                        alt="icon_mastercard">
                    <img class="image-fluid footer-card" src="img/icon_amex.svg" alt="icon_amex">
                    <img class="image-fluid footer-card card-border" src="img/icon_discover.svg" alt="icon_discover">
                </p>
            </div>
            <div class="col-md-6 text-end">
                <p>
                    <a class="text-white" href="#!"><?=__('footer_contact')?></a>&nbsp;
                    <a class="text-white" href="/blog"><?=__('footer_blog')?></a>
                </p>
            </div>
        </div>
        <div class="row mt-4 d-flex d-md-none text-center">
            <div class="col-12">
                <p><?=__('footer_payment')?></p>
                <p>
                    <img class="image-fluid footer-card" src="img/icon_visa.svg" alt="icon_visa">
                    <img class="image-fluid footer-card card-border p-1" src="img/icon_mastercard.svg"
                        alt="icon_mastercard">
                    <img class="image-fluid footer-card" src="img/icon_amex.svg" alt="icon_amex">
                    <img class="image-fluid footer-card card-border" src="img/icon_discover.svg" alt="icon_discover">
                </p>
            </div>
        </div>
        <div class="row text-center mb-2">
            <div class="col">
                <h1><?=__('footer_title')?></h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col mb-4">
                <button type="button" class="btn btn-light">
                    <?=__('footer_button')?>
                </button>
            </div>
        </div>
        <div class="row mt-4 pb-2 d-none d-md-flex">
            <div class="col-md-2">
                <p>CopyRight <strong>&#9400;</strong> <?=date("Y")?></p>
            </div>
            <div class="col-md-8 col-12 text-center">
                <p>
                    <a class="text-white text-decoration-none" href="/terminos.php"><?=__('footer_legal_terms')?></a> |
                    <a class="text-white text-decoration-none" href="/cookies.php"><?=__('footer_legal_cookies')?></a> |
                    <a class="text-white text-decoration-none"
                        href="/privacidad.php"><?=__('footer_legal_privacy')?></a> |
                    <a class="text-white text-decoration-none"
                        href="/condiciones.php"><?=__('footer_legal_access')?></a>
                </p>
            </div>
            <div class="col-md-2 text-end">
                <img class="footer-logo" src="img/ticketsgo_logo.png" alt="ticketsgo_logo">
            </div>
        </div>
        <div class="row mt-4 pb-2 d-flex d-md-none text-center">
            <div class="col-12">
                <p><a class="text-white text-decoration-none" href="/terminos.php"><?=__('footer_legal_terms')?></a></p>
                <p>
                    <a class="text-white text-decoration-none" href="/cookies.php"><?=__('footer_legal_cookies')?></a> |
                    <a class="text-white text-decoration-none"
                        href="/privacidad.php"><?=__('footer_legal_privacy')?></a>
                </p>
                <p><a class="text-white text-decoration-none" href="/condiciones.php"><?=__('footer_legal_access')?></a>
                </p>
            </div>
        </div>
    </div>