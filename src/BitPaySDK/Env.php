<?php


namespace BitPaySDK;


interface Env
{
    const Test                  = "Test";
    const Prod                  = "Prod";
    const TestUrl               = "https://test.bitpay.com/";
    const ProdUrl               = "https://bitpay.com/";
    const BitpayApiVersion      = "2.0.0";
    const BitpayPluginInfo      = "BitPay_PHP_Client_v3.6.2005";
    const BitpayApiFrame        = "custom";
    const BitpayApiFrameVersion = "1.0.0";
}