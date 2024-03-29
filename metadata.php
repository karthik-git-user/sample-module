<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
        'id'          => 'sample-module',
        'title'       => [ 'de' => 'Sample',
                           'en' => 'Sample',
                         ],
    'description' => [ 'de' => 'Sample module for oxid eshop',
                       'en' => 'Sample module for oxid eshop'
                     ],
    'thumbnail'   => 'icon.png',
    'version'     => '1.0.0',
    'author'      => 'Developer',
    'url'         => 'https://www.oxid-esales.com',
    'extend'      => [   \OxidEsales\Eshop\Application\Controller\PaymentController::class        => \oe\sample\Controller\PaymentController::class,
                       ],
    'controllers'       => [    'sampleadmincontroller'    => \oe\sample\Controller\Admin\AdminController::class,
                           ],
    'files'       => [],
    'templates'   => [      'sampleadmin.tpl'       => 'oe/sample/views/admin/tpl/sampleadmin.tpl',
                     ],
    'blocks'      => [
                                [   'template' => 'page/checkout/payment.tpl',
                                    'block'    => 'select_payment',
                                    'file'     => '/views/blocks/page/checkout/samplepayment.tpl'
                                ],
                        ],
    'settings'     => [],
    'events'       => [   'onActivate'   => '\oe\sample\Core\Events::onActivate',
                          'onDeactivate' => '\oe\sample\Core\Events::onDeactivate'
                      ],
];

