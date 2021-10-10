<?php

/**
 * Template Name: Cover Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @since 1.0
 */

get_header(); 
require_once TEMPLATEPATH . '/libs/vendor/autoload.php';

use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;

$qrCode   = new QrCode('https://arsofia.com/bg/61764/%d0%ba%d0%b0%d0%bb%d0%b5%d0%bd%d0%b4%d0%b0%d1%80-2020-%d0%b5-%d1%82%d1%83%d0%ba/');
$qrCode->setSize(3600);
$qrCode->setWriterByName('png');
$qrCode->setMargin(10);
$qrCode->setEncoding('UTF-8');
$qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
$qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
$qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
//$qrCode->setLabel('',  14,  TEMPLATEPATH . '/assets/webfonts/open_sans.ttf', LabelAlignment::CENTER );
$qrCode->setLogoPath(TEMPLATEPATH . '/images/Logo_vector.png');
$qrCode->setLogoWidth(952);
$qrCode->setValidateResult(false);

// Save it to a file
error_log(TEMPLATEPATH);
error_log( print_r($qrCode->writeFile(TEMPLATEPATH . '/qrcode.png'),true));
?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>