<?php /* Smarty version 2.6.26, created on 2010-05-11 12:36:41
         compiled from file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'makeFilename', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/comments.tpl', 3, false),array('modifier', 'default', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/comments.tpl', 8, false),array('modifier', 'escape', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/comments.tpl', 13, false),array('modifier', 'formatTime', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/comments.tpl', 16, false),array('modifier', 'sprintf', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/comments.tpl', 18, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['comments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
    <a id="c<?php echo $this->_tpl_vars['comment']['id']; ?>
"></a>
    <div class="serendipity_comment serendipity_comment_author_<?php echo serendipity_makeFilename($this->_tpl_vars['comment']['author']); ?>
 <?php if ($this->_tpl_vars['entry']['author'] == $this->_tpl_vars['comment']['author']): ?>serendipity_comment_author_self<?php endif; ?>" style="padding-left: <?php echo $this->_tpl_vars['comment']['depth']*20; ?>
px">
        <div class="serendipity_commentBody"><?php echo $this->_tpl_vars['comment']['body']; ?>
</div>
        <div class="serendipity_comment_source">
            <a href="#c<?php echo $this->_tpl_vars['comment']['id']; ?>
" title="Link to comment #<?php echo $this->_tpl_vars['comment']['trace']; ?>
">#<?php echo $this->_tpl_vars['comment']['trace']; ?>
</a>
            <?php if ($this->_tpl_vars['comment']['email']): ?>
                <a href="mailto:<?php echo $this->_tpl_vars['comment']['email']; ?>
"><?php echo smarty_modifier_default(@$this->_tpl_vars['comment']['author'], @ANONYMOUS); ?>
</a>
            <?php else: ?>
                <?php echo smarty_modifier_default(@$this->_tpl_vars['comment']['author'], @ANONYMOUS); ?>

            <?php endif; ?>
            <?php if ($this->_tpl_vars['comment']['url']): ?>
                (<a href="<?php echo $this->_tpl_vars['comment']['url']; ?>
" title="<?php echo smarty_modifier_escape($this->_tpl_vars['comment']['url']); ?>
">Link</a>)
            <?php endif; ?>
            <?php echo @ON; ?>

            <?php echo serendipity_smarty_formatTime($this->_tpl_vars['comment']['timestamp'], @DATE_FORMAT_SHORT); ?>

            <?php if ($this->_tpl_vars['entry']['is_entry_owner']): ?>
                (<a href="<?php echo $this->_tpl_vars['comment']['link_delete']; ?>
" onclick="return confirm('<?php echo sprintf(@COMMENT_DELETE_CONFIRM, $this->_tpl_vars['comment']['id'], $this->_tpl_vars['comment']['author']); ?>
');">delete</a>)
            <?php endif; ?>
            <?php if ($this->_tpl_vars['entry']['allow_comments']): ?>
                (<a href="#serendipity_CommentForm" onclick="document.getElementById('serendipity_replyTo').value='<?php echo $this->_tpl_vars['comment']['id']; ?>
';">Reply</a>)
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; else: ?>
    <div class="serendipity_center"><?php echo @NO_COMMENTS; ?>
</div>
<?php endif; unset($_from); ?>