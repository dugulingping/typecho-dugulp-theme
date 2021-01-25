<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
	<footer class="site-footer">
		<div class="inner">
			<section class="footer-social">
				<a href="<?php $this->options->wlink(); ?>" target="_blank" title="Weibo"><i class="fa fa-2x fa-fw fa-weibo"></i> <span class="hidden">Weibo</span></a>&nbsp;
				<a href="<?php $this->options->glink(); ?>" target="_blank" title="GitHub"><i class="fa fa-2x fa-fw fa-github"></i> <span class="hidden">GitHub</span></a>&nbsp;
				<a href="/feed/" target="_blank" title="RSS"><i class="fa fa-2x fa-fw fa-rss"></i> <span class="hidden">RSS</span></a>
			</section>
			<section class="copyright">
				自豪的采用<a rel="license" href="http://typecho.org/">Typecho</a>|theme by <a rel="license" href="http://blog.icyuyan.net">独孤伶俜</a>
				<br /><br />
				本站原创作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY-NC-SA 4.0</a>进行许可
				<br />
				<a rel="icp" href="https://beian.miit.gov.cn"><?php echo $this->options->icp_link; ?></a>
			</section>
		</div>
	</footer>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/highlight.js/9.13.1/highlight.min.js"></script>
	<?php if ($this->options->Instantclick == 'able'): ?>
	<script src="https://cdn.bootcss.com/instantclick/3.0.1/instantclick.min.js" data-no-instant></script>
	<script data-no-instant>InstantClick.init();</script><?php endif; ?>
	<script src="<?php echo $this->options->cdn_link.'/prism.js';?>"></script>
	<script src="<?php echo $this->options->cdn_link.'/public.min.js';?>"></script>
	
	<script src="https://v1.hitokoto.cn/?encode=js&select=%23hitokoto" defer></script>
	<?php $this->footer(); ?>
	<!--返回顶部-->
	<div id="return-top" class="back-top">
		<a data-scroll href="#site-head"> <i class="fa fa-lg fa-chevron-circle-up fa-4x" id="img"></i></a>
	</div>
</body>
</html>
<?php if ($this->options->Compress == 'able'): ?>
<?php $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); ?>
<?php endif; ?>