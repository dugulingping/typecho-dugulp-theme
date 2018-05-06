<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p>
    			<input type="text" name="author" id="author" class="text" style="filter:alpha(opacity:50); opacity:0.5;border-color:#95a5a6" placeholder="<?php _e('Name'); ?>" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
    			<input type="email" name="mail" id="mail" class="text" style="filter:alpha(opacity:50); opacity:0.5;border-color:#95a5a6" placeholder="<?php _e('Email'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p>
    			<input type="url" name="url" id="url" class="text" style="filter:alpha(opacity:50); opacity:0.5;border-color:#95a5a6" placeholder="<?php _e('网站 http(s)://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea"  style="filter:alpha(opacity:50); opacity:0.5;border-color:#95a5a6" placeholder="<?php _e('内容'); ?>"  required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <input type="checkbox" name="receiveMail" id="receiveMail" value="yes" checked /> <label for="receiveMail" style="padding-left:8px;">当有人回复时接收邮件提醒<br />
                <button type="submit" class="submit"  style="filter:alpha(opacity:80); opacity:0.8;border-color:#95a5a6"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
