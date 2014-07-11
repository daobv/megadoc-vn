<?php
Yii::import('zii.widgets.CPortlet');

class HomePageContent extends CPortlet
{
    public function init()
    {
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('homePageContent');
    }
}