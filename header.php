<?php if(!defined( '__TYPECHO_ROOT_DIR__'))exit;?>
<?php $themes_style = rand(0,1);?>
<!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset=UTF-8>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title><?php $this->archiveTitle(array(
				'category'  =>  _t('分类 %s 下的文章'),
				'search'    =>  _t('包含关键字 %s 的文章'),
				'tag'       =>  _t('标签 %s 下的文章'),
				'author'    =>  _t('%s 发布的文章')
			), '', ' - '); ?>
	<?php $this->options->title(); ?><?php if($this->is('index')): ?><?php endif; ?></title>
		<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&atom='); ?>
		
		<!-- RSS autodiscovery -->
		<link rel="shortcut icon" href="<?php $this->options->ico(); ?>">
		<link rel="stylesheet" href="https://cdn.bootcss.com/normalize/8.0.1/normalize.min.css">
		<!-- Stylesheets -->
		<link  rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.0.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $this->options->cdn_link.'/public.min.css';?>">
		<link rel='stylesheet' href="<?php echo $this->options->cdn_link.'/font.min'.'-'.$themes_style.'.css';?>"/>
		<link rel="stylesheet" href="<?php echo $this->options->cdn_link.'/prism.css'; ?>">
		<!-- Stylesheet for theme color -->
	</head>
<body class="home-template">
    <header id="site-head">
        <a id="blog-logo" href="<?php $this->options->siteUrl(); ?>">
            <div class="bloglogo" style="background: url(<?php echo $this->options->cdn_link.'/logo'.'-'.$themes_style.'.jpg'; ?>);background-repeat:no-repeat;"></div>
		</a>
    </header>
	<nav class="menu" role="nav">
		<ul>
			<li class="nav nav-current"><a href="<?php $this->options->siteUrl(); ?>">home</a></li>
			<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
			<?php while($pages->next()): ?><li>|</li>
			<li class="nav nav-current"><a <?php if($this->is('page', $pages->slug)): ?><?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li><?php endwhile; ?>	  
		</ul>
	</nav>
