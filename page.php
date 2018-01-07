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
								  	<?php $this->content(); ?>
								  </div>
								  <div class="panel-footer">
								  	<?php $this->need('comments.php'); ?>
								  </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 visible-lg visible-md">
<?php $this->need('sidebar.php'); ?>
				</div>
	
<?php $this->need('footer.php'); ?>










