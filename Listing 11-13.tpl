{$MODULE_TITLE} 
{foreach from=$invoice key=key item=item name=rows} 
{if $smarty.foreach.rows.first} 
<table class="other view"> 
<tr> 
    <th>{$APP.LBL_INVOICE_DATE}</th> 
    <th>{$APP.LBL_INVOICE_AMOUNT}</th> 
    <th>{$APP.LBL_INVOICE_DUE}</th> 
</tr> 
{/if} 
<tr> 
    <td>{$item.date}</td> 
    <td>{$item.amount}</td> 
    <td>{$item.due}</td> 
</tr> 
{if $smarty.foreach.rows.last} 
</table> 
{/if} 
{foreachelse} 
{$APP.LBL_NO_RECORDS_FOUND} 
{/foreach} 
