<div id="body">
<!-- body container -->
    <div id="body-container">
    <!-- center content -->
            <div id="content-container" data-role="content">
            <!-- slider -->
            <?php $this->widget('Slide'); ?>
            <!-- HomePage Content Index -->
            <?php $this->widget('HomePageContent'); ?>
            <!-- End HomePage Content Index -->
            </div>
            <!--/ center content -->
            <!-- right sidebar -->
            <div id="sidebar-container">
                <!-- Last Ativities (Fedd) -->
                <?php $this->widget('LastActivities'); ?>
                <?php $this->widget('AdsWidget'); ?>
                <?php $this->widget('Announcement'); ?>
                <?php $this->widget('TopRevenue'); ?>
                <?php $this->widget('WidgetTextBox'); ?>
            </div>
    <!--/ right sidebar -->
    </div>
</div>
<script type="text/javascript">
    //search
    $(".search-category").hover(function(){
        $(this).find(".search-category-dropdown").addClass("hover")},function(){
        $(this).find(".search-category-dropdown").removeClass("hover")
    });
    $("li",".search-category-dropdown").click(function(){
        $this=$(this);$(".search-category-text").text($this.text());
        opt=$this.data("opt");$this.parent().removeClass("hover");
        $(".search-field").focus()});
    $(".search-field").keydown(function(e){if(e.which==13){searchEnter()}});
    // end search
    var bannerSwiper = new Swiper('.swiper-container',{
        pagination: '.pagination',
        loop:true,
        grabCursor: true,
        paginationClickable: true
    })

    //carou
    var swipesCarou = []
    $('.swiper-carou').each(function(i, obj) {
        swipesCarou[i] = new Swiper(obj,{
            slidesPerView: 5,
            loop: true
        });
        $(this).parent().find('.arrow-left').on('click', function(e){
            e.preventDefault()
            swipesCarou[i].swipePrev()
        })
        $(this).parent().find('.arrow-right').on('click', function(e){
            e.preventDefault()
            swipesCarou[i].swipeNext()
        })

    });
</script>