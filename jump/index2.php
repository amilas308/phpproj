<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition&Subtraction</title>
</head>
<body>
    <div class="container">
        <form action="calc.php" method="POST" enctypt="multipart/form-data">
            <input type="text" name="num01" placeholder="Number 1">
            <input type="email" name="email" placeholder="someone@gmail.com">
            <select name="oper">
                <option value="choose">Choose operation!</option>
                <option value="add">Add</option>
                <option value="subtract">Subtract</option>
            </select>
            <input type="text" name="num02" placeholder="Number 2">
            <button name="submit" value="Submit">Submit</button>
        </form>
    </div>
</body>
</html>