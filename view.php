<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>view tasks</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>task details</h1>
        </header>
        <div class="task-detailes my-4">
            <?php
            if (isset($_GET["id"])) {
                $id=$_GET["id"];
                include("connect.php");
                $sql="SELECT * FROM tasks WHERE id=$id";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                ?>
                <h1>Title</h1>
                <p><?php  echo $row["title"];?></p>
                <h1>Description</h1>
                <p><?php  echo $row["description"];?></p>
                <h1>Status</h1>
                <p><?php  echo $row["status"];?></p>
                <h1>Created_at</h1>
                <p><?php  echo $row["created_at"];?></p>
                <?Php
            }
            ?>
        </div>
    </div>
</body>
</html>