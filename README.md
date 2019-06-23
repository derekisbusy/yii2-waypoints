Yii2 Waypoints
==============
Waypoints assets for Yii2 projects

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require --prefer-dist derekisbusy/yii2-waypoints:dev-master
```

or add

```
"derekisbusy/yii2-waypoints": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it by adding it to your view  :

```php
use \derekisbusy\waypoints\WaypointsAsset;

WaypointsAsset::register($this);
```

or by adding it to another assets dependencies list :

```php
  public $depends = [
    'derekisbusy\waypoints\WaypointsAsset'
  ];
```

Then use waypoints in your view :

```html
<script>
var waypoint = new Waypoint({
  element: document.getElementById('waypoint'),
  handler: function(direction) {
    console.log('Scrolled to waypoint!')
  }
})
</script>
```

Documentation
-------------

 * [Waypoints](http://imakewebthings.com/waypoints/guides/getting-started/)
 * [Yii2 assets](https://www.yiiframework.com/doc/guide/2.0/en/structure-assets)
