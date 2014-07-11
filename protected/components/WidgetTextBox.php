<?php

Yii::import('zii.widgets.CPortlet');

class WidgetTextBox extends CPortlet
{
    public function init()
    {
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('widgetTextBox');
    }
}