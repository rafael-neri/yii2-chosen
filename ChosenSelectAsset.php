<?php

namespace ext4yii2\chosen;

use yii\web\AssetBundle;

/**
 * ChosenAsset bundle
 */
class ChosenSelectAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle
     */
    public $sourcePath = '@vendor/harvesthq/chosen';

    /**
     * @var array list of JavaScript files that this bundle contains
     */
    public $js = [
        'chosen.jquery.min.js',
    ];

    /**
     * @var array list of CSS files that this bundle contains
     */
    public $css = [
        'chosen.min.css',
    ];

    /**
     * @var array list of JavaScript files that this bundle contains
     */
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
