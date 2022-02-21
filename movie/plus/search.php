
		 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜索页_人人电影网,百度云盘资源</title>
<meta name="keywords" content="" />
<meta name="description" content="" />


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/static/css/pure-min.css">
<link rel="stylesheet" href="/static/css/grids-responsive-min.css">
<link href="/static/css/app.css" rel="stylesheet" type="text/css">
<link href="/static/css/iconfont.css" rel="stylesheet" type="text/css">
<script src="/static/js/jquery.min.js" type="text/javascript"></script>
<script src="/static/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/static/js/jquery.lazyload.min.js" type="text/javascript"></script>
<style>
	body {
		/*background: url(/static/images/a561b538jw1fbeebwfvw5j21jk0rsqts.jpg) repeat-x fixed center top;*/
		color: #333;
	}
</style>
<script src="/static/js/jquery.easing.min.js" type="text/javascript"></script>
<script src="/static/js/jquery.easing.compatibility.min.js" type="text/javascript"></script>
</head>
<body>

<!--头部开始-->
<!-- member -->
<script language="javascript" type="text/javascript">

function CheckLogin(){

    var taget_obj = document.getElementById('_userlogin');

    myajax = new DedeAjax(taget_obj,false,false,'','','');

    myajax.SendGet2("/member/ajax_loginsta.php");

    DedeXHTTP = null;

  }

</script>

<!-- member --end-->







<script>



var _hmt = _hmt || [];



(function() {



  var hm = document.createElement("script");



  hm.src = "https://hm.baidu.com/hm.js?4c18eb2a34373fa783fa1713d0697753";



  var s = document.getElementsByTagName("script")[0]; 



  s.parentNode.insertBefore(hm, s);



})();



</script>



<div id="top" class="top" style="height: auto;">



    <div class="clearfix">



        <div class="float-left">



            <a href="/" class="logo"><img src="/static/picture/logo.png" height="22px"></a>



        </div>





<style type="text/css">

.top form{float: left;}

</style>

        



        <div class="topbar-user float-right">





<!-- 会员登陆 -->

<style type="text/css">

.huiyuan{float: right;}

</style>

              <div class="huiyuan" style="display:none;">

              

                <div id="_userlogin">

   [<a title="登录" href="/member/login.php">登录</a>] [<a title="注册" href="/member/index_do.php?fmdo=user&dopost=regnew">注册</a>]

     <script language="javascript" type="text/javascript">CheckLogin();</script>

</div>

              </div>

<!-- 会员登陆--end -->







            <form class="pure-form" action="/plus/search.php" target="_blank">



                <input type="text"  name="q" class="search-box"   placeholder="电影 / 电视剧" style="color: #000;">



                <input type="hidden" name="pagesize" value="10" />



                <button type="submit" name="submit"  class="pure-button pure-button-primary">搜索</button>



            </form>











        </div>







        <div class="topbar-search float-right small-show">



            <a href="/plus/search.php?q=NULL" class="top-search"><i class="icon iconfont icon-search"></i></a>



        </div>











        <div class="clear"></div>



        <div class="float-left" style="  line-height: 46px;">



<a href="/">首页</a>



            



            <a href="/movie/">电影</a>



           



            <a href="/dianshiju/">电视剧</a>



           



            <a href="/zongyi/">老电影</a>



           



            <a href="/dongman/">动漫</a>



           



            <a href="/othera/banner/2019/0926/5620.html">备用网址</a>



           



        </div>



        



    </div>



</div>



<style>



.clear{ clear:both;}



@media screen and (min-width: 1201px) { 



.float-left a{color: #fff;font-size:20px; padding:0 10px;}



} 



@media screen and (max-width: 1200px) { 



.float-left{ float:left; margin-left:10px;}



.float-left a{color: #fff;font-size:14px; margin-right:20px;}



} 



@media screen and (max-width: 400px) { 



.float-left{ float:left; margin-left:10px;}



.float-left a{color: #fff;font-size:14px; margin-right:10px;}



} 



</style>



<script>



    function dropdown(handle, entity) {



        var flag = 1;



        var topmore = $(handle);



        var listmore = $(entity);



        topmore.mouseenter(function(){



            listmore.show();



        }).mouseleave(function(){



            setTimeout(function(){



                if(flag){



                    listmore.hide();



                }



            },100);



        });



        listmore.mouseleave(function(){



            listmore.hide();



            flag = 1;



        }).mouseenter(function(){



            flag = 0;



        });



    }



    dropdown('#topmore', '.top-more');



    dropdown('#tophead', '.top-head');



    </script>




<style>
@media screen and (min-width: 1201px) { 
.nrtop { margin-top:60px;} 
}
@media screen and (max-width: 1200px) { 
.nrtop { margin-top:20px;} 
}  
</style>

<!--头部结束-->
<div class="wrapper masking nrtop">
	<div class="pure-g">
		<div class="pure-u-1 pure-u-md-17-24">
			<div class="searchbox whitebackground">
			

 <form style="position: relative" class="pure-form" method="get" action="/plus/search.php" >
	<input id="sou" name="q" style="width:100%" value=""  placeholder="电影 / 电视剧" autocomplete="off">
	<input type="hidden" name="pagesize" value="10" />
	<button id="sou-btn" type="submit" name="submit" style="position: absolute; top: -1px; right: 0; margin: 0!important;" class="pure-button pure-button-primary">搜索</button>
</form>


				
			</div>
			<div class="list">

				<ul id="movielist">
				  <li class="whitebackground" style="padding: 15px; border-radius: 5px">
					<h3>
					  如果没有搜索到想要的影片请点&nbsp;&nbsp;<a class="anniu" target="_blank" href="https://docs.qq.com/doc/DVnVZUXhXVFFpWExJ">求片留言</a></h3>
				  </li>
				   
				  

				</ul>		
		
			</div>
<!--当评分为空时设置默认值-->
<script type="text/javascript">
window.onload = function () {
  $("#movielist .dou").each(function(){
	  var lebs = $.trim($(this).find("a b").html()).length;
	  if(lebs == 0){
		  $(this).find("a").attr("href","https://movie.douban.com/subject/0/"); 
		  $(this).find("a b").html("0.0");
	  }
  })
  $("#movielist .imdb").each(function(){
	  var qlebs = $.trim($(this).find("b").html()).length;
	  if(qlebs == 0){
		  $(this).find("b").html("0.0"); 
	  } 
  })
}
</script>   
<!--页码样式-->
<style>
#pageNum {font-size: 14px;padding: 25px 0;text-align: center;background: #fff; margin-top: 10px;}
#pageNum a {text-decoration: none;padding: 8px 9px;border: 1px solid #ccc;background: #fff;color: #333;-webkit-transition: all linear .2s;
-moz-transition: all linear .2s;-ms-transition: all linear .2s;transition: all linear .2s;margin-right:5px;}
#pageNum a:hover,#pageNum a.thisclass {background: #EB444C;color: #fff;border: 1px solid #EB444C;border-radius: 5px;font-weight: bold;}
	
#pageNumq {font-size: 14px;padding: 25px 0;text-align: center;background: #fff; margin-top: 10px;}
#pageNumq a {text-decoration: none;padding: 8px 9px;border: 1px solid #ccc;background: #fff;color: #333;-webkit-transition: all linear .2s;
-moz-transition: all linear .2s;-ms-transition: all linear .2s;transition: all linear .2s;margin-right:5px;}
#pageNumq a:hover,#pageNumq a.thisclass{background: #EB444C;color: #fff;border: 1px solid #EB444C;border-radius: 5px;font-weight: bold;}
#pageNumq{display: none;}
@media screen and (max-width: 767px) {
#pageNumq{display: block;}
#pageNum{display: none;}
}
	
</style>      
<div id="pageNum">共0页/0条记录</div>
<div id="pageNumq">共0页/0条记录</div>


		</div>
		<!--右侧开始-->
		<div class="pure-u-1 pure-u-md-7-24">
<div class="side-bar">
								<!-- items -->
<style>
.item-third-dl{padding:0;overflow:hidden;margin: 0 0 15px;}
.item-third-box{position: fixed;   top: 50px;width: 260px;display:none;}
.item-third {box-sizing: border-box;width: 100%;float: left;display: block;cursor: pointer;	color:#555;}
.item-third:hover {color: #f84e4e;text-decoration: none;}
.item-third .item-third-container {width: 100%;background: #fff;border-radius: 4px}
.item-third .item-third-cover {width: 100%;padding-top: 100%;background-size: cover;border-radius: 4px 4px 0 0}
.item-third .item-third-info-container {border-top: 0}
.item-third .item-third-name {padding-left: 10px;padding-right: 10px;text-overflow: ellipsis;white-space: nowrap;
	overflow: hidden;font-size:14px;}
.item-third .item-third-info {padding: 5px 10px;padding-bottom: 2px;overflow: hidden}
.item-third .item-third-info .item-third-price {float: left;color:#555;}
.item-third .item-third-info .item-third-price b {color: #f84e4e;font-size:20px;}
.item-third .item-third-info .item-third-fav-count {color: #979797;float: right;line-height:30px;}
.item-third .item-third-info .item-third-fav-count i {display: block;margin-top: 9px;margin-right: 2px;float: left;
	width: 15px;height: 13px;background: url(/static/images/icon_favorite_78d7777.png);background-size: 15px;}
.item-third .item-third-info .item-third-fav-count i.like {background: url(/static/images/icon_favorites_selected_35f43f3.png);background-size: 15px}
.item-third .item-third-info .item-third-fav-count p {margin-left: 20px;	line-height: 22px}
.mall-data{outline: 0px;   display: block;   padding-right: 0px;   float: right;color: rgb(51, 51, 51);margin-top: 6px; font-size: 12px;   line-height: 14px;}
.card-btn-deep{outline: 0px;  display: block;   padding-right: 0px;  float: right;  width: 68px;  height: 28px;  margin-left: 10px;   border-radius: 3px;
    line-height: 28px;   text-align: center;   font-size: 12px;   background-color: rgb(240, 72, 72);   color: rgb(255, 255, 255);}
.tag-coupon{height: 16px;   width: 16px;  text-align: center;  line-height: 16px;  display: inline-block;  vertical-align: middle;  margin-right: 6px;}
.tag-quan{width: auto;}
.icon-quan{width: 17px;   height: 16px;   display: inline-block;  vertical-align: top;  background-image: url(/static/images/icon-q.png);
    background-image: -webkit-image-set(url(/static/images/icon-q.png) 1x,url(/static/images/icon-q2.png) 2x);
    background-image: -moz-image-set(url(/static/images/icon-q.png) 1x,url(/static/images/icon-q2.png) 2x);
    background-image: -ms-image-set(url(/static/images/icon-q.png) 1x,url(/static/images/icon-q2.png) 2x);
    background-image: -o-image-set(url(/static/images/icon-q.png) 1x,url(/static/images/icon-q2.png) 2x);}
.quan-money {   border: 1px solid #f50;   border-left: none;   display: inline-block;   vertical-align: top;  height: 14px;   line-height: 14px;
background-color: #FFF;   border-radius: 0 2px 2px 0;   padding: 0 3px;   color: #E64D00;}
</style>
					
<dl class="item-third-dl">
  <div>
    <div class="item-third">
     
    </div>
  </div>
</dl>	
					
<!-- items end -->	
<div class="box shadow" style="padding: 10px;color:#999;font-size:12px; line-height:20px;    display: none;">
    <b style="color:#c00">现在迅雷屏蔽资源比较严重</b>，<br>
    是迅雷软件的问题！解决办法：<br>
    1.<a href="https://pan.baidu.com/download" target="_blank">百度网盘离线下载</a><br>
    2.<a href="https://pan.baidu.com/s/1nvT6eE1" target="_blank">使用早期版本迅雷5.8下载</a> 密码: vi2g<br>
	3.<a href="https://pan.baidu.com/s/1kVQSszd" target="_blank">使用utorrent下载</a> 密码: ygm3<br>
    4.使用115网盘，BitComet等软件下载。
</div>
<div class="box shadow clearfix">
    <div class="tit">由于版权原因，本站只供百度云网盘资源，版权均属于影片公司所有，请在下载后24小时删除，切勿用于商业用途。本站所有资源信息均从互联网搜索而来，本站不对显示的内容承担责任，如您认为本站页面信息侵犯了您的权益，请附上版权证明邮件告知，在收到邮件后72小时内删除。</div>
    
    <div class="float-left" style="width: 0%; padding: 0%">
       <img class="float-left" alt="商务合作" src="https://ae01.alicdn.com/kf/HTB19D99bcnrK1RkHFrdq6xCoFXaJ.jpg" width="100%">

    </div>
    <div class="float-right" style="width: 0%;  padding: 0%">
        <a class="float-right" href="微博域名" target="_blank" rel="nofollow">
        <img alt="官方微信公众号" src="https://s1.ax1x.com/2018/11/07/iTJ3LD.jpg" width="100%">

   		</a>
    </div>
</div>
<div class="box shadow" style="padding:5px">
    <a target="_blank" href="http://www.rrzxys.com/" class="tutorial text-center transition">福利<i>(点击进入)</i></a>
</div>


<div class="box shadow" style="padding:15px">
    <a href="http://www.rrzxys.com/" target="_blank">免费在线观看</a>
    <a target="_blank" href="域名"></a>
</div>			
</div>
</div>
		<!--结束-->
	</div>
</div>
<script>
	$(function() {
		// 异步加载图片
		$("#movielist img").lazyload({
			effect: "fadeIn"
		});

		// 下拉选选
		var t = true;
		$('.drop-down').click(function () {
			$(this).focus();
			var obj = $(this).parent().find('.drop-down-menu');
			var h = obj.height();
			obj.css('height','0');
			obj.show().animate({height:h}, {duration: 400, easing: 'easeOutBounce'});
		}).blur(function () {
			if(t) {
				var obj = $(this).parent().find('.drop-down-menu');
				obj.animate({height:0}, 200, 'easeInQuart', function () {
					obj.hide();
					obj.css('height','auto');
				});
			}
		});
		$('.drop-down-menu a').mouseover(function () {
			t = false;
		}).mouseout(function () {
			t = true;
		});
	});
</script>
	
</body>
</html>
