<?php


return [
    'name'        => 'InstantSegments',
    'description' => 'Enables segments to be updated whenever a contact is updated/created',
    'version'     => '1.0',
    'author'      => 'Ben Poulson',

    'services' => [
        'events' => [
            'mautic.plugin.instantsegments.subscriber' => [
                'class'     => MauticPlugin\InstantSegmentsBundle\EventListener\ContactListener::class,
                'arguments' => [
                    'mautic.helper.integration',
                ],
            ],
        ],
    ],

    'integrations' => [
        'mautic.integration.instantsegments' => [
            'class'     => \MauticPlugin\InstantSegmentsBundle\Integration\InstantSegmentsIntegration::class,
            'arguments' => [
                'mautic.helper.integration', 'service_container'
            ],
        ],
    ],
];
