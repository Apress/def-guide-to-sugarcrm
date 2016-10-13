{if !empty({{sugarvar key='value' string=true}})} 
{assign var="phone_value" value={{sugarvar key='value' string=true}} } 
{sugar_phone value=$phone_value } 
{/if} 
{{if !empty($displayParams.enableConnectors)}} 
{{sugarvar_connector view='DetailView'}}  
{{/if}} 
