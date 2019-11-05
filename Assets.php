<?php
/**
 * Created by VSCode.
 * User: Shahimian
 * Date: 2019-11-02
 * Time: 20:55:49
 */

namespace assets\table;


use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $sourcePath = "@vendor/shahimian/yii2-assets-table/dist";

    public $css = [
        'styles.css',
    ];

    public $depends = [
        'shahimian\assets\fonts\Assets',
    ];

}
