<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit an item</h1>
    <form action="" method="post">
        <label for="">Name: </label>
        <input type="text" name="username" value='<?=$data->username ?>'/>
        <input type="submit" name="action" value="Save changes">
    </form>
    <a href="/home/index">Cancel</a>
</body>
</html>