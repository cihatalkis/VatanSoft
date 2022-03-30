<?php

/**
 * Laravel 9 VatanSoft SMS
 * @license MIT License
 * @author Cihat Alkis <cihadaklis@icloud.com>
 * @link https://cihatalkis.pw
 *
 */

return [

    //VatanSoft Authentication
    'auth' => [
        'username' => env('VatanSoft_USERNAME', ''),
        'password' => env('VatanSoft_PASSWORD',''),
    ],

    //Default sender ID, for senders (AKA Originator)
    'default_sender' => env('VatanSoft_DEFAULT_SENDER', ''),

    //use Queue service?
    'queue' => false,

    // SMS Charset
    'charset' => 'default', // Values are: default, turkish, unicode

    //Append Unsubscribe text and link for receivers
    'append_unsubscribe_link' => false,

];
