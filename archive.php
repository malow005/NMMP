<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


				<div class="col-lg-8 col-md-8" style="padding: 0px;">
					<div id="main1">
						<div class="col-lg-12">
							<div class="list-group">
								<div class="well well-sm"><?php $this->archiveTitle(array(
						            'category'  =>  _t('分类 %s 下的文章'),
						            'search'    =>  _t('包含关键字 %s 的文章'),
						            'tag'       =>  _t('标签 %s 下的文章'),
						            'author'    =>  _t('%s 发布的文章')
						        ), '', ''); ?></div>
						        <?php if ($this->have()): ?>
						    	<?php while($this->next()): ?>
						    			<a href="<?php $this->permalink() ?>" class="list-group-item">
						    			<h4 class="list-group-item-heading text-center"><?php $this->title() ?></h4>
											<div href="#" class="text-muted text-center">
											<?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
											<?php $this->commentsNum('', '<span class="glyphicon glyphicon-comment"></span>1', '<span class="glyphicon glyphicon-comment"></span> %d'); ?>
										</div>
						                <p class="" style="font-size: 14px;">
											<?php $this->excerpt(200, '...'); ?>
										</p>
										</a>
										<br />
						    	<?php endwhile; ?>
						        <?php else: ?>
						                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
						        <?php endif; ?>
						
						        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4  col-md-4 visible-lg visible-md">
<?php $this->need('sidebar.php'); ?>
				</div>
	
<?php $this->need('footer.php'); ?>
	
		







        

