<?php

Yii::import('zii.widgets.CPortlet');

class TopRevenue extends CPortlet
{
    public function init()
    {
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('topRevenue');
    }
}