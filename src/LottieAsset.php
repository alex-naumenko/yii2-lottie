<?php
declare(strict_types=1);

namespace alexnaumenko\lottie;

use yii\web\AssetBundle;

/**
 * Class LottieAsset
 * @see https://github.com/LottieFiles/lottie-player
 * @package alexnaumenko\lottie
 */
class LottieAsset extends AssetBundle
{
    public $sourcePath = '@npm/dotlottie--player-component';

    public $js = [
        "dist/dotlottie-player.js",
        #"https://unpkg.com/@dotlottie/player-component@0.1.2/dist/dotlottie-player.js"
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
