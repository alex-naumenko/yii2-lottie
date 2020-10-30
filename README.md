Lottie player widget
====================
Yii2 Widget for play ```.lottie``` files.
Based on js lib [dotlottie-player Web Component](https://github.com/dotlottie/player-component#dotlottie-player-web-component)

## Demo

![screencast](https://i.imgur.com/miLzIkJ.gif)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist alex-naumenko/yii2-lottie "*"
```

or add

```
"alex-naumenko/yii2-lottie": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
 echo LottieWidget::widget([
    'jsExpression' => new JsExpression('console.log(player)'), # player - is instance of dotlottie-player
    'src' => "https://***/***.lottie",
]); 
```

See allowed property [list](https://github.com/dotlottie/player-component#dotlottie-player-web-component)




