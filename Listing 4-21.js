var loginData = [{
        user_name: 'user',
        password: 'password'
},'javascriptTest'];
data = YAHOO.lang.JSON.stringify(loginData);
YAHOO.util.Connect.asyncRequest('POST', 'v2/rest.php' , {success:success}, 'method=login&input_type=json&response_type=json&rest_data='+data);

function success(o)
{
    var data = YAHOO.lang.JSON.parse(o.responseText);
    var session = data['id'];
    alert(session);
}
