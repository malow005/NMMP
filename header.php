<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!--[if lt IE 9]>
    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>
    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
    	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/3/paper/bootstrap.min.css"/>
    	<!--<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
		 <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<style type="text/css">
				a:hover{
					text-decoration: none;
				}.col-left{
					display: block;
					float: left;
				}.col-right{
					margin-left: 10px;
				}.comment{
					margin-bottom: 10px;
				}.img:hover{
					transform: rotate(-360deg);
				}body{ 
					background:#fff url() fixed no-repeat left top; background-size:100%;
				}body{
					padding-top: 80px;
				}.muted > a:visited{
					color:  #666666;
				}.previous > a:visited{
					color:  #666666;
				}.next > a:visited{
					color:  #666666;
				}.previous > a:link{
					color:  #666666;
				}.next > a:link{
					color:  #666666;
				}.muted:link{
					color:  #666666;
				}*{
					max-width:100%
				}.pagination > li >a:link{
					color: #666666;
				}.pagination > li >a:visited{
					color: #666666;
				}
			</style>
			<script type="text/javascript">
				$(document).ready(function(){
					$(".tags").children().addClass("badge")
				})
			</script>
</head>
<body class="container">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->




		<div id="top">
			<nav class="navbar navbar-default navbar-fixed-top">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
			    </div>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			      <ul class="nav navbar-nav">
			      	<!--<li><a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
			      	-->
					<?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
			        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                    <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
                    <?php endwhile; ?>
			      </ul>
	                <form class="navbar-form navbar-left" id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
				        <div class="form-group">
	                    <input type="text" id="s" name="s" class="text form-control" placeholder="<?php _e('输入关键字搜索'); ?>" />
	                    </div>
	                    <button type="submit" class="submit btn btn-default"><?php _e('Search'); ?></button>
	                </form>
			    </div>
			  </div>
			</nav>
		</div>





