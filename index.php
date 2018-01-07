<?php
/**
 * 这是用bootstrap做的一款很简洁的主题
 * 
 * @package NMMP
 * @author NMMP
 * @version 1.0
 * @link http://typecho.online
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

				<div class="col-lg-8 col-md-8" style="padding: 0px;">
					<div id="main1">
						<div class="">
							<div class="list-group">
								<?php while($this->next()): ?>
									<a href="<?php $this->permalink() ?>" class="list-group-item">
						    			<h4 class="list-group-item-heading text-center"><?php $this->title() ?></h4>
										<p href="#" class="text-muted text-center muted" style="font-size: 12px;">
											<?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
											<?php $this->commentsNum('', '<span class="glyphicon glyphicon-comment"></span>1', '<span class="glyphicon glyphicon-comment"></span> %d'); ?>
										</p>
						                <p class="" style="font-size: 14px;color: #666666;">
											<?php $this->excerpt(200, '...'); ?>
										</p>
										</a>
										<br />
									<br />
								<?php endwhile; ?>
							    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 visible-lg visible-md">
<?php $this->need('sidebar.php'); ?>
				</div>
	
<?php $this->need('footer.php'); ?>
