<?php

/**
 * Model configuration options for settings model.
 */

return [
    'form' => [
        'toolbar' => [
            'buttons' => [
                'save' => ['label' => 'lang:admin::lang.button_save', 'class' => 'btn btn-primary', 'data-request' => 'onSave'],
                'saveClose' => [
                    'label' => 'lang:admin::lang.button_save_close',
                    'class' => 'btn btn-default',
                    'data-request' => 'onSave',
                    'data-request-data' => 'close:1',
                ],
            ],
        ],
        'fields' => [
            'order_limit' => [
                'label' => 'Maximum number of orders per timeslot',
                'type' => 'number',
                'default' => 20,
            ],
        ],
    ],
];