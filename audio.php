<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="http://tts.baidu.com/text2audio?lan='$lan'&ie='$ie'&spd='$spd'&text='$audio'" method="get">
    <input type="hidden" name="lan" value="zh">
    <input type="hidden" name="ie" value="UTF-8">
    <input type="hidden" name="spd" value="2">
    <input type="text" name="text">
    <input type="submit" value="提交">
</form>
</body>
</html>