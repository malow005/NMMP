﻿<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


					<br />
					<div id="foot" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-default">
						    <div class="panel-footer text-center">
						        	&copy;<?php echo date('Y'); ?> <a class="muted" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.<?php _e('由 <a class="muted" href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>. Theme By <a class="muted" href="http://typecho.online">NMMP</a> 
						    </div>
						</div>
					</div>



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
    </script>



     
    

<?php $this->footer(); ?>

</body>
</html>
