{if $id == ''} 
<input id="{{sugarvar key='name'}}" name="{{sugarvar key='name'}}" type="file" title='{{$vardef.help}}' size="{{$displayParams.size|default:30}}" {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{elseif !empty($displayParams.maxlength)}}maxlength="{{$displayParams.maxlength}}"{{else}}maxlength="255"{{/if}} value="{$fields[{{sugarvar key='name' stringFormat=true}}].value}" {{$displayParams.field}}> 
{else} 
{$fields[{{sugarvar key='name' stringFormat=true}}].value} 
{/if} 
