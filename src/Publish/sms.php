<?php

declare(strict_types = 1);

/**
 * Author: 狂奔的螞蟻 <www.firstphp.com>
 * Date: 2020/10/31
 * Time: 3:38 PM
 */


return [
    /*
    |--------------------------------------------------------------------------
    | appid
    |--------------------------------------------------------------------------
    */
    'appid' => env('QCLOUD_SMS_APP_ID', '2512285218'),

    /*
    |--------------------------------------------------------------------------
    | appkey
    |--------------------------------------------------------------------------
    */
    'appkey' => env('QCLOUD_SMS_APP_KEY', 'dedf093843b4aedd835a41d2802d4fa'),

    /*
     |--------------------------------------------------------------------------
     | templateId
     |--------------------------------------------------------------------------
     |
     */
    'templateId' => env('QCLOUD_SMS_TEMPLATE_ID', '612645'),

    /*
    |--------------------------------------------------------------------------
    | sign
    |--------------------------------------------------------------------------
    |
    */
    'sign' => env('QCLOUD_SMS_SIGN', '小蚂蚁'),

];