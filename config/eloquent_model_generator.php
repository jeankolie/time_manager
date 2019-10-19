<?php

return [
    'model_defaults' => [
        'namespace'       => 'App\Models',
        'base_class_name' => \Illuminate\Database\Eloquent\Model::class,
        'output_path'     => 'Models',
        'no_timestamps'   => true,
        'date_format'     => 'U',
        'connection'      => null,
        'backup'          => false,
    ],
];