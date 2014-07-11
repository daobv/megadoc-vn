<?php
Yii::import('zii.widgets.CPortlet');

class RelateDocument extends CPortlet
{
    public function init()
    {
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('relateDocument');
    }
}