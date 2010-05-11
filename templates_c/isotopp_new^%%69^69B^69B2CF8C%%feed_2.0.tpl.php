<?php /* Smarty version 2.6.26, created on 2010-05-11 14:34:20
         compiled from /www/cvs/serendipity/koehntopp/templates/default/feed_2.0.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/www/cvs/serendipity/koehntopp/templates/default/feed_2.0.tpl', 45, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="utf-8" <?php echo '?>'; ?>


<rss version="2.0" 
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:admin="http://webns.net/mvcb/"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
   xmlns:wfw="http://wellformedweb.org/CommentAPI/"
   xmlns:content="http://purl.org/rss/1.0/modules/content/"
   <?php echo $this->_tpl_vars['namespace_display_dat']; ?>
>
<channel>
    <?php echo $this->_tpl_vars['channel_display_dat']; ?>

    <title><?php echo $this->_tpl_vars['metadata']['title']; ?>
</title>
    <link><?php echo $this->_tpl_vars['metadata']['link']; ?>
</link>
    <description><?php echo $this->_tpl_vars['metadata']['description']; ?>
</description>
    <dc:language><?php echo $this->_tpl_vars['metadata']['language']; ?>
</dc:language>
<?php if ($this->_tpl_vars['metadata']['showMail']): ?>
    <admin:errorReportsTo rdf:resource="mailto:<?php echo $this->_tpl_vars['metadata']['email']; ?>
" />
<?php endif; ?>
    <generator>Serendipity <?php echo $this->_tpl_vars['serendipityVersion']; ?>
 - http://www.s9y.org/</generator>
    <?php echo $this->_tpl_vars['metadata']['additional_fields']['channel']; ?>

    <?php echo $this->_tpl_vars['metadata']['additional_fields']['image']; ?>


<?php $_from = $this->_tpl_vars['entries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
<item>
    <title><?php echo $this->_tpl_vars['entry']['feed_title']; ?>
</title>
    <link><?php echo $this->_tpl_vars['entry']['feed_entryLink']; ?>
<?php if ($this->_tpl_vars['is_comments']): ?>#c<?php echo $this->_tpl_vars['entry']['commentid']; ?>
<?php endif; ?></link>
    <?php $_from = $this->_tpl_vars['entry']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cat']):
?>
        <category><?php echo $this->_tpl_vars['cat']['feed_category_name']; ?>
</category>
    <?php endforeach; endif; unset($_from); ?>

    <comments><?php echo $this->_tpl_vars['entry']['feed_entryLink']; ?>
#comments</comments>
    <wfw:comment><?php echo $this->_tpl_vars['serendipityBaseURL']; ?>
wfwcomment.php?cid=<?php echo $this->_tpl_vars['entry']['feed_id']; ?>
</wfw:comment>

<?php if (! $this->_tpl_vars['is_comments']): ?>
    <slash:comments><?php echo $this->_tpl_vars['entry']['comments']; ?>
</slash:comments>
    <wfw:commentRss><?php echo $this->_tpl_vars['serendipityBaseURL']; ?>
rss.php?version=<?php echo $this->_tpl_vars['metadata']['version']; ?>
&amp;type=comments&amp;cid=<?php echo $this->_tpl_vars['entry']['feed_id']; ?>
</wfw:commentRss>
<?php endif; ?>    

    <author><?php echo $this->_tpl_vars['entry']['feed_email']; ?>
 (<?php echo $this->_tpl_vars['entry']['feed_author']; ?>
)</author>
<?php if (! empty ( $this->_tpl_vars['entry']['body'] )): ?>
    <content:encoded>
    <?php echo smarty_modifier_escape($this->_tpl_vars['entry']['feed_body']); ?>
 <?php echo smarty_modifier_escape($this->_tpl_vars['entry']['feed_ext']); ?>

    </content:encoded>
<?php endif; ?>

    <pubDate><?php echo $this->_tpl_vars['entry']['feed_timestamp_r']; ?>
</pubDate>
    <guid isPermaLink="false"><?php echo $this->_tpl_vars['entry']['feed_guid']; ?>
</guid>
    <?php echo $this->_tpl_vars['entry']['per_entry_display_dat']; ?>

</item>
<?php endforeach; endif; unset($_from); ?>

</channel>
</rss>