<?php

Yii::import('zii.widgets.CPortlet');

class ProminentCollection extends CPortlet
{
    public function init()
    {
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('prominentCollection');
    }
}