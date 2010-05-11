<?php /* Smarty version 2.6.26, created on 2010-05-11 12:03:56
         compiled from file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/entries.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'serendipity_hookPlugin', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/entries.tpl', 2, false),array('function', 'serendipity_printTrackbacks', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/entries.tpl', 115, false),array('function', 'serendipity_printComments', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/entries.tpl', 132, false),array('modifier', 'formatTime', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/entries.tpl', 9, false),array('modifier', 'makeFilename', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/entries.tpl', 15, false),array('modifier', 'escape', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/entries.tpl', 20, false),array('modifier', 'emptyPrefix', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/entries.tpl', 20, false),array('modifier', 'sprintf', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/entries.tpl', 35, false),)), $this); ?>
<!-- ENTRIES START -->
    <?php echo serendipity_smarty_hookPlugin(array('hook' => 'entries_header','addData' => ($this->_tpl_vars['entry_id'])), $this);?>


    <?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dategroup']):
?>
    <div class="serendipity_Entry_Date">
        <?php if ($this->_tpl_vars['dategroup']['is_sticky']): ?>
        <h3 class="serendipity_date"><?php echo @STICKY_POSTINGS; ?>
</h3>
        <?php else: ?>
        <h3 class="serendipity_date"><?php echo serendipity_smarty_formatTime($this->_tpl_vars['dategroup']['date'], 'DATE_FORMAT_ENTRY'); ?>
</h3>
        <?php endif; ?>

        <?php $_from = $this->_tpl_vars['dategroup']['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
        <h4 class="serendipity_title"><a href="<?php echo $this->_tpl_vars['entry']['link']; ?>
"><?php echo $this->_tpl_vars['entry']['title']; ?>
</a></h4>

        <div class="serendipity_entry serendipity_entry_author_<?php echo serendipity_makeFilename($this->_tpl_vars['entry']['author']); ?>
 <?php if ($this->_tpl_vars['entry']['is_entry_owner']): ?>serendipity_entry_author_self<?php endif; ?>">
            <?php if ($this->_tpl_vars['entry']['categories']): ?>
            <span class="serendipity_entryIcon">
            <?php $_from = $this->_tpl_vars['entry']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
                <?php if ($this->_tpl_vars['category']['category_icon']): ?>
                    <a href="<?php echo $this->_tpl_vars['category']['category_link']; ?>
"><img class="serendipity_entryIcon" title="<?php echo smarty_modifier_escape($this->_tpl_vars['category']['category_name']); ?>
<?php echo serendipity_emptyPrefix($this->_tpl_vars['category']['category_description']); ?>
" alt="<?php echo smarty_modifier_escape($this->_tpl_vars['category']['category_name']); ?>
" src="<?php echo $this->_tpl_vars['category']['category_icon']; ?>
" /></a>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            </span>
            <?php endif; ?>

            <div class="serendipity_entry_body">
                <?php echo $this->_tpl_vars['entry']['body']; ?>

            </div>

            <?php if ($this->_tpl_vars['entry']['is_extended']): ?>
            <div class="serendipity_entry_extended"><a id="extended"></a><?php echo $this->_tpl_vars['entry']['extended']; ?>
</div>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['entry']['has_extended'] && ! $this->_tpl_vars['is_single_entry'] && ! $this->_tpl_vars['entry']['is_extended']): ?>
            <br /><a href="<?php echo $this->_tpl_vars['entry']['link']; ?>
#extended"><?php echo sprintf(@VIEW_EXTENDED_ENTRY, $this->_tpl_vars['entry']['title']); ?>
</a><br /><br />
            <?php endif; ?>

            <div class='serendipity_entryFooter'>
                <?php echo @POSTED_BY; ?>
 <a href="<?php echo $this->_tpl_vars['entry']['link_author']; ?>
"><?php echo $this->_tpl_vars['entry']['author']; ?>
</a>
                <?php if ($this->_tpl_vars['entry']['categories']): ?>
                   <?php echo @IN; ?>
 <?php $_from = $this->_tpl_vars['entry']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['categories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['category']):
        $this->_foreach['categories']['iteration']++;
?><a href="<?php echo $this->_tpl_vars['category']['category_link']; ?>
"><?php echo smarty_modifier_escape($this->_tpl_vars['category']['category_name']); ?>
</a><?php if (! ($this->_foreach['categories']['iteration'] == $this->_foreach['categories']['total'])): ?>, <?php endif; ?><?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['dategroup']['is_sticky']): ?>
                    <?php echo @ON; ?>

                <?php else: ?>
                    <?php echo @AT; ?>

                <?php endif; ?> <a href="<?php echo $this->_tpl_vars['entry']['link']; ?>
"><?php if ($this->_tpl_vars['dategroup']['is_sticky']): ?><?php echo serendipity_smarty_formatTime($this->_tpl_vars['entry']['timestamp'], 'DATE_FORMAT_ENTRY'); ?>
 <?php endif; ?><?php echo serendipity_smarty_formatTime($this->_tpl_vars['entry']['timestamp'], '%H:%M'); ?>
</a>

                <?php if ($this->_tpl_vars['entry']['has_comments']): ?>
                    <?php if ($this->_tpl_vars['use_popups']): ?>
                        | <a href="<?php echo $this->_tpl_vars['entry']['link_popup_comments']; ?>
" onclick="window.open(this.href, 'comments', 'width=480,height=480,scrollbars=yes'); return false;"><?php echo $this->_tpl_vars['entry']['label_comments']; ?>
 (<?php echo $this->_tpl_vars['entry']['comments']; ?>
)</a>
                    <?php else: ?>
                        | <a href="<?php echo $this->_tpl_vars['entry']['link']; ?>
#comments"><?php echo $this->_tpl_vars['entry']['label_comments']; ?>
 (<?php echo $this->_tpl_vars['entry']['comments']; ?>
)</a>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['entry']['has_trackbacks']): ?>
                    <?php if ($this->_tpl_vars['use_popups']): ?>
                        | <a href="<?php echo $this->_tpl_vars['entry']['link_popup_trackbacks']; ?>
" onclick="window.open(this.href, 'comments', 'width=480,height=480,scrollbars=yes'); return false;"><?php echo $this->_tpl_vars['entry']['label_trackbacks']; ?>
 (<?php echo $this->_tpl_vars['entry']['trackbacks']; ?>
)</a>
                    <?php else: ?>
                        | <a href="<?php echo $this->_tpl_vars['entry']['link']; ?>
#trackbacks"><?php echo $this->_tpl_vars['entry']['label_trackbacks']; ?>
 (<?php echo $this->_tpl_vars['entry']['trackbacks']; ?>
)</a>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['entry']['is_entry_owner'] && ! $this->_tpl_vars['is_preview']): ?>
                        | <a href="<?php echo $this->_tpl_vars['entry']['link_edit']; ?>
"><?php echo @EDIT_ENTRY; ?>
</a>
                <?php endif; ?>

                <?php echo $this->_tpl_vars['entry']['add_footer']; ?>

            </div>
        </div>
        <!--
        <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                 xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/"
                 xmlns:dc="http://purl.org/dc/elements/1.1/">
        <rdf:Description
                 rdf:about="<?php echo $this->_tpl_vars['entry']['link_rdf']; ?>
"
                 trackback:ping="<?php echo $this->_tpl_vars['entry']['link_trackback']; ?>
"
                 dc:title="<?php echo $this->_tpl_vars['entry']['title']; ?>
"
                 dc:identifier="<?php echo $this->_tpl_vars['entry']['rdf_ident']; ?>
" />
        </rdf:RDF>
        -->
        <?php echo $this->_tpl_vars['entry']['plugin_display_dat']; ?>


        <?php if ($this->_tpl_vars['is_single_entry'] && ! $this->_tpl_vars['use_popups'] && ! $this->_tpl_vars['is_preview']): ?>
            <?php if (@DATA_UNSUBSCRIBED): ?>
                <br /><div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@DATA_UNSUBSCRIBED, @UNSUBSCRIBE_OK); ?>
</div><br />
            <?php endif; ?>

            <?php if (@DATA_TRACKBACK_DELETED): ?>
                <br /><div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@DATA_TRACKBACK_DELETED, @TRACKBACK_DELETED); ?>
</div><br />
            <?php endif; ?>

            <?php if (@DATA_TRACKBACK_APPROVED): ?>
                <br /><div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@DATA_TRACKBACK_APPROVED, @TRACKBACK_APPROVED); ?>
</div><br />
            <?php endif; ?>

            <?php if (@DATA_COMMENT_DELETED): ?>
                <br /><div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@DATA_COMMENT_DELETED, @COMMENT_DELETED); ?>
</div><br />
            <?php endif; ?>

            <?php if (@DATA_COMMENT_APPROVED): ?>
                <br /><div class="serendipity_center serendipity_msg_notice"><?php echo sprintf(@DATA_COMMENT_APPROVED, @COMMENT_APPROVED); ?>
</div><br />
            <?php endif; ?>

            <div class="serendipity_comments">
                <br />
                <a id="trackbacks"></a>
                <div class="serendipity_commentsTitle"><?php echo @TRACKBACKS; ?>
</div>
                    <div class="serendipity_center">
                        <a rel="nofollow" style="font-weight: normal" href="<?php echo $this->_tpl_vars['entry']['link_trackback']; ?>
" onclick="alert('<?php echo smarty_modifier_escape(@TRACKBACK_SPECIFIC_ON_CLICK, 'htmlall'); ?>
'); return false;" title="<?php echo smarty_modifier_escape(@TRACKBACK_SPECIFIC_ON_CLICK); ?>
"><?php echo @TRACKBACK_SPECIFIC; ?>
</a>
                    </div>
                    <br />
                        <?php echo serendipity_smarty_printTrackbacks(array('entry' => $this->_tpl_vars['entry']['id']), $this);?>

            </div>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['is_single_entry'] && ! $this->_tpl_vars['is_preview']): ?>
            <div class="serendipity_comments">
                <br />
                <a id="comments"></a>
                <div class="serendipity_commentsTitle"><?php echo @COMMENTS; ?>
</div>
                <div class="serendipity_center"><?php echo @DISPLAY_COMMENTS_AS; ?>

                <?php if ($this->_tpl_vars['entry']['viewmode'] == @VIEWMODE_LINEAR): ?>
                    (<?php echo @COMMENTS_VIEWMODE_LINEAR; ?>
 | <a href="<?php echo $this->_tpl_vars['entry']['link_viewmode_threaded']; ?>
#comments"><?php echo @COMMENTS_VIEWMODE_THREADED; ?>
</a>)
                <?php else: ?>
                    (<a href="<?php echo $this->_tpl_vars['entry']['link_viewmode_linear']; ?>
#comments"><?php echo @COMMENTS_VIEWMODE_LINEAR; ?>
</a> | <?php echo @COMMENTS_VIEWMODE_THREADED; ?>
)
                <?php endif; ?>
                </div>
                <br />
                    <?php echo serendipity_smarty_printComments(array('entry' => $this->_tpl_vars['entry']['id'],'mode' => $this->_tpl_vars['entry']['viewmode']), $this);?>


                <?php if ($this->_tpl_vars['entry']['is_entry_owner']): ?>
                    <?php if ($this->_tpl_vars['entry']['allow_comments']): ?>
                    <div class="serendipity_center">(<a href="<?php echo $this->_tpl_vars['entry']['link_deny_comments']; ?>
"><?php echo @COMMENTS_DISABLE; ?>
</a>)</div>
                    <?php else: ?>
                    <div class="serendipity_center">(<a href="<?php echo $this->_tpl_vars['entry']['link_allow_comments']; ?>
"><?php echo @COMMENTS_ENABLE; ?>
</a>)</div>
                    <?php endif; ?>
                <?php endif; ?>
                <a id="feedback"></a>

                <?php $_from = $this->_tpl_vars['comments_messagestack']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
                <div class="serendipity_center serendipity_msg_important"><?php echo $this->_tpl_vars['message']; ?>
</div>
                <?php endforeach; endif; unset($_from); ?>

                <?php if ($this->_tpl_vars['is_comment_added']): ?>

                <br />
                <div class="serendipity_center serendipity_msg_notice"><?php echo @COMMENT_ADDED; ?>
</div>

                <?php elseif ($this->_tpl_vars['is_comment_moderate']): ?>

                <br />
                <div class="serendipity_center serendipity_msg_notice"><?php echo @COMMENT_ADDED; ?>
<br /><?php echo @THIS_COMMENT_NEEDS_REVIEW; ?>
</div>

                <?php elseif (! $this->_tpl_vars['entry']['allow_comments']): ?>

                <br />
                <div class="serendipity_center serendipity_msg_important"><?php echo @COMMENTS_CLOSED; ?>
</div>

                <?php else: ?>

                <br />
                <div class="serendipity_commentsTitle"><?php echo @ADD_COMMENT; ?>
</div>
                <?php echo $this->_tpl_vars['COMMENTFORM']; ?>


                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php echo $this->_tpl_vars['entry']['backend_preview']; ?>

        <?php endforeach; endif; unset($_from); ?>
    </div>
    <?php endforeach; else: ?>
    <?php if (! $this->_tpl_vars['plugin_clean_page']): ?>
        <?php echo @NO_ENTRIES_TO_PRINT; ?>

    <?php endif; ?>
    <?php endif; unset($_from); ?>

    <div class='serendipity_entryFooter' style="text-align: center">
    <?php if ($this->_tpl_vars['footer_prev_page']): ?>
        <a href="<?php echo $this->_tpl_vars['footer_prev_page']; ?>
">&laquo; <?php echo @PREVIOUS_PAGE; ?>
</a>&#160;&#160;
    <?php endif; ?>

    <?php if ($this->_tpl_vars['footer_info']): ?>
        (<?php echo $this->_tpl_vars['footer_info']; ?>
)
    <?php endif; ?>

    <?php if ($this->_tpl_vars['footer_next_page']): ?>
        <a href="<?php echo $this->_tpl_vars['footer_next_page']; ?>
">&raquo; <?php echo @NEXT_PAGE; ?>
</a>
    <?php endif; ?>

    <?php echo serendipity_smarty_hookPlugin(array('hook' => 'entries_footer'), $this);?>

    </div>
<!-- ENTRIES END -->