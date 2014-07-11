<div id="body">
    <!-- body container -->
    <div id="body-container">
        <!-- center content -->
        <div id="content-container">
            <div class="post">
                <div class="post-container">
                    <div class="post-wrapper">

                        <div class="image">
                            <a href="google.com">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/book1.jpg"/>
                            </a>
                        </div>
                        <div class="post-content">
                            <h3>Các dạng bài tập hóa học lớp 8</h3>

                            <div class="author-description">
                                <p><a>Cơ thúy linh</a></p>

                                <p>Người dịch: <a>Cơ thúy linh</a></p>

                                <p>Thể loại: <a>Ngụ ngôn</a></p>
                            </div>
                            <div class="book-review">
                                <div class="book-view"><span>Lượt xem: </span>1223</div>
                                <div class="book-like"><span>Thích sách: </span><a href="">Thich</a></div>
                                <div class="book-share"><span>Chia sẻ: </span><a href="">Thich</a></div>
                            </div>
                            <div class="post-description">
                                <div class="title">Tóm tát chuyện</div>
                                <div class="description">
                                    Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới
                                    chỉ 18 tuổi
                                    Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới
                                    chỉ 18 tuổi
                                    Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới
                                    chỉ 18 tuổi
                                    Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới
                                    chỉ 18 tuổi
                                    Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi Mới chỉ 18 tuổi
                                </div>
                                <div class="view-all">Xem thêm</div>
                            </div>
                            <div class="comment-facebook">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/ post -->
            <?php $this->widget('RelateDocument'); ?>
        </div>
    </div>
</div>
</div>
</div>
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
<script>
    //search
    $(".search-category").hover(function () {
        $(this).find(".search-category-dropdown").addClass("hover")
    }, function () {
        $(this).find(".search-category-dropdown").removeClass("hover")
    });
    $("li", ".search-category-dropdown").click(function () {
        $this = $(this);
        $(".search-category-text").text($this.text());
        opt = $this.data("opt");
        $this.parent().removeClass("hover");
        $(".search-field").focus()
    });
    $(".search-field").keydown(function (e) {
        if (e.which == 13) {
            searchEnter()
        }
    });
    // end search
</script>
