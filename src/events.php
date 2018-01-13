<?php

return [
    \craft\fields\Assets::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetAssetsFieldSchema,
        ],
    ],
    \craft\fields\Categories::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetCategoriesFieldSchema,
        ],
    ],
    \craft\fields\Checkboxes::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetSelectMultipleFieldSchema,
        ],
    ],
    \craft\fields\Date::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetDateFieldSchema,
        ],
    ],
    \craft\fields\Dropdown::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetSelectOneFieldSchema,
        ],
    ],
    \craft\fields\Entries::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetEntriesFieldSchema,
        ],
    ],
    \craft\fields\Lightswitch::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetLightswitchFieldSchema,
        ],
    ],
    \craft\fields\Matrix::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetMatrixFieldSchema,
        ],
    ],
    \craft\fields\MultiSelect::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetSelectMultipleFieldSchema,
        ],
    ],
    \craft\fields\Number::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetNumberFieldSchema,
        ],
    ],
    \craft\fields\Table::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetTableFieldSchema,
        ],
    ],
    \craft\fields\Tags::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetTagsFieldSchema,
        ],
    ],
    \craft\base\Field::class => [
        'craftQlGetFieldSchema' => [
            new \markhuot\CraftQL\Listeners\GetDefaultFieldSchema,
        ],
    ],
];