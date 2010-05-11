<?php /* Smarty version 2.6.26, created on 2010-05-11 12:12:40
         compiled from /www/cvs/serendipity/koehntopp/templates/default/preview_iframe.tpl */ ?>
<?php if ($this->_tpl_vars['is_xhtml']): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
           "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php else: ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
           "http://www.w3.org/TR/html4/loose.dtd">
<?php endif; ?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['lang']; ?>
" lang="<?php echo $this->_tpl_vars['lang']; ?>
">
    <head>
        <title><?php echo @SERENDIPITY_ADMIN_SUITE; ?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['head_charset']; ?>
" />
        <meta name="Powered-By" content="Serendipity v.<?php echo $this->_tpl_vars['head_version']; ?>
" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['head_link_stylesheet']; ?>
" />
        <script type="text/javascript">
           window.onload = function() {
             parent.document.getElementById('serendipity_iframe').style.height = document.getElementById('mainpane').offsetHeight
                                                                               + parseInt(document.getElementById('mainpane').style.marginTop)
                                                                               + parseInt(document.getElementById('mainpane').style.marginBottom)
                                                                               + 'px';
             parent.document.getElementById('serendipity_iframe').scrolling    = 'no';
             parent.document.getElementById('serendipity_iframe').style.border = 0;
           }
        </script>
    </head>

    <body style="padding: 0px; margin: 0px;">
        <div id="mainpane" style="padding: 0px; margin: 5px auto 5px auto; width: 98%;">
            <div id="content" style="padding: 5px; margin: 0px;">
            <?php echo $this->_tpl_vars['preview']; ?>

            </div>
        </div>
    </body>
</html>