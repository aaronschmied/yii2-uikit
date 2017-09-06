<?php

namespace aaronschmied\uikit;

use Yii;

class Breadcrumbs extends \yii\widgets\Breadcrumbs
{
	public $options = ['class' => 'uk-breadcrumb'];

	public $activeItemTemplate = "<li class=\"uk-active\">{link}</li>\n";

}
