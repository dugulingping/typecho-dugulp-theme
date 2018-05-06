<?php 
/**
 * archives
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<?php $this->need('header.php'); ?>

    <main class="content" role="main">
    
<article class="post">
    <!--归档-->
    <div id="mainbox2">   
            <div class="post"  id="post-<?php $this->cid(); ?>">   
            <h1><span class="post-title"><a href="<?php $this->permalink() ?>" title=""><?php  $this->title() ?></a></span></h1>   
            <div class="clear"></div>   
            <div class="entry">   
<?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
    $year=0; $mon=0; $i=0; $j=0;
    $output = '<div class="post-content cf">';
    while($archives->next()):
        $year_tmp = date('Y',$archives->created);
        $mon_tmp = date('m',$archives->created);
        $y=$year; $m=$mon;
        if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
        if ($year != $year_tmp && $year > 0) $output .= '</ul>';
        if ($year != $year_tmp) {
            $year = $year_tmp;
            $output .= '<h3>'. $year .' 年</h3><ul>'; 
        }
        if ($mon != $mon_tmp) {
            $mon = $mon_tmp;
            $output .= '<li><span>'. $year .' 年'. $mon .' 月</span><ul>';
        }
        $output .= '<li>'.date('d日: ',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a> ('. $archives->commentsNum.')</li>';
    endwhile;
    $output .= '</ul></li></ul></div>';
    echo $output;?>
              <div class="clear"></div>   
            </div>   
        </div>   
    </div>
</article>

    </main>

<?php $this->need('footer.php'); ?>
