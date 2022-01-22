<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
	    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h2 id="response"><?php _e('添加新评论'); ?></h2>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
    			<input type="text" name="author" id="author" class="text" style="filter:alpha(opacity:50); opacity:0.4;" placeholder="<?php _e('昵称(必填)'); ?>" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
    			<input type="email" name="mail" id="mail" class="text" style="filter:alpha(opacity:50); opacity:0.4;" placeholder="<?php _e('邮箱(必填)'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p>
    			<input type="url" name="url" id="url" class="text" style="filter:alpha(opacity:50); opacity:0.4;" placeholder="<?php _e('主页 http(s)://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <textarea rows="8" cols="50" name="text" id="textarea" class="code-pre-debug textarea"  style="filter:alpha(opacity:50); opacity:0.4;" placeholder="<?php _e('什么 Σ(っ °Д °;)っ！大佬发现有bug！'); ?>"  required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <input type="checkbox" name="receiveMail" id="receiveMail" value="yes" checked /> <label for="receiveMail" style="padding-left:8px;">当有人回复时接收邮件提醒<br />
                <button type="submit" class="submit"  style="filter:alpha(opacity:80); opacity:0.8;"><?php _e('发射评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h2><?php _e('评论已关闭'); ?></h2>
    <?php endif; ?>
    <?php if ($comments->have()): ?>
	<h2><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h2>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>


</div>
