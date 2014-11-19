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
                    <h3 class="blogsingle-title">Quote表可以开启和隐藏各种付款项</h3>
                    <h5>2014-11-18</h5>
                    <p>根据Jacky要求，Quote表现在可以非常方便地开启和隐藏各种付款项，比如Underlay，Furniture项等</p>
                    <p>见下图，有两行按键，按下哪个就显示哪个项目，再次按下就隐藏</p>
                    <div class="blog-img"><img src="timberland/img/5.jpg" class="img-responsive" alt="" /></div>

                </div><!-- panel-body -->
            </div><!-- panel -->


            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    <h3 class="blogsingle-title">合并Quote的iPad版和电脑版</h3>
                    <h5>2014-11-17</h5>
                    <p>Quote不再分iPAD和电脑版，统一用一个页面，合并后的Quote表将跟容易使用更多功能。</p>
                </div><!-- panel-body -->
            </div><!-- panel -->

            <div class="panel panel-default panel-blog">
                <div class="panel-body">
                    <h3 class="blogsingle-title">完成Quote的删除和还原功能</h3>
                    <h5>2014-11-16</h5>
                    <p>不用的Quote可以删除，点击Quote表右侧的垃圾桶图标</p>
                    <div class="blog-img"><img src="timberland/img/4.jpg" class="img-responsive" alt="" /></div>
                    <p>删除后的Quote在网站左侧Menu的“Recycle Bin”（回收站）里可以找到，并且可以点击“Restore”来还原</p>
                    <p>所以Quote永远不会真正清除掉，被删除的Quote都可以查看和还原，防止误操作
                    </p>



                </div><!-- panel-body -->
            </div><!-- panel -->

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
