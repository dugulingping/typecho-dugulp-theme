<?php
/**
 * 这是一...哦不两款极简的单栏Typecho主题。<br />由veryse主题改写
 * @package dugulp-rand-black-and-white Theme 
 * @author 独孤伶俜
 * @version 1.5
 * @link https://blog.icyuya.net/
 *
 */

	//关闭错误提示
	error_reporting(E_ALL^E_NOTICE^E_WARNING);

	//正模板
	if (!defined('__TYPECHO_ROOT_DIR__')) exit;
		$this->need('header.php');
?>
	<main class="content" role="main">
	<?php while($this->next()): ?>
		<article class="preview">
			<header>
				<h1 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
				<div class="post-meta"><time datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time> on <?php $this->category(','); ?></div>
			</header>
			<section class="post-excerpt">
				<p><?php $this->excerpt(130, '...'); ?></p>
				<p class="readmore"><a href="<?php $this->permalink() ?>">Read more <i class="fa fa-chevron-circle-right" style="padding-left: 5px;"></i></a></p>
			</section>
		</article>
	<?php endwhile; ?>
		<nav class="pagination" role="pagination">
			<?php $this->pageLink('<xt class="newer-posts"><i class="fa fa-chevron-circle-left"></i> Newer</xt>'); ?>
			<span class="page-number">Page <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> of <?php echo   ceil($this->getTotal() / $this->parameter->pageSize); ?></span>
			<?php $this->pageLink('<xt class="older-posts">Older <i class="fa fa-chevron-circle-right"></i></xt>','next'); ?>
		</nav>
	</main>

<?php $this->need('footer.php'); ?>