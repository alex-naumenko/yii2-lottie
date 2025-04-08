<?php
declare(strict_types=1);

namespace alexnaumenko\lottie;

use yii\base\Widget;
use yii\web\JsExpression;

/**
 * Class LottieWidget
 * @package alexnaumenko\lottie
 */
class LottieWidget extends Widget
{
    /** @var string */
    public const MODE_NORMAL = 'normal';
    /** @var string */
    public const MODE_BOUNCE = 'bounce';

    /** @var string - html element class name */
    public $id;

    /** @var bool - Autoplay animation on load. */
    public $autoplay = true;

    /** @var bool - Show controls. */
    public $controls = true;

    /** @var bool - Whether to loop animation. */
    public $loop = true;

    /** @var string - Play mode. */
    public $mode = "normal";

    /** @var null|int - Number of times to loop animation. */
    public $count = null;

    /** @var int - Direction of animation. */
    public $direction = 1;

    /** @var bool - Whether to play on mouse hover. */
    public $hover = false;

    /** @var null|string - Background color. */
    public $background;

    /** @var string - Renderer to use. */
    public $renderer = 'svg';

    /** @var int - Animation speed. */
    public $speed = 1;

    /** @var string - URL to .lottie file. */
    public $src;

    /** @var array - Inline css part of html options */
    public $style;

    public $jsExpression;

    /** @var string */
    private $playerView = "player";

    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        if (!$this->style) {
            $this->style = ['style' => '300px'];
        }
        if (!$this->id) {
            $this->id = uniqid();
        }
        if (!$this->jsExpression) {
            $this->jsExpression = new JsExpression('');
        }
    }

    /**
     * @inheritDoc
     */
    public function run()
    {
        $view = $this->getView();
        LottieAsset::register($view);
        return $this->render($this->playerView, [
            'config' => $this->prepareConfig(),
            'jsExpression' => $this->jsExpression,
        ]);
    }

    /**
     * @return array
     */
    private function prepareConfig(): array
    {
        return [
            'class' => $this->id,
            'autoplay' => $this->autoplay,
            'controls' => $this->controls,
            'loop' => $this->loop,
            'mode' => $this->mode,
            'count' => $this->count,
            'direction' => $this->direction,
            'hover' => $this->hover,
            'background' => $this->background,
            'renderer' => $this->renderer,
            'speed' => $this->speed,
            'src' => $this->src,
            'style' => $this->style
        ];
    }
}
