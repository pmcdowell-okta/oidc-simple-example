# oidc-simple-example

Since there have been a few changes to the Social Authentication to better support OIDC, 
this might help anyone trying to get social authentication to work in Okta.

This example is as simple as it gets. <br/> <br/>

Create a facebook IDP in Okta <br/>
Create an OIDC Application <br/>
Change the following settings in the page to make it work for your website <br/> <br/>

$oktaOrg = "https://companyx.okta.com"; // Your Okta Org <br/>
$oktaRedirectUrl = "https://c27500c4.ngrok.io"; //Target application after authentcation (your OIDC Application) <br/>
$oktaIdp = "0oa17u5mscaatrlM11d8"; //Your Okta IDP <br/>
$oktaClientId = "vZV6Cp8rn5lxrN9aZ688"; //Your Okta ClientID of the OIDC Application <br/>
$state = "TexasOfCourse"; <br/>
$nonce = "TexasOfCourse"; <br/>

<br/>

This Link will show you what the flow looks like:<br/>
https://companyx.okta.com/oauth2/v1/authorize?nonce=TexasOfCourse&idp=0oa17u5mscaatrlM11d8&client_id=vZV6Cp8rn5lxrN9aZ688&state=TexasOfCourse&scope=openid%20email%20profile&response_type=id_token&redirect_uri=https://c27500c4.ngrok.io

