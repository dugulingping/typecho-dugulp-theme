<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
   <main class="content" role="main">
    
<article class="post">

    <header>
        <!--<div class="post-meta tags">
          
        <?php _e('tags in：'); ?>
        
        <?php $this->tags('  ', true, '暂无标签'); ?>        
          
        </div>-->
        <h1 class="post-title"><?php $this->title() ?></h1>
		<div class="post-meta"><time datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time> on <?php $this->category(','); ?></div>

    </header>

    <section class="post-content">

        <?php $this->content(); ?>

    </section>
	<section class="hitokoto">
        <p id="hitokoto"><a href="#" id="hitokoto_text">获取中...</a></p>
	</section>

	<footer class="post-footer">
		<span class="post-near">
			上一篇: <?php $this->thePrev('%s','没有了'); ?><br />
			下一篇: <?php $this->theNext('%s','没有了'); ?>
		</span>
	</footer>
    <!--评论-->
    <?php $this->need('comments.php'); ?>
    <br>
</article>

    </main>
<?php $this->need('footer.php'); ?>