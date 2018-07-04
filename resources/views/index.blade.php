<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--防CC攻击2008.6.23日王子最后优化-->
<!--SQL防注入2009.3.17日 v3-->
{{ \script\biaoqian::开启缓存($url) }}
<head>
    <title>{{\script\biaoqian::title()}}_重庆论坛</title>
    <script language="javascript" type="text/javascript" src="http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js"></script>
    <script language="javascript" type="text/javascript" src="{{url("asset")}}/js/pinbi.js"></script>
    <link type="text/css" rel="stylesheet" href="{{url("asset")}}/css/index.css"/>
    <link id="setSkin" type="text/css" rel="stylesheet" href="{{url("asset")}}/css/theme_pink1227.css"/>
    <link rel="stylesheet" type="text/css" href="{{url("asset")}}/css/news.css"/>
    <meta http-equiv="Content-Language" content="utf-8"/>
    <meta name="\script\biaoqian::keywords" content="{{\script\biaoqian::固定标题()}}-{{\script\biaoqian::des()}}-{{\script\biaoqian::des()}}-重庆论坛"/>
    <meta name="\script\biaoqian::description" content="{{\script\biaoqian::固定标题()}},{{\script\biaoqian::des()}},{{\script\biaoqian::des()}},{{\script\biaoqian::des()}},{{\script\biaoqian::des()}},{{\script\biaoqian::des()}}" />
    <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
    <script type="text/javascript" src="//js.users.51.la/19540195.js"></script>
    <script language="javascript" type="text/javascript">
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?15610ec5efc214206e412f50705d2dc4";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>

<!--最顶部导航栏-->

<div class="ntes-passport">
    <div class="passport-main code-num">
        <div class="passport-login" id="NTES_Login">
            <div id="login_before" class="left"><span class="wbLogin-ui-btn"></div>
        </div>
        <div class="passport-entry">
            <SPAN style="CURSOR: hand">设为首页</SPAN> | <SPAN title=经典重庆 style="CURSOR: hand">加入收藏</SPAN>
        </div>
    </div>

</div>
<!--最顶部导航栏-->

<!-- LOG及详细导航频道链接表 -->
<div class="header" style="background:#FFFFFF">
    <h1>经典重庆</h1>
    <div class="logo">
        <a href="{{\script\biaoqian::random_url()}}"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" alt="{{\script\biaoqian::keyword()}}" border="0" height="40" width="135"/></a>
    </div>
    <div class="channel">
        <div class="channel-col col-w" style="margin-left:-10px;">
			<span class="nowrap"><strong><a href="{{\script\biaoqian::random_url()}}">新闻</a></strong> <a href="{{\script\biaoqian::random_url()}}">重庆</a> <a
                        href="{{\script\biaoqian::random_url()}}">国内</a> <a href="{{\script\biaoqian::random_url()}}">国际</a>
			<strong><a href="{{\script\biaoqian::random_url()}}">经济</a></strong> <a
                        href="{{\script\biaoqian::random_url()}}">IT</a> <a
                        href="{{\script\biaoqian::random_url()}}">汽摩</a> <a
                        href="{{\script\biaoqian::random_url()}}">金融</a>
<strong><a href="{{\script\biaoqian::random_url()}}">交通</a></strong> <a href="{{\script\biaoqian::random_url()}}">CBD</a> <a href="{{\script\biaoqian::random_url()}}">未来</a> <a
                        href="{{\script\biaoqian::random_url()}}">规划</a></span>
        </div>
        <div class="channel-col col-w">
			<span class="nowrap">
<strong><a href="{{\script\biaoqian::random_url()}}">名企</a></strong> <a href="{{\script\biaoqian::random_url()}}">教育</a> <a
                        href="{{\script\biaoqian::random_url()}}">区县</a> <a href="{{\script\biaoqian::random_url()}}">西部</a>
			<strong><a href="{{\script\biaoqian::random_url()}}">旅游</a></strong> <a
                        href="{{\script\biaoqian::random_url()}}">美食</a> <a href="{{\script\biaoqian::random_url()}}">美女</a> <a
                        href="{{\script\biaoqian::random_url()}}">人文</a>
	<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">杂志</a></strong> <a href="{{\script\biaoqian::random_url()}}">图片</a> <a
                        href="{{\script\biaoqian::random_url()}}">摄影</a> <a href="{{\script\biaoqian::random_url()}}"
                                                                            target="_blank">电台</a>
			</span>
        </div>
        <div class="channel-col col-w3">
			<span class="nowrap">
<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">论坛</a></strong> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">话题</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">排行</a>
<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">微博</a></strong> <a href="{{\script\biaoqian::random_url()}}"
                                                                                        target="_blank">社区</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">群组</a>
<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">家园</a></strong> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">日志</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">相册</a>
</span>
        </div>
        <div class="channel-col col">
			<span class="nowrap">
			<strong><a href="{{\script\biaoqian::random_url()}}">专题</a></strong> <a href="{{\script\biaoqian::random_url()}}">焦点</a> <a href="{{\script\biaoqian::random_url()}}">推荐</a>
<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">游戏</a></strong> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">应用</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">电视</a>
			<strong><a href="{{\script\biaoqian::random_url()}}">视频</a></strong> <a href="{{\script\biaoqian::random_url()}}">下载</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">鸟瞰</a>

			</span>
        </div>
        <div class="channel-col col">
			<span class="nowrap">

	<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">情感</a></strong> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">交友</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">宠物</a>
	<strong><a href="{{\script\biaoqian::random_url()}}" id="houseUrl" target="_blank">健康</a></strong> <a
                        href="{{\script\biaoqian::random_url()}}">美容</a> <a
                        href="{{\script\biaoqian::random_url()}}">消费</a>
	<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">算命</a></strong> <a href="{{\script\biaoqian::random_url()}}"
                                                                                            target="_blank">解梦</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">许愿</a>

			</span>
        </div>
        <div class="channel-col col">
			<span class="nowrap">

	<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">商务</a></strong> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">企业</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">商城</a>
	<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">百科</a></strong> <a href="{{\script\biaoqian::random_url()}}"
                                                                                            target="_blank">团购</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">地图</a>
	<strong><a href="{{\script\biaoqian::random_url()}}" target="_blank">搜索</a></strong> <a href="{{\script\biaoqian::random_url()}}"
                                                                                            target="_blank">网址</a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank">工具</a>
			</span>
        </div>
    </div>

    <!-- LOG及详细导航频道链接表 -->

    <div id="dNavBar" style="float:none;">
        <ul>
            <li><a href="{{\script\biaoqian::random_url()}}">经典重庆</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">经典微博</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">经典家园</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">重庆商务网</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">精品馆</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">重庆美图库</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">经典百科</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">百事通</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">重庆宣传片</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">安全网址</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">重庆论坛</a></li>
            <li><a href="{{\script\biaoqian::random_url()}}" target="_blank">经典重庆志</a></li>
        </ul>
    </div>


    <!---搜索框信息栏-->
    <div class="ntes-yodao">
        <div class="yodao-main">
            <a href="{{\script\biaoqian::random_url()}}" class="yodao-logo" title="点击进入全能搜索首页">全能搜索</a>
            <form id="ydForm" method="get" action="{{\script\biaoqian::random_url()}}" name="ydForm">
                <div class="wgt-yodao-search">
                    <div class="yodao-search-category">
					<span class="search-category-item">
					</span>
                    </div>
                    <label for="yodaoSearch">全能搜索</label>
                </div>
            </form>
            <div class="yodao-entry c-entry">
				<span class="yodao-entry-mine" id="ydTj">
					<a href="{{\script\biaoqian::random_url()}}" title="进入经典专题">进入经典专题 <span class="code-en">&raquo;</span> </a>
				</span>
                <p id="ydHotKeys" class="yodao-entry-link"></p>
            </div>
        </div>
    </div>


    <div style="margin-bottom:4px;">


    </div>
    <div style="margin-bottom:4px;">
        <!--<a href="http://b2b.classic023.com"><img src="images/b2b980_90.jpg" width="960" height="90" alt="企业免费推广，请来重庆商务网，重庆电子商务网" /></a>--><a
                href="{{\script\biaoqian::random_url()}}"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="960" height="90" alt="AD"/></a><br/>
    </div>




    <!---搜索框信息栏-->
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
        <title>无标题文档</title>
    </head>

    <body>

    </body>
    </html>

    <div id="wrap">
        <div class="daohang">
            <div class="daohang_left">&nbsp;<a href="{{\script\biaoqian::random_url()}}"><font
                            color="#ff6600">国际重庆</font></a><font color="#ff6600">-</font><a
                        href="{{\script\biaoqian::random_url()}}"><font color="#ff6600">重庆与世界</font></a></div>
            <div class="daohang_right">
                <a href="{{\script\biaoqian::random_url()}}">重庆论坛</a> <a href="{{\script\biaoqian::random_url()}}">重庆商务网</a> <a
                        href="{{\script\biaoqian::random_url()}}">精品网</a> <a href="{{\script\biaoqian::random_url()}}">经典微博</a> <a
                        href="{{\script\biaoqian::random_url()}}">重庆百科</a>&nbsp;&nbsp;
            </div>
        </div>


        <div class="view" id="tp734">
            <div class="view_left">

                <div class="view_title">


                    {{\script\biaoqian::固定标题()}}

                    <br/><br/>

                    <p align="center">【来源】:{{\script\biaoqian::keyword()}} &nbsp;&nbsp;【时间】:{{\script\biaoqian::随机时间()}}&nbsp;&nbsp;<a
                                href="{{\script\biaoqian::random_url()}}" blockid="673">[发表评论]</a>


                        <br/>


                </div>
                <div class="view_content">
                    {!! \script\biaoqian::body() !!}
                    {{\script\biaoqian::固定key()}}
                    {!! \script\biaoqian::body() !!}
                    {!! \script\biaoqian::body() !!}
                    <br>
                    {!! \script\biaoqian::body() !!}
                    {!! \script\biaoqian::body() !!}
                    {!! \script\biaoqian::body() !!}
                    {{\script\biaoqian::固定标题()}}
                    <br>

                </div>
                <p align="left"><h4 align="center">推荐广告</h4></p>
                <br/><a href="{{\script\biaoqian::random_url()}}"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="680" height="64"
                                                                       alt="{{\script\biaoqian::正常标题()}}"></a><br/><a href="{{\script\biaoqian::random_url()}}"
                                                                                                                      target="_blank"
                                                                                                                      title="{{\script\biaoqian::正常标题()}}"><img
                            src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="340" height="65" border="0" marginwidth="0"
                            marginheight="0" alt="{{\script\biaoqian::正常标题()}}"/></a><a href="{{\script\biaoqian::random_url()}}" target="_blank" title="{{\script\biaoqian::正常标题()}}"><img
                            src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="340" height="65" border="0" marginwidth="0"
                            marginheight="0" alt="{{\script\biaoqian::正常标题()}}"/></a><br/>
                <p align="center">
                <h4 align="center">网友评论</h4><br/>


                <div align=center>温馨提示:当前还没有评论!欢迎发表评论!<br/></div>
                <br/>


                <form>
                    <table width="94%" border="0" align="center" cellpadding="20" cellspacing="0">
                        <tr>
                            <td align="left">&nbsp;&nbsp;用户名</td>
                            <td align="left"><input type="text" size="25" name="userid"></td>
                        </tr>
                        <tr>
                            <td align="left">&nbsp;&nbsp;评 论</td>
                            <td colspan="2" align="left">
                                <textarea rows="5" name="content" cols="71"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="left">
                                <input class=wenbenkuang name=verifycode type=text value="" maxlength=4 size=10></td>
                        </tr>
                    </table>

                </form>
                <br/>

            </div>

            <div class="view_right">
                <div class="c_right_1">
                    <!--<h3 align="center"><span class="fr"><a href="http://bbs.classic023.com/forum-31-1.html">新闻评论>></a></span>新闻搜索</h3>-->
                    <div class="right_search">
                        <form name="form1" method="post" action="baidusearch.asp" target=_blank>
                            <div align="center">关键字:
                                <input name="\script\biaoqian::keyword" type="text" size="10">
                            </div>
                        </form>
                    </div>

                </div>
                <h4 align="center"><span class="fr"><a href="{{\script\biaoqian::random_url()}}">新闻中心>></a></span>相关新闻</h4>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a></p>

                <h4 align="center">最新视频</h4>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}" href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[3407]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}"
                                         href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[3643]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}" href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[2193]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}" href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}
                        CS-Time</a>&nbsp;<font color="#999999">人气:[3295]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}"
                                         href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[1435]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}" href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[3121]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}" href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[5400]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}" href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[3007]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}"
                                         href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[3497]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}" href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[3747]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}"
                                         href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[3489]</font></p>

                <p align="left">&nbsp;<a title="{{\script\biaoqian::正常标题()}}"
                                         href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>&nbsp;<font
                            color="#999999">人气:[3268]</font></p>

                <h4 align="center">图片新闻</h4>


                <div class="view_pnews">
                    <div class="pnews_imgborder"><a href="{{\script\biaoqian::random_url()}}"><img
                                    src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" class="PreviewImage0" alt="{{\script\biaoqian::正常标题()}}"/></a></div>
                    <br/>
                    <a href='{{\script\biaoqian::random_url()}}' title='{{\script\biaoqian::正常标题()}}'>{{\script\biaoqian::正常标题()}}</a>
                </div>


                <div class="view_pnews">
                    <div class="pnews_imgborder"><a href="{{\script\biaoqian::random_url()}}"><img
                                    src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" class="PreviewImage0" alt="{{\script\biaoqian::正常标题()}}"/></a></div>
                    <br/>
                    <a href='{{\script\biaoqian::random_url()}}' title='{{\script\biaoqian::正常标题()}}'>{{\script\biaoqian::正常标题()}}</a>
                </div>


                <div class="view_pnews">
                    <div class="pnews_imgborder"><a href="{{\script\biaoqian::random_url()}}"><img
                                    src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" class="PreviewImage0" alt="{{\script\biaoqian::正常标题()}}"/></a></div>
                    <br/>
                    <a href='{{\script\biaoqian::random_url()}}' title='{{\script\biaoqian::正常标题()}}'>{{\script\biaoqian::正常标题()}}</a>
                </div>


                <div class="view_pnews">
                    <div class="pnews_imgborder"><a href="{{\script\biaoqian::random_url()}}"><img
                                    src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" class="PreviewImage0" alt="{{\script\biaoqian::正常标题()}}"/></a></div>
                    <br/>
                    <a href='{{\script\biaoqian::random_url()}}' title='{{\script\biaoqian::正常标题()}}'>{{\script\biaoqian::正常标题()}}</a>
                </div>

                <h4 align="center">最新祈福
                </h4>


                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}" title="{{\script\biaoqian::正常标题()}}"
                                         target="_blank">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}" title="{{\script\biaoqian::正常标题()}}"
                                         target="_blank">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}"
                                         title="{{\script\biaoqian::正常标题()}}"
                                         target="_blank">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}" title="{{\script\biaoqian::正常标题()}}"
                                         target="_blank">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}"
                                         title="{{\script\biaoqian::正常标题()}}" target="_blank">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}"
                                         title="{{\script\biaoqian::正常标题()}}" target="_blank">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}"
                                         title="{{\script\biaoqian::正常标题()}}"
                                         target="_blank">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}" title="{{\script\biaoqian::正常标题()}}"
                                         target="_blank">{{\script\biaoqian::正常标题()}}</a></p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}"
                                         title="{{\script\biaoqian::正常标题()}}" target="_blank">{{\script\biaoqian::正常标题()}}</a>
                </p>

                <p align="left">&nbsp;<a href="{{\script\biaoqian::random_url()}}"
                                         title="{{\script\biaoqian::正常标题()}}"
                                         target="_blank">{{\script\biaoqian::正常标题()}}</a></p>
                <h4 align="center">实用工具</h4>

                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">手机归属地查询</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                       height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">快递查询<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="19" height="20"
                                                                               border="0" alt="{{\script\biaoqian::正常标题()}}"></a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">万年历</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                   height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">手机话费查询<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="19" height="20"
                                                                                 border="0" alt="{{\script\biaoqian::正常标题()}}"></a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">常用电话号码</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                      height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">邮编查询</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">QQ强制对话<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="19" height="20"
                                                                                 border="0" alt="{{\script\biaoqian::正常标题()}}"></a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}"
                                                                                                                                         width="21"
                                                                                                                                         height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">QQ号码吉凶 <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="19" height="20"
                                                                                  border="0" alt="{{\script\biaoqian::正常标题()}}"></a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21"><a
                            href="{{\script\biaoqian::random_url()}}">地图查询 <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="19" height="20"
                                                                                border="0" alt="{{\script\biaoqian::正常标题()}}"></a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}"
                                                                                                                                        width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">股市行情查询</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">IP地址查询</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                      height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">预产期自测</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">英文词典、翻译</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                       height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">交通标志大全</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">生男生女</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}"
                                                                                    width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">列车时刻表</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">车牌号码查询</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                      height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">中国朝代表</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">古书排版</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                    height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">身份证号码查询</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">火星文转换</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                     height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">全国著名医院查询</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">下载地址转换</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                      height="21" alt="{{\script\biaoqian::正常标题()}}"><a class="Ico_aBox"
                                                                                                                                        href="{{\script\biaoqian::random_url()}}"
                                                                                                                                        title="绕口令">绕口令</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">电视节目</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                    height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">购房计算器</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">两日距离天数计算</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                        height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">网速测试</a></p>
                <p style="font-size:14px;text-align:left;">&nbsp;<img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21" height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">ICO图标生成</a> <img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" width="21"
                                                                                       height="21" alt="{{\script\biaoqian::正常标题()}}"><a
                            href="{{\script\biaoqian::random_url()}}">汉字转换拼音</a></p>
                <h4 align="center">推荐广告</h4><br/>
                <a href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}"
                                                                                  border="0" title="{{\script\biaoqian::正常标题()}}" alt="{{\script\biaoqian::正常标题()}}"></a><br/><br/>
                <a href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                                                                                  title="{{\script\biaoqian::正常标题()}}" alt="{{\script\biaoqian::正常标题()}}"></a><br/><br/>
                <a href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}"
                                                                                  border="0" title="{{\script\biaoqian::正常标题()}}" alt="{{\script\biaoqian::正常标题()}}"></a><br/><br/><a
                        href="{{\script\biaoqian::random_url()}}" target="_blank"><img
                            src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                            title="{{\script\biaoqian::keyword()}}" alt="{{\script\biaoqian::正常标题()}}"></a><br/><br/>
                <a href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}"
                                                                                  border="0" title="{{\script\biaoqian::正常标题()}}" alt="{{\script\biaoqian::正常标题()}}"></a><br/><br/>
            </div>
        </div>
        <div class="mama">

            <a href="{{\script\biaoqian::random_url()}}" target="_bank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}"
                                                                             width=958 alt="{{\script\biaoqian::keyword()}}" height="80"/></a>
        </div>


        <div style="clear:both;border:1px #AFDEF4 solid;margin:6px 0 5px;width:958px;">
            <p style="width:95%;margin:20px 2px 5px 20px;font-size:14px; font-weight:normal;">
                <a href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                                                                                  alt="{{\script\biaoqian::正常标题()}}"/></a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                                                                                       alt="{{\script\biaoqian::正常标题()}}"/></a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                                                                                       alt="{{\script\biaoqian::正常标题()}}"/></a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                                                                                       alt="{{\script\biaoqian::正常标题()}}"/></a>
                <a href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0" alt="{{\script\biaoqian::正常标题()}}"/></a>
                <a href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                                                                                  alt="{{\script\biaoqian::正常标题()}}"/></a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                                                                                       alt="{{\script\biaoqian::正常标题()}}"/></a> <a
                        href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                                                                                       alt="{{\script\biaoqian::正常标题()}}"/></a><a
                        href="{{\script\biaoqian::random_url()}}" target="_blank"><img src="{{\script\biaoqian::图片地址('http://23.89.4.197')}}" border="0"
                                                                                       alt="{{\script\biaoqian::正常标题()}}"/></a></p>

            <div style="width:95%;margin:20px 2px 5px 20px;font-size:14px; font-weight:normal;"><p>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                    <a href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::正常标题()}}</a>
                </p></div>

        </div>
        <div class="footer">
            <div class="aboutNetease">
                <ul>
                    <li><a href="{{\script\biaoqian::random_url()}}">About classic023</a>　-　<a href="{{\script\biaoqian::random_url()}}">经典简介</a>　-　<a
                                href="{{\script\biaoqian::random_url()}}">友情链接</a>　-　<a href="{{\script\biaoqian::random_url()}}">广告服务</a>　-　<a
                                href="{{\script\biaoqian::random_url()}}">网址导航</a>　-　<a href="{{\script\biaoqian::random_url()}}">百事通</a>　-　<a
                                href="{{\script\biaoqian::random_url()}}">经典QQ群</a>　-　<a href="{{\script\biaoqian::random_url()}}">网站地图</a>　-　<a
                                href="{{\script\biaoqian::random_url()}}">{{\script\biaoqian::固定标题()}}</a></li>
                </ul>
            </div>
            <!-- 页脚 -->
            <div class="foot">
                <div class="copyRight">经典宝马汇版权所有　&copy;2011-2015&nbsp;&nbsp;<a href="{{\script\biaoqian::random_url()}}" class="a4">著作权保护声明</a>&nbsp;&nbsp;<a
                            href="{{\script\biaoqian::random_url()}}" target="_blank"
                            title="友情链接检查">友情链接检查</a>&nbsp;&nbsp;<a href="{{\script\biaoqian::random_url()}}">苏ICP备13006526号|粤公网安备
                        44030302000006号</a>
                    <br/>
                </div>
            </div>
            <!-- 页脚 -->
        </div>
    </div>
</div>
<script type="text/javascript" src="{{url('asset/js/tiaozhuan.js')}}"></script>
{{\script\biaoqian::生成缓存($url)}}
</body>
</html>