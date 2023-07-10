<?php

return [
    'title' => 'Settings',
    'navigation' => [
        'label' => 'Settings',
        'group' => 'Settings',
        'sort' => '1',
        'icon' => 'heroicon-o-cog',
        'folder' => 'site'
    ],
    'breadcrumbs' => [
        'Settings',
    ],
    'tool' => [
        "enable" => true
    ],
    'permission' => [
        'enable' => false,
        //  permission name 
        // 'name' => 'list.settings'
        'name' => ''
    ],
    // assets change for banned ip addreses
    'assets' => [
        'select2-min-css' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.0/css/select2.min.css',
        'select2-min-js' => 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.0/js/select2.min.js',
        'jquery' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js',
        'jquery-ui-js' => 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js',
        'jquery-ui-css' => 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css',
    ]
];
