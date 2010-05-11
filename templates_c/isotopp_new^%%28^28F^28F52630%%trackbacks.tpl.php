<?php /* Smarty version 2.6.26, created on 2010-05-11 12:36:41
         compiled from file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/trackbacks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/trackbacks.tpl', 4, false),array('modifier', 'xhtml_target', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/trackbacks.tpl', 4, false),array('modifier', 'escape', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/trackbacks.tpl', 5, false),array('modifier', 'default', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/trackbacks.tpl', 8, false),array('modifier', 'formatTime', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/trackbacks.tpl', 9, false),)), $this); ?>
<?php $_from = $this->_tpl_vars['trackbacks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['trackback']):
?>
    <div class="serendipity_comment">
        <div class="serendipity_commentBody">
            <a href="<?php echo smarty_modifier_strip_tags($this->_tpl_vars['trackback']['url']); ?>
" <?php echo serendipity_xhtml_target('blank'); ?>
><?php echo $this->_tpl_vars['trackback']['title']; ?>
</a><br />
            <?php echo smarty_modifier_escape(smarty_modifier_strip_tags($this->_tpl_vars['trackback']['body']), 'all'); ?>

        </div>
        <div class="serendipity_comment_source">
            <b>Weblog:</b> <?php echo smarty_modifier_default(@$this->_tpl_vars['trackback']['author'], @ANONYMOUS); ?>
<br />
            <b><?php echo @TRACKED; ?>
:</b> <?php echo serendipity_smarty_formatTime($this->_tpl_vars['trackback']['timestamp'], '%b %d, %H:%M'); ?>

        <?php if ($this->_tpl_vars['entry']['is_entry_owner']): ?>
            (<a href="<?php echo $this->_tpl_vars['serendipityBaseURL']; ?>
comment.php?serendipity[delete]=<?php echo $this->_tpl_vars['trackback']['id']; ?>
&amp;serendipity[entry]=<?php echo $this->_tpl_vars['trackback']['entry_id']; ?>
&amp;serendipity[type]=trackbacks"><?php echo @DELETE; ?>
</a>)
        <?php endif; ?>
        </div>
    </div>
<?php endforeach; else: ?>
    <div class="serendipity_center"><?php echo @NO_TRACKBACKS; ?>
</div>
<?php endif; unset($_from); ?>