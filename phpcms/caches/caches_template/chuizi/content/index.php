<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>锤子</title>
    <style>
        .container,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11
        ,.col-md-12 {
            /*border:solid 1px black;*/
        }

        li{
            line-height: 2;

        }
        ul li a{
            color:#969696;
        }
    </style>
    <link rel="stylesheet" href="./statics/bs/css/bootstrap.min.css">
    <link rel="stylesheet" href="./statics/bs/css/bootstrap-theme.min.css">
    <script src="<?php echo JS_PATH;?>/jquery.min.js"></script>
    <script src="./statics/bs/js/bootstrap.min.js "></script>
    <script src="<?php echo JS_PATH;?>/holder.min.js"></script>
</head>
<body style="background: #fff">
    <div class="jumbotron" style="height:80px;background-color: black;margin-top:20px">
        <!-- 导航 -->
            <div class="col-md-2">
                <img src="" alt="">
            </div>
            <div class="col-md-9" style="margin-top:-25px;">
                <nav class="navbar ">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav" >
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=172d3e742399e5ace943301e16f256b0&action=category&catid=0&num=10&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'10',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                        <li >
                                            <a href="#" style="color:white">
                                                <?php echo $r['catname'];?>
                                            </a>
                                        </li>
                                    <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                
                            </ul>
                            <span class="glyphicon glyphicon-user" aria-hidden="true" style="margin-left:80px;margin-top:15px;color:white"></span>

                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>



    </div>

    <!-- 导航 -->
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top:-25px" >
                <nav class="navbar navbar-default">
                    <div class="container-fluid" >
                        <!-- Brand and toggle get grouped for better mobile display -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">

                                <li>
                                    <a href="#">
                                        首页
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        手机
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        "足迹"手感膜
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        官方配件
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        空气净化类
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        品牌周边
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        第三方商品
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        全部
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        服务
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        企业团购
                                    </a>
                                </li>

                            </ul>

                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
        </div>

        <!-- 轮播图 -->
        <div class="row">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="1">
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="2">
                        </li>
                        <li data-target="#carousel-example-generic" data-slide-to="3">
                        </li>

                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo IMG_PATH;?>/锤子科技官网/ahs1.png" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo IMG_PATH;?>锤子科技官网/ahs2.png" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo IMG_PATH;?>/锤子科技官网/ahs3.png" alt="...">
                            <div class="carousel-caption">
                                ...
                            </div>
                        </div>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button"
                    data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true">
                        </span>
                        <span class="sr-only">
                            Previous
                        </span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button"
                    data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true">
                        </span>
                        <span class="sr-only">
                            Next
                        </span>
                    </a>
                </div>
            </div>
       </div>

       <!-- 四张图片 -->
       <div class="row" style="margin-top:20px">
            <div class="col-xs-6 col-md-3" >
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/sixiaobanner3.jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/9ae4d799a478d1a629966f84b56a1277.jpg" alt="..." >
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/3f78b9032249cbffbe813dfe1c0f03b7.jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/47f5109762e5e6adcd502a0c57ed4fe3.jpg" alt="...">
                </a>
            </div>

        </div>

        <!-- 商品类表 -->
        <div class="row">
            <div class="col-md-12" style="margin-left: 20px">
                <h4>热门商品</h4>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/83fab31aae1470fef6eb644142ebf875.png" alt="..." style="margin-top:30px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 卫衣 开衫 热血</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">风格简洁、舒适服帖</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/71432ad30288fb860a4389881069b874.png" alt="..." style="margin-top:30px">
                    <div class="caption">
                    <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="color: #cc3e39;background: #ffe7e5;font-size: 12px;line-height: 26px;text-align: center">买赠</span> <!----> </div>
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">畅呼吸智能空气净化器</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">购空净 赠价值 699 元超级活性炭滤芯</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $3499
                        </span>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/3bd5267edd7257e719e7965b756e2c2e.png" alt="..." style="margin-top:30px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">坚果 Pro</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">领券后购机最高优惠 950 元</p>
                        <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="border: 1px solid #ffe57a; color: #e6b217;background: #fffbe5;box-shadow: 0 1px 3px 0 rgba(0,0,0,.05);font-size: 12px;line-height: 26px;text-align: center">限时优惠</span> <!----> </div>                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $1299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/dbb13e2e05afd140044dfc38b0f6f025.jpg" alt="..." style="margin-top:30px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>

                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12" style="margin-left: 20px">
                <h4>净化器及配件</h4>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/labajieloucengpc1.jpg" alt="..." style="margin-top:30px">



                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/b9c502d4f1a410e2eca1dff3f2b1e47e.jpg" alt="..." style="margin-top:100px">
                    <div class="caption">
                    <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="color: #cc3e39;background: #ffe7e5;font-size: 12px;line-height: 26px;text-align: center">买赠</span> <!----> </div>
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">畅呼吸智能空气净化器</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">购空净 赠价值 699 元超级活性炭滤芯</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $3499
                        </span>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/de42b5502b815b5e29020f87d545ca44.jpg" alt="..." style="margin-top:100px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">坚果 Pro</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">领券后购机最高优惠 950 元</p>
                        <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="border: 1px solid #ffe57a; color: #e6b217;background: #fffbe5;box-shadow: 0 1px 3px 0 rgba(0,0,0,.05);font-size: 12px;line-height: 26px;text-align: center">限时优惠</span> <!----> </div>                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $1299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/bafd1aebe125ba9a464f459d9b6138d4.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/bd68ff814182aac9434fc4978d1865fe.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/6baa390b3c7b901f2a539cfb17349b23.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/fed059c1692cf906f60fdb76818e428d.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12" style="margin-left: 20px">
                <h4>官方精选</h4>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/labajieloucengpc1.jpg" alt="..." style="margin-top:30px">



                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/b9c502d4f1a410e2eca1dff3f2b1e47e.jpg" alt="..." style="margin-top:100px">
                    <div class="caption">
                    <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="color: #cc3e39;background: #ffe7e5;font-size: 12px;line-height: 26px;text-align: center">买赠</span> <!----> </div>
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">畅呼吸智能空气净化器</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">购空净 赠价值 699 元超级活性炭滤芯</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $3499
                        </span>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/de42b5502b815b5e29020f87d545ca44.jpg" alt="..." style="margin-top:100px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">坚果 Pro</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">领券后购机最高优惠 950 元</p>
                        <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="border: 1px solid #ffe57a; color: #e6b217;background: #fffbe5;box-shadow: 0 1px 3px 0 rgba(0,0,0,.05);font-size: 12px;line-height: 26px;text-align: center">限时优惠</span> <!----> </div>                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $1299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/bafd1aebe125ba9a464f459d9b6138d4.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/bd68ff814182aac9434fc4978d1865fe.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/6baa390b3c7b901f2a539cfb17349b23.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/fed059c1692cf906f60fdb76818e428d.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-md-12" style="margin-left: 20px">
                <h4>品牌周边</h4>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/labajieloucengpc1.jpg" alt="..." style="margin-top:30px">



                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/b9c502d4f1a410e2eca1dff3f2b1e47e.jpg" alt="..." style="margin-top:100px">
                    <div class="caption">
                    <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="color: #cc3e39;background: #ffe7e5;font-size: 12px;line-height: 26px;text-align: center">买赠</span> <!----> </div>
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">畅呼吸智能空气净化器</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">购空净 赠价值 699 元超级活性炭滤芯</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $3499
                        </span>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/de42b5502b815b5e29020f87d545ca44.jpg" alt="..." style="margin-top:100px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">坚果 Pro</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">领券后购机最高优惠 950 元</p>
                        <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="border: 1px solid #ffe57a; color: #e6b217;background: #fffbe5;box-shadow: 0 1px 3px 0 rgba(0,0,0,.05);font-size: 12px;line-height: 26px;text-align: center">限时优惠</span> <!----> </div>                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $1299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/bafd1aebe125ba9a464f459d9b6138d4.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/bd68ff814182aac9434fc4978d1865fe.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/6baa390b3c7b901f2a539cfb17349b23.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/fed059c1692cf906f60fdb76818e428d.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12" style="margin-left: 20px">
                <h4>品牌精选</h4>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/labajieloucengpc1.jpg" alt="..." style="margin-top:30px">



                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/b9c502d4f1a410e2eca1dff3f2b1e47e.jpg" alt="..." style="margin-top:100px">
                    <div class="caption">
                    <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="color: #cc3e39;background: #ffe7e5;font-size: 12px;line-height: 26px;text-align: center">买赠</span> <!----> </div>
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">畅呼吸智能空气净化器</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">购空净 赠价值 699 元超级活性炭滤芯</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $3499
                        </span>

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/de42b5502b815b5e29020f87d545ca44.jpg" alt="..." style="margin-top:100px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">坚果 Pro</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:red">领券后购机最高优惠 950 元</p>
                        <div _ngcontent-c4="" class="badge-container" style="position: absolute;top:20px;right: 40px;font-size: 14px;display: block;line-height: 1.5;"> <!----> <!----><span _ngcontent-c4="" class="badge buy-gifts" style="border: 1px solid #ffe57a; color: #e6b217;background: #fffbe5;box-shadow: 0 1px 3px 0 rgba(0,0,0,.05);font-size: 12px;line-height: 26px;text-align: center">限时优惠</span> <!----> </div>                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $1299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/bafd1aebe125ba9a464f459d9b6138d4.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/bd68ff814182aac9434fc4978d1865fe.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/6baa390b3c7b901f2a539cfb17349b23.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo IMG_PATH;?>/锤子科技官网/fed059c1692cf906f60fdb76818e428d.jpg" alt="..." style="margin-top:95px">
                    <div class="caption">
                        <h6 _ngcontent-c4="" style="text-align: center;font-size: 16px;color:#424242">Smartisan 蓝牙运动耳机</h6>
                        <p _ngcontent-c4="" style="text-align: center;font-size: 12px;color:#b2b2b2">IPX5级防水设计 佩戴舒适</p>
                        <span style="margin-left:100px;font-size: 18px;color:red">
                            $299
                        </span>

                    </div>
                </div>
            </div>

        </div>

        <div class="row" style="margin-top:20px">
            <div class="col-xs-6 col-md-3" >
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/sixiaobanner3.jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/9ae4d799a478d1a629966f84b56a1277.jpg" alt="..." >
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/3f78b9032249cbffbe813dfe1c0f03b7.jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/47f5109762e5e6adcd502a0c57ed4fe3.jpg" alt="...">
                </a>
            </div>

        </div>

        <div class="row" style="margin-top:20px">
            <div class="col-md-12" style="margin-left: 20px">
                <h4>锤子应用</h4>
            </div>
            <div class="col-xs-6 col-md-3" >
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/sixiaobanner3.jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/9ae4d799a478d1a629966f84b56a1277.jpg" alt="..." >
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/3f78b9032249cbffbe813dfe1c0f03b7.jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/47f5109762e5e6adcd502a0c57ed4fe3.jpg" alt="...">
                </a>
            </div>

        </div>

        <div class="row" style="margin-top:20px">
            <div class="col-md-12" style="margin-left: 20px">
                <h4>论坛精选</h4>
            </div>
            <div class="col-xs-6 col-md-3" >
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/sixiaobanner3.jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/9ae4d799a478d1a629966f84b56a1277.jpg" alt="..." >
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="<?php echo IMG_PATH;?>/锤子科技官网/3f78b9032249cbffbe813dfe1c0f03b7.jpg" alt="...">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                <img src="data:image/jpeg;base64,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" alt="...">
                </a>
            </div>

        </div>


    </div>

    <div class="jumbotron" style="height:200px;background-color: white;margin-top:20px">
        <div class="col-md-8">
            <div class="col-md-2" >

                <ul style="list-style: none;">
                    <h5>订单服务</h5>
                    <li><a href="">购买指南</a></li>
                    <li><a href="">支付方式</a></li>
                    <li><a href="">送货政策</a></li>
                </ul>
            </div>

            <div class="col-md-2" >

                <ul style="list-style: none;">
                    <h5>订单服务</h5>
                    <li><a href="">购买指南</a></li>
                    <li><a href="">支付方式</a></li>
                    <li><a href="">送货政策</a></li>
                </ul>
            </div>

            <div class="col-md-2" >

                <ul style="list-style: none;">
                    <h5>订单服务</h5>
                    <li><a href="">购买指南</a></li>
                    <li><a href="">支付方式</a></li>
                    <li><a href="">送货政策</a></li>
                </ul>
            </div>

            <div class="col-md-2" >

                <ul style="list-style: none;">
                    <h5>订单服务</h5>
                    <li><a href="">购买指南</a></li>
                    <li><a href="">支付方式</a></li>
                    <li><a href="">送货政策</a></li>
                </ul>
            </div>

            <div class="col-md-2" >

                <ul style="list-style: none;">
                    <h5>订单服务</h5>
                    <li><a href="">购买指南</a></li>
                    <li><a href="">支付方式</a></li>
                    <li><a href="">送货政策</a></li>
                </ul>
            </div>

            <div class="col-md-2" >

                <ul style="list-style: none;">
                    <h5>订单服务</h5>
                    <li><a href="">购买指南</a></li>
                    <li><a href="">支付方式</a></li>
                    <li><a href="">送货政策</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-4">
            <ul style="list-style: none;">
                <li style="font-size: 30px;line-height: 1;cursor: default;color: #646464;left: 80px;position: relative;">400-626-5666</li>
                <li style="margin-left:30px;clear: both;width: 241px;font-size: 12px;line-height: 18px;color: #c3c3c3;text-align: right;">周一至周日 9:00-18:00（仅收市话费）</li>
                <li><a href="" style="float: right;margin-right: 110px;width: 102px;height: 32px;line-height: 32px;background: linear-gradient(#fcfcfc,#f5f5f5);cursor: pointer;font-size: 14px;padding: 0 0 0 26px;margin-top: 8px;text-align: left;color: #5079d9;border: 1px solid #dcdcdc;border-radius: 5px;"><span class="smartisan-icon info-question"></span>在线帮助</a></li>
            </ul>
        </div>
    </div>

    <div class="jumbotron" style="height:60px;background-color: white;margin-top:20px">
        <h5 style="display:block;margin-left:80px;margin-top:-50px;height: 15px;line-height: 15px;color: #757575;font-size: 100%;font-weight: 400;">Copyright © , Smartisan Digital Co., Ltd. All Rights Reserved.北京锤子数码科技有限公司</h5>
        <ul style="list-style: none;float:left;">
            <li><a href="" style="color: #5079d9;cursor: pointer;transition: all .15s ease-out;text-decoration: none;">法律声明</a></li>
        </ul>
    </div>


</body>
</html>