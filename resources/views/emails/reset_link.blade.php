<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>找回密码</title>
</head>
<body>
  <h1>您正在尝试找回密码</h1>
  <p>
    请点击以下链接进入下一步操作：
    <a href="{{  route('password.reset',$token)  }}"></a>
    {{  route("password.reset",$token)  }}
  </p>
  <p>
    如果不是您本人的操作，请忽略此邮件。
  </p>
</body>
</html>
