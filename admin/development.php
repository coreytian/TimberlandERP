<?php include("header.php") ?>
<div class="pageheader">
    <h2><i class="fa fa-wrench"></i> Website Development (网站开发日志)</h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li><a href="index.php">Admin</a></li>
            <li class="active">Website Development</li>
        </ol>
    </div>
</div>

<div class="contentpanel">

    <div class="row blog-content">
        <div class="col-sm-9">

            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    <h3 class="blogsingle-title">建立网站开发日志页面</h3>
                    <h5>2014-11-15</h5>
                    <p>在菜单里的“Website Development”,用来记录网站开发进度，让用户了解新功能
                        <br/>*数据库处于开发试用阶段，用户在使用时出现任何错误和问题要及时截图或者记录下来，告诉昊和，便于昊和修正bug
                    </p>

                </div><!-- panel-body -->
            </div><!-- panel -->

            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    <h3 class="blogsingle-title">完成Create New Quote，可以在系统里新建Quote</h3>
                    <h5>2014-11-14</h5>
                    <p>可以在系统里新建Quote，不一定要用iPad版本来新建，适合用电脑来操作
                    <br/>界面和Edit Quote一样，填完信息后点击底部的Save保存
                    </p>
                    <div class="blog-img"><img src="timberland/img/3.jpg" class="img-responsive" alt="" /></div>

                </div><!-- panel-body -->
            </div><!-- panel -->

            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    <h3 class="blogsingle-title">完成Edit Quote，可以修改Quote信息</h3>
                    <h5>2014-11-13</h5>
                    <p>Quote编辑及保存功能已完成，地址在Quote表的每一列铅笔图案，点击进入</p>
                    <div class="blog-img"><img src="timberland/img/1.jpg" class="img-responsive" alt="" /></div>
                    <p>可以浏览Quote的各项数值，修改，点击底部的Save保存</p>
                    <div class="blog-img"><img src="timberland/img/2.jpg" class="img-responsive" alt="" /></div>

                </div><!-- panel-body -->
            </div><!-- panel -->


            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    <h3 class="blogsingle-title"></h3>
                    <h5></h5>
                    <p></p>
                    <div class="blog-img"><img src="" class="img-responsive" alt="" /></div>

                </div><!-- panel-body -->
            </div><!-- panel -->


        </div><!-- col-sm-8 -->

</div><!-- contentpanel -->

</div><!-- mainpanel -->



</section>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script>
    jQuery(document).ready(function() {

        "use strict";

        jQuery("#nav-websiteDevelopment").addClass("active");
    });
</script>
</body>
</html>