<?php

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class Sidebar extends Widget
{
    public $hideOnEmpty = true;

    public $title;

    public function init()
    {
        parent::init();

        echo Html::beginTag('div', ['class' => 'panel panel-primary sidebar']);

        echo Html::beginTag('div', ['class' => 'panel-heading']);
        echo Html::beginTag('h3', ['class' => 'panel-title']);
        echo Html::encode($this->title);
        echo Html::endTag('h3');
        echo Html::endTag('div');
    }

    public function run()
    {
        echo Html::endTag('div');
    }
}