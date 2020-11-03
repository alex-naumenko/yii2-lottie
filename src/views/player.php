<?php

use yii\web\View;
use yii\helpers\Html;

/* @var $this View */
/* @var $config array */
/* @var $jsExpression string */

$className = $config['class'];

echo Html::tag('dotlottie-player', null, $config);

$js=<<<JS
    $(function() {
        const player = document.getElementsByClassName('$className')[0];
        $jsExpression;
    });
JS;

$this->registerJs($js);
