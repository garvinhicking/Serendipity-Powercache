<?php /* Smarty version 2.6.26, created on 2010-05-11 12:45:06
         compiled from file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'safeid', 'file:/www/cvs/serendipity/koehntopp/templates/isotopp_new/sidebar.tpl', 7, false),)), $this); ?>
<?php if ($this->_tpl_vars['is_raw_mode']): ?>
<div id="serendipity<?php echo $this->_tpl_vars['pluginside']; ?>
SideBar">
<?php endif; ?>
<?php $_from = $this->_tpl_vars['plugindata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <div class="serendipitySideBarItem container_<?php echo $this->_tpl_vars['item']['class']; ?>
">
        <h3 class="serendipitySideBarTitle <?php echo $this->_tpl_vars['item']['class']; ?>
"><?php echo $this->_tpl_vars['item']['title']; ?>
</h3>
        <div class="serendipitySideBarContent" id="<?php echo safeid($this->_tpl_vars['item']['id']); ?>
">
            <script type="text/javascript">
                container = new Array();
                container['target'] = '<?php echo $this->_tpl_vars['serendipityHTTPPath']; ?>
powercache/sidebar/<?php echo safeid($this->_tpl_vars['item']['id']); ?>
/<?php echo $this->_tpl_vars['view']; ?>
/p<?php echo $this->_tpl_vars['entry_id']; ?>
.html';
                container['parent'] = '#<?php echo safeid($this->_tpl_vars['item']['id']); ?>
';
                powercache_containers.push(container);
            </script>
        </div>
    </div>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['is_raw_mode']): ?>
</div>
<?php endif; ?>