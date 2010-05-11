{if $is_raw_mode}
<div id="serendipity{$pluginside}SideBar">
{/if}
{foreach from=$plugindata item=item}
    <div class="serendipitySideBarItem container_{$item.class}">
        <h3 class="serendipitySideBarTitle {$item.class}">{$item.title}</h3>
        <div class="serendipitySideBarContent" id="{$item.id|@safeid}">
            <script type="text/javascript">
                container = new Array();
                container['target'] = '{$serendipityHTTPPath}powercache/sidebar/{$item.id|@safeid}/{$view}/p{$entry_id}.html';
                container['parent'] = '#{$item.id|@safeid}';
                powercache_containers.push(container);
            </script>
        </div>
    </div>
{/foreach}
{if $is_raw_mode}
</div>
{/if}
