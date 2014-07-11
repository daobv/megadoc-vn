<?php
Yii::import('zii.widgets.CPortlet');

class AdsWidget extends CPortlet
{
    public function init()
    {
        parent::init();
    }
    //* Multi Ads will be set in backend and load here*/
    protected function renderContent()
    {
        $this->render('adsWidget');
    }
}