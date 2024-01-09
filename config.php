<?php

session_start();
date_default_timezone_set('Europe/Madrid');

$current_time = date('H:i');

require_once __DIR__ . '/vendor/autoload.php';

use Utopia\Locale\Locale;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (isset($_REQUEST['date']) && isset($_REQUEST['api'])) {
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode(getSchedules($_ENV, $current_time, $_REQUEST['date']));
  die();
  exit;
}

if ($_ENV['DISABLE_CACHE'] === 1) {
  header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
}

$languages = ['en', 'es', 'fr', 'it', 'de'];
$languagesDesc = [
  'English',
  'Español',
  'Français',
  'Italiano',
  'Deusth'
];
foreach ($languages as $lang) {
  $filename = "lang/$lang.json";
  if (file_exists($filename)) {
    Locale::setLanguageFromJSON($lang, $filename);
  }
}

$defaultLanguage = $_ENV['DEFAULT_LANG'];
$locale = new Locale($defaultLanguage);

$userLanguage = $defaultLanguage;
if (!empty($_GET['lang']) && isset($_GET['lang']) && in_array($_GET['lang'], $languages)) {
  $userLanguage = $_GET['lang'];
  $_SESSION['lang'] = $userLanguage;
} else if (!empty($_SESSION['lang']) && isset($_SESSION['lang']) && in_array($_SESSION['lang'], $languages)) {
  $userLanguage = $_SESSION['lang'];
}
$locale->setDefault($userLanguage);

$userCurrency = $_ENV['DEFAULT_CURRENCY'];
if (!empty($_GET['currency']) && isset($_GET['currency']) && in_array($_GET['currency'], $languages)) {
  $userCurrency = $_GET['currency'];
  $_SESSION['currency'] = $userCurrency;
} else if (!empty($_SESSION['currency']) && isset($_SESSION['currency']) && in_array($_SESSION['currency'], $languages)) {
  $userCurrency = $_SESSION['currency'];
}

$calendarMonths = [];
$calendarDaysAbbrev = [];
$calendarDisabledDates = [];
$calendarDatePlaceholder = "YYYY/MM/DD";

switch ($userLanguage) {
  case 'en':
    $calendarMonths = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    $calendarDaysAbbrev = ["S", "M", "T", "W", "T", "F", "S"];
    $calendarDatePlaceholder = "MM/DD/YYYY";
    break;
  
  case 'es': default:
    $calendarMonths = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $calendarDaysAbbrev = ["D", "L", "M", "M", "J", "V", "S"];
    $calendarDatePlaceholder = "DD/MM/YYYY";
    break;
  
  case 'fr':
    $calendarMonths = ['Janvier', 'février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Dácembre'];
    $calendarDaysAbbrev = ["D", "L", "M", "M", "J", "V", "S"];
    $calendarDatePlaceholder = "DD/MM/YYYY";
    break;

  case 'it':
    $calendarMonths = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'];
    $calendarDaysAbbrev = ["D", "L", "M", "M", "G", "V", "S"];
    $calendarDatePlaceholder = "DD/MM/YYYY";
    break;

  case 'cn':
    $calendarMonths = ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月', '十一月','十二月'];
    $calendarDaysAbbrev = ["天", "一", "二", "三", "四", "五", "六"];
    $calendarDatePlaceholder = "DD/MM/YYYY";
    break;

  case 'ru':
    $calendarMonths = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
    $calendarDaysAbbrev = ["В", "П", "В", "С", "Ч", "П", "С"];
    $calendarDatePlaceholder = "DD.MM.YYYY";
    break;

  case 'de':
    $calendarMonths = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];
    $calendarDaysAbbrev = ["S", "M", "D", "M", "D", "F", "S"];
    $calendarDatePlaceholder = "DD.MM.YYYY";
    break;
}

function getSchedules($env, $current_time, $date) {
  return [];
}

function __($string, $values = []) {
  global $locale;
  return $locale->getText($string, $values);
}

$totalAllowed = 7;
$amountValues = [
      'qtya' => 9,
      'qtyb' => 7,
      'qtyc' => 0
];