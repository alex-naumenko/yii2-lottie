<?php
declare(strict_types=1);

namespace alexnaumenko\lottie;

use yii\web\AssetBundle;

/**
 * Class LottieAsset
 * @see https://github.com/LottieFiles/lottie-player
 * @see https://github.com/dotlottie/player-component#properties  - temp solution
 * @package alexnaumenko\lottie
 */
class LottieAsset extends AssetBundle
{
    public $sourcePath = '@npm/dotlottie--player-component';

    public $js = [
        #"dist/dotlottie-player.js",
        "https://unpkg.com/@dotlottie/player-component@0.1.2/dist/dotlottie-player.js" # tempered solution
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
