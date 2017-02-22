<?php

namespace worstinme\uikit\assets;

use yii\web\AssetBundle;

class Search extends AssetBundle
{
    public $sourcePath = '@vendor/bower/uikit';

    public $css = [
        'css/components/search.css',
    ];

    public $js = [
        'js/components/search.min.js',
    ];

    public $depends = [
        'worstinme\uikit\assets\Autocomplete',
    ];
}