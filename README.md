# STONENYY/View
A view class for php

### Install
in composer.json:
```
require: {
    "stonenyy/view": "dev-master"
}
```

### Examples
in autoload.php:
```PHP
use STONENYY\View as View;
View::config(['path' => APP_PATH.'/views/']);
```
in *controller.php:
```PHP
use STONENYY\View as View;
View::set(array('data' => array('test')));
View::show('home'); //this 'home' is home.php in view path
```
in home.php:
```PHP
var_dump($data);
```
