<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\web\themes\anabena;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class IndexAsset extends AssetBundle
{
    public $basePath = '@webroot/themes/anabena/assets';
    public $baseUrl = '@web/themes/anabena/assets';
    public $css = [
        'styles/main.css',
    ];
    public $js = [
        'scripts/jquery.carouFredSel-6.2.1-packed.js',
        'scripts/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
