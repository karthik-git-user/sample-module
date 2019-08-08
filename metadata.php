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
    'extend'      => [   \OxidEsales\Eshop\Application\Controller\PaymentController::class        => \oe\sample-module\Controller\PaymentController::class,
                       ],
    'controllers'       => [    'sampleadmincontroller'    => \oe\sample-module\Controller\Admin\AdminController::class,
                           ],
    'files'       => [],
    'templates'   => [      'sampleadmin.tpl'       => 'oe/sample-module/views/admin/tpl/sampleadmin.tpl',
                     ],
    'blocks'      => [
                                [   'template' => 'page/checkout/payment.tpl',
                                    'block'    => 'select_payment',
                                    'file'     => '/views/blocks/page/checkout/samplepayment.tpl'
                                ],
                        ],
    'settings'     => [],
    'events'       => [   'onActivate'   => '\oe\sample-module\Core\Events::onActivate',
                          'onDeactivate' => '\oe\sample-module\Core\Events::onDeactivate'
                      ],
];

