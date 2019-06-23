<?php
namespace derekisbusy\waypoints;

use yii\web\AssetBundle;

class WaypointsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/derekisbusy/waypoints';
    
    public $js = [
        'js/waypoints.min.js',
    ];
}