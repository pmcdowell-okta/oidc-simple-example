<?php
$oktaOrg = "https://companyx.okta.com";
$oktaRedirectUrl = "https://c27500c4.ngrok.io";
$oktaIdp = "0oa17u5mscaatrlM11d8";
$oktaClientId = "vZV6Cp8rn5lxrN9aZ688";
$state = "TexasOfCourse";
$nonce = "TexasOfCourse";

$urlString = "https://companyx.okta.com/oauth2/v1/authorize?nonce=" . $nonce . "&idp=" . $oktaIdp . "&client_id=" . $oktaClientId . "&state=" . $state . "&scope=openid%20email%20profile&response_type=id_token&redirect_uri=" . $oktaRedirectUrl;
?>

<!DOCTYPE html>
<html>
    <style>
        body{  
            padding-top: 95px;    
            padding-right: 95px;    
            background-image: url("http://oktaproxy.com/img/Okta_Home_Hero_test5-sm.png");
        }
    </style>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="text-align: center;color: white;font-size: larger">OIDC Social Authentication Example</div><br/>
        <div style="background:white;padding: 5px;">
            <br/>
            <span><?php echo $urlString; ?></span><br/>
            <a href="<?php echo $urlString; ?>">Click here go login with Facebook</a>
            <br/>
        </div>
    </body>
    <!-- Result will look like this:
    https://c27500c4.ngrok.io/#id_token=eyJhbGciOiJSUzI1NiIsImtpZCI6IkZqRjVhWUtIVHI5YTEwNm1FekduMlkwZ241bTBtVGVpdkxTVklXLXk0NUkifQ.eyJzdWIiOiIwMHUxN3U2NG41aW43Zmk4RTFkOCIsIm5hbWUiOiJacCBabWNkb3dlbGwiLCJwcm9maWxlIjoiaHR0cHM6Ly93d3cuZmFjZWJvb2suY29tL2FwcF9zY29wZWRfdXNlcl9pZC8yOTI4NDI1OTQzOTA2MDEvIiwibG9jYWxlIjoiZW4tVVMiLCJlbWFpbCI6InBtY2Rvd2VsbEBva3RhLmNvbSIsInZlciI6MSwiaXNzIjoiaHR0cHM6Ly9jb21wYW55eC5va3RhLmNvbSIsImF1ZCI6InZaVjZDcDhybjVseHJOOWFaNjg4IiwiaWF0IjoxNDY0ODA5ODc0LCJleHAiOjE0NjQ4MTM0NzQsImp0aSI6IlRRSXVGMWY5cXMyYjUtUExqQkYtIiwiYW1yIjpbInB3ZCJdLCJpZHAiOiIwb2ExN3U1bXNjYWF0cmxNMTFkOCIsIm5vbmNlIjoiVGV4YXNPZkNvdXJzZSIsInByZWZlcnJlZF91c2VybmFtZSI6InBtY2Rvd2VsbEBva3RhLmNvbSIsImdpdmVuX25hbWUiOiJacCIsImZhbWlseV9uYW1lIjoiWm1jZG93ZWxsIiwiem9uZWluZm8iOiJBbWVyaWNhL0xvc19BbmdlbGVzIiwidXBkYXRlZF9hdCI6MTQ2NDgwNzE4MywiZW1haWxfdmVyaWZpZWQiOnRydWUsImF1dGhfdGltZSI6MTQ2NDgwOTg3NH0.8FKU3tEfL1JP5D3w9JEfWhGr_rGzjh_wwdUgwmE0b1flRztWJwrDpf6D_nYbYYFPitQyiMnsohlQRktAWcrbkv7x1MlLKGBjbFUEjPwKXa-cigievLh71j4bLToUZb6MP5L3q8uyCsmIoLhfvmY9-52F-LARcGzh0EYUv_KFj4I2BWbE0bggs7qZQIBFgIDnwlwxuxI_YkoCRfCYhQfcv1AVhDtuVbFQd4gWzCghmCPmxJ-uLnHlGTtuYPW15GSgo9qE-RlKaeC4T_xEg2OCz2lra8AY84uBnqbeK76ZsQSLaP6VWyKMrSi7tuI5Fa4GQeLAWFfSPbSw7o7p56in1A&state=TexasOfCourse
    -->
</html>
