<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include $_SERVER['DOCUMENT_ROOT'].'/q/lazyloader.php';

//use \Models\Adc\Api\Classes\Curloptions as AliasBase;
//
//AliasBase\Base::setOverwriteCurrentOptions(false);
//AliasBase\Media::init();
//AliasBase\DefaultValues::post();
//
////$test->init();
//echo '<pre>';
//print_r(AliasBase\Base::getACurlOptions());
 echo 'here <br>';


$oServiceHandler = \Q\Api\HttpDefaultHandler::create();

$token = Q\Api\TheTvDb\Services\Authentication\Request\BearerToken::create()
       ->setHttpServiceHandler($oServiceHandler) 
       ->setParams('LENC7CQ2WUH4PB87','jfrs506zo','17MSCXAHS7FO09C5')
       ->callService();

echo '<pre>';
print_r($token);
echo '</pre>';