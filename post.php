<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>



				<div class="col-lg-8 col-md-8" style="padding: 0px;">
					<div id="main1">
						<div class="col-lg-12">
							<div class="list-group">
								<div class="panel panel-default">
								  <div class="panel-heading">
								  	<a href="<?php $this->permalink() ?>"></a>
								    <h2 class="panel-title text-center"><?php $this->title() ?></h2>
								  </div>
								  <div class="panel-body" style="font-size: 14px;">
								  	<p style="font-size: 12px;" class="text-center muted">
           							时间：<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time> |
            						<?php _e('分类: '); ?><?php $this->category(','); ?>
								  	</p>
								  	<?php $this->content(); ?>
								  	<br />
								  	<p itemprop="keywords" class="tags"><?php _e(''); ?><?php $this->tags(' ', true, ''); ?></p>
								  </div>
								  <div class="panel-footer">
								  	<?php $this->need('comments.php'); ?>
								  	<br />
								    <ul class="pager">
								        <li class="previous"><?php $this->thePrev('%s',''); ?></li>
								        <li class="next"><?php $this->theNext('%s',''); ?></li>
								    </ul>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4  col-md-4 visible-lg visible-md">
<?php $this->need('sidebar.php'); ?>
				</div>
	
<?php $this->need('footer.php'); ?>




            




