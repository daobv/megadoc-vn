<?php

Yii::import('zii.widgets.CPortlet');

class Slide extends CPortlet
{
    public function init()
    {
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('slide');
    }
}