<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form action="send" method="post">
    {{ csrf_field() }}

    to:<input type="email" name="to">
    message:<textarea name="message"></textarea>

    <input type="submit" value="send">
  </form>

</body>
</html>