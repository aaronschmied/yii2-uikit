<?php

namespace aaronschmied\uikit\widgets;

use yii\helpers\Html;

class LinkPager extends \yii\widgets\LinkPager
{

	public $options = ['class' => 'uk-pagination uk-flex-center'];

	public $activePageCssClass = 'uk-active';
	public $disabledPageCssClass = 'uk-disabled';

    public $prevPageLabel = "<span uk-pagination-previous></span>";
    public $nextPageLabel = "<span uk-pagination-next></span>";

	public function init()
    {
        parent::init();
    }

    protected function renderPageButton($label, $page, $class, $disabled, $active)
    {
        $options = ['class' => $class === '' ? null : $class];
        if ($active) {
            Html::addCssClass($options, $this->activePageCssClass);
            return Html::tag('li', Html::tag('span', $label), $options);
        }
        if ($disabled) {
            Html::addCssClass($options, $this->disabledPageCssClass);
            return Html::tag('li', Html::tag('span', $label), $options);
        }
        $linkOptions = $this->linkOptions;
        $linkOptions['data-page'] = $page;
        return Html::tag('li', Html::a($label, $this->pagination->createUrl($page), $linkOptions), $options);
    }
}
