<div id="body">
    <!-- body container -->
    <div id="body-container">
        <!-- center content -->
        <div id="content-container">

        <!-- slider -->
            <?php $this->widget('Slide'); ?>
            <!-- HomePage Content Index -->
            <?php $this->widget('CategoryContent'); ?>
            <!-- End HomePage Content Index -->
        </div>
        <!--/ center content -->
        <!-- right sidebar -->
        <div id="sidebar-container">
            <!-- Last Ativities (Fedd) -->
            <?php $this->widget('ProminentCollection'); ?>
            <?php $this->widget('AdsWidget'); ?>
            <?php $this->widget('Announcement'); ?>
            <?php $this->widget('TopRevenue'); ?>
            <?php $this->widget('WidgetTextBox'); ?>
        </div>
        <!--/ right sidebar -->
    </div>
</div>
