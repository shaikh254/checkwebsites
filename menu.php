<div class="row p-4 bg-dark justify-content-center align-items-center">
    <div class="col-2 d-block d-md-none">
        <div class="btn-group">
            <button type="button" class="btn btn-link dropdown-toggle text-white text-decoration-none"
                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <i class="fa-solid fa-bars fa-xl"></i>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item"
                        href="<?php if (strtok($_SERVER["REQUEST_URI"], '?') != '/') { echo $_ENV['WEB_URL']; }?>#section-purchase"><?=__('menu_purchase')?></a>
                </li>
                <li>
                    <a class="dropdown-item"
                        href="<?php if (strtok($_SERVER["REQUEST_URI"], '?') != '/') { echo $_ENV['WEB_URL']; }?>#section-schedule"><?=__('menu_schedules')?></a>
                </li>
                <li>
                    <a class="dropdown-item"
                        href="<?php if (strtok($_SERVER["REQUEST_URI"], '?') != '/') { echo $_ENV['WEB_URL']; }?>#section-location"><?=__('menu_location')?></a>
                </li>
                <li>
                    <a class="dropdown-item"
                        href="<?php if (strtok($_SERVER["REQUEST_URI"], '?') != '/') { echo $_ENV['WEB_URL']; }?>#section-rules"><?=__('menu_rules')?></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-8 ps-4  col-md-4 text-center text-md-start">
        <img class="p-2" src="img/main_logo.png" alt="main_logo" id="main-logo" />
    </div>
    <div class="col-2 d-block d-md-none text-end">
        <div class="btn-group">
            <button type="button"
                class="btn btn-mobile-design  btn-link dropdown-toggle text-white text-decoration-none"
                data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                <img alt="lang_<?=strtolower(__('menu_language_short'))?>"
                    src="img/flags/<?=strtolower(__('menu_language_short'))?>.png" class="flag-icon">
                (<?=__('menu_language_short')?>)
            </button>
            <ul class="dropdown-menu dropdown-menu-end mobile-drop-down">
                <?php for ($i=0; $i < count($languages); $i++) { ?>
                <li>
                    <a class="dropdown-item" href="?lang=<?=$languages[$i]?>">
                        <img alt="lang_<?=$languages[$i]?>" src="img/flags/<?=$languages[$i]?>.png" class="flag-icon">
                        <?=$languagesDesc[$i]?>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="col-md-8 d-none d-md-block text-end">
        <ul class="list-group list-group-horizontal list-menu justify-content-center align-items-center">
            <li class="list-group-item">
                <a class="text-white"
                    href="<?php if (strtok($_SERVER["REQUEST_URI"], '?') != '/') { echo $_ENV['WEB_URL']; }?>#section-purchase"><?=__('menu_purchase')?></a>
            </li>
            <li class="list-group-item ms-3">
                <a class="text-white"
                    href="<?php if (strtok($_SERVER["REQUEST_URI"], '?') != '/') { echo $_ENV['WEB_URL']; }?>#section-schedule"><?=__('menu_schedules')?></a>
            </li>
            <li class="list-group-item ms-3">
                <a class="text-white"
                    href="<?php if (strtok($_SERVER["REQUEST_URI"], '?') != '/') { echo $_ENV['WEB_URL']; }?>#section-location"><?=__('menu_location')?></a>
            </li>
            <li class="list-group-item ms-3">
                <a class="text-white"
                    href="<?php if (strtok($_SERVER["REQUEST_URI"], '?') != '/') { echo $_ENV['WEB_URL']; }?>#section-rules"><?=__('menu_rules')?></a>
            </li>
            <li class="list-group-item flag-list ms-3">
                <div class="btn-group">
                    <button type="button" class="btn btn-link dropdown-toggle text-white text-decoration-none"
                        data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <img alt="lang_<?=strtolower(__('menu_language_short'))?>"
                            src="img/flags/<?=strtolower(__('menu_language_short'))?>.png" class="flag-icon">
                        (<?=__('menu_language')?>)
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end">
                        <?php for ($i=0; $i < count($languages); $i++) { ?>
                        <li>
                            <a class="dropdown-item" href="?lang=<?=$languages[$i]?>">
                                <img alt="lang_<?=$languages[$i]?>" src="img/flags/<?=$languages[$i]?>.png"
                                    class="flag-icon">
                                <?=$languagesDesc[$i]?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>