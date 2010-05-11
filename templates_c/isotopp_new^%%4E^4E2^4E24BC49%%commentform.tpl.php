<?php /* Smarty version 2.6.26, created on 2010-05-11 12:36:41
         compiled from file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/commentform.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'serendipity_hookPlugin', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/commentform.tpl', 30, false),)), $this); ?>
<div class="serendipityCommentForm">
    <a id="serendipity_CommentForm"></a>
    <form id="serendipity_comment" action="<?php echo $this->_tpl_vars['commentform_action']; ?>
#feedback" method="post">
    <div><input type="hidden" name="serendipity[entry_id]" value="<?php echo $this->_tpl_vars['commentform_id']; ?>
" /></div>
    <table border="0" width="100%" cellpadding="3">
        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_commentform_name"><?php echo @NAME; ?>
</label></td>
            <td class="serendipity_commentsValue"><input type="text" id="serendipity_commentform_name" name="serendipity[name]" value="<?php echo $this->_tpl_vars['commentform_name']; ?>
" size="30" /></td>
        </tr>

        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_commentform_email"><?php echo @EMAIL; ?>
</label></td>
            <td class="serendipity_commentsValue"><input type="text" id="serendipity_commentform_email" name="serendipity[email]" value="<?php echo $this->_tpl_vars['commentform_email']; ?>
" /></td>
        </tr>

        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_commentform_url"><?php echo @HOMEPAGE; ?>
</label></td>
            <td class="serendipity_commentsValue"><input type="text" id="serendipity_commentform_url" name="serendipity[url]" value="<?php echo $this->_tpl_vars['commentform_url']; ?>
" /></td>
        </tr>

        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_replyTo"><?php echo @IN_REPLY_TO; ?>
</label></td>
            <td class="serendipity_commentsValue"><?php echo $this->_tpl_vars['commentform_replyTo']; ?>
</td>
        </tr>

        <tr>
            <td class="serendipity_commentsLabel"><label for="serendipity_commentform_comment"><?php echo @COMMENT; ?>
</label></td>
            <td class="serendipity_commentsValue">
                <textarea rows="10" cols="40" id="serendipity_commentform_comment" name="serendipity[comment]"><?php echo $this->_tpl_vars['commentform_data']; ?>
</textarea><br />
                <?php echo serendipity_smarty_hookPlugin(array('hook' => 'frontend_comment','data' => $this->_tpl_vars['commentform_entry']), $this);?>

            </td>
        </tr>

<?php if ($this->_tpl_vars['is_commentform_showToolbar']): ?>
        <tr>
            <td>&#160;</td>
            <td class="serendipity_commentsLabel">
                <input id="checkbox_remember" type="checkbox" name="serendipity[remember]" <?php echo $this->_tpl_vars['commentform_remember']; ?>
 /><label for="checkbox_remember"><?php echo @REMEMBER_INFO; ?>
</label>
    <?php if ($this->_tpl_vars['is_allowSubscriptions']): ?>
                <br />
                <input id="checkbox_subscribe" type="checkbox" name="serendipity[subscribe]" <?php echo $this->_tpl_vars['commentform_subscribe']; ?>
 /><label for="checkbox_subscribe"><?php echo @SUBSCRIBE_TO_THIS_ENTRY; ?>
</label>
    <?php endif; ?>
            </td>
       </tr>
<?php endif; ?>

<?php if ($this->_tpl_vars['is_moderate_comments']): ?>
       <tr>
            <td class="serendipity_commentsValue serendipity_msg_important" colspan="2"><?php echo @COMMENTS_WILL_BE_MODERATED; ?>
</td>
       </tr>
<?php endif; ?>

       <tr>
            <td>&#160;</td>
            <td><input type="submit" name="serendipity[submit]" value="<?php echo @SUBMIT_COMMENT; ?>
" /> <input type="submit" name="serendipity[preview]" value="<?php echo @PREVIEW; ?>
" /></td>
        </tr>
    </table>
    </form>
</div>