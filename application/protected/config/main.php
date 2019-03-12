<?php

return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'Test',
    'defaultController'=>'test',

    'import'=>array(
        'application.models.*',
        'application.extensions.*',
    ),
);