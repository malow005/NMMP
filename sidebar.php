<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	
	
	
	
					<div id="side">
						<div class="panel panel-default">
						    <div class="panel-heading" style="padding: 0px;background: url() no-repeat left top; background-size:100%;;">
						    	<br />
								<img class="img img-circle img-responsive img-thumbnail center-block" width="125px" src="<?php $this->options->logoUrl(); ?>"/>
								<br />
								<p class="text-center text-muted"><?php $this->options->description() ?></p>
								<br />
							</div>
						</div>
						
						
						<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
						<div class="panel panel-default">
						    <div class="panel-heading">
						        <span class="glyphicon glyphicon-fire"> 最新文章</span>
						    </div>
						    <ul class="list-group">
							    <?php $this->widget('Widget_Contents_Post_Recent')
							    ->parse('<a class="list-group-item" href="{permalink}">{title}</a>'); ?>
							</ul>
						</div>
						<?php endif; ?>
						
						
						<?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
						<div class="panel panel-default">
						    <div class="panel-heading">
						        <span class="glyphicon glyphicon-fire"> 最近回复</span>
						    </div>
							<div class="list-group">
							        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
							        <?php while($comments->next()): ?>
										  <a href="<?php $comments->permalink(); ?>" class="list-group-item">
										    <h6 class="list-group-item-heading"><?php $comments->author(false); ?></h6>
										    <p class="list-group-item-text"><?php $comments->excerpt(35, '...'); ?></p>
										  </a>
						    		<?php endwhile; ?>
							</div>
						</div>
						<?php endif; ?>

	

					
					
						<?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
						<div class="panel panel-default">
							<div class="panel-heading">
						    	<span class="glyphicon glyphicon-fire"> 文章归档</span>
							</div>
						    <ul class="list-group">

							            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
							            ->parse('<a class="list-group-item" href="{permalink}">{date}</a>'); ?>
							</ul>
						</div>
						<?php endif; ?>
				
							    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
						<div class="panel panel-default">
						    <div class="panel-heading">
						        <span class="glyphicon glyphicon-fire"> 其他功能</span>
						    </div>
						    <ul class="list-group">
							            <?php if($this->user->hasLogin()): ?>
										<a class="list-group-item" href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a>
							            <a class="list-group-item" href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
							            <?php else: ?>
							            <a class="list-group-item" href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
							            <?php endif; ?>
							            <a class="list-group-item" href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a>
							            <a class="list-group-item" href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a>
							</ul>
						</div>
							    <?php endif; ?>
	
	
	
					</div>
	
	
	
	
	



