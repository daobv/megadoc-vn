<?php
Yii::import('zii.widgets.CPortlet');

class LastActivities extends CPortlet
{
    public function init()
    {
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('lastActivities');
    }
}