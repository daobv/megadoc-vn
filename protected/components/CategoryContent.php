<?php

Yii::import('zii.widgets.CPortlet');

class CategoryContent extends CPortlet
{
    public function init()
    {
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('categoryContent');
    }
}