<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>



<?php function threadedComments($comments, $singleCommentOptions) {
$commentClass = '';
if ($comments->authorId) {
if ($comments->authorId == $comments->ownerId) {
$commentClass .= ' comment-by-author';
} else {
$commentClass .= ' comment-by-user';
}
}
 
$commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';
?>
<li id="<?php $comments->theId(); ?>" class="comment-body<?php
if ($comments->_levels > 0) {
echo ' comment-child';
$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
//以上部份 不用理会，是判断一些奇偶数评论和作者类的，下面的才是需要修改的，根据需要修改吧， php部份不需要 修改，只需要修改 HTML 部分，下面是我现在用的
?>">
<div class="comment-author">
<?php $comments->gravatar($singleCommentOptions->avatarSize, $singleCommentOptions->defaultAvatar);    //头像 只输出 img 没有其它标签 ?>
<div class="comment-info">
<cite class="fn"><?php $singleCommentOptions->beforeAuthor();
$comments->author();$singleCommentOptions->afterAuthor(); //输出评论者 ?>
</cite>
<em class="comment-meta">
<a href="<?php $comments->permalink(); ?>"><?php $singleCommentOptions->beforeDate();
$comments->date($singleCommentOptions->dateFormat);
$singleCommentOptions->afterDate();  //输出评论日期 ?></a>
</em>
</div>
<div class="comment-reply">
<?php $comments->reply($singleCommentOptions->replyWord); //输出 回复 链接?>
</div>
</div>
 
<?php $comments->content(); //输出评论内容，包含 <p></p> 标签 ?>
<?php if ($comments->children) { ?>
<div class="comment-children">
<?php $comments->threadedComments($singleCommentOptions); //评论嵌套?>
</div>
<?php } ?>
 
</li>
<?php
}
?>

<style type="text/css">
	.comment-list{margin:0;list-style:none; padding: 5px 0}
ol.comment-list li{ margin: 10px 0;padding: 10px 10px 5px;border:1px solid #e3e3e3;background-color:#FFFFFF;-moz-border-radius:5px; -webkit-border-radius:5px;}
ol.comment-list li.comment-even{background-color:#FFFFFF; border-color: #E3E3E3;}
ol.comment-list li .comment-reply{float: right; margin-top: -3px;}
ol.comment-list li .comment-reply a{font-size:12px;border:none;color:#aaa;}
ol.comment-list li .comment-reply a:hover{color:#444;}
.comment-body{overflow:hidden;}
.comment-body p{ margin: 5px 0}
.comment-author{border-bottom: 1px solid #ECECEC;height: 36px;padding-bottom: 5px;width: 100%;}
.avatar{float:left;border:1px solid #E3E3E3; padding: 2px; background-color: #fff;}
.comment-info {color: #888;float: left;line-height: 16px;padding-left: 5px;}
.comment-info .fn{font-style:normal; display: block; margin-top: 4px}
.comment-info .comment-meta{color:#999;font-size:10px;}
.fn > a:visited{color:#666666;}
em > a:visited{color:#BBBBBB;}
.fn > a:link{color:#666666;}
em > a:link{color:#BBBBBB;}
</style>



	
	
<div id="comments" style="padding: 0px;">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<p class="text-muted"><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></p>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<span class="text-muted" id="response"><?php _e('添加新评论'); ?></span>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
    			<input type="text" placeholder="称呼" name="author" id="author" class="text form-control" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
    			<input type="email" placeholder="邮箱" name="mail" id="mail" class="text form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p>
    			<input type="url" placeholder="网站" name="url" id="url" class="text form-control" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <textarea rows="5" placeholder="内容" cols="50" name="text" id="textarea" class="textarea form-control" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <button type="submit" class="submit btn btn-default"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e(''); ?></h3>
    <?php endif; ?>
</div>

<script type="text/javascript">
;(function($){
$.fn.placeholder = function(options){
var opts = $.extend({}, $.fn.placeholder.defaults, options);
var isIE = document.all ? true : false;
return this.each(function(){
var _this = this,
placeholderValue =_this.getAttribute("placeholder"); //缓存默认的placeholder值
if(isIE){
_this.setAttribute("value",placeholderValue);
_this.onfocus = function(){
$.trim(_this.value) == placeholderValue ? _this.value = "" : '';
};
_this.onblur = function(){
$.trim(_this.value) == "" ? _this.value = placeholderValue : '';
};
}
});
};
})(jQuery);
</script>

<script type="text/javascript">
$("input").placeholder();
</script>

<!--
	<script type="text/javascript">
        $(document).ready(function(){
            $(".page-navigator").addClass("pagination");
            $(".pagination").removeClass("page-navigator");
            $(".pagination").wrap(document.createElement("div"));
            $(".pagination").parent().addClass("text-center");
            $(".avatar").addClass("img-circle");
            $("ol").css("list-style","none");
            $(".comment-parent").after("<hr>");
        });
    </script>-->