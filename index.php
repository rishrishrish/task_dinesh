<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("connect.php");
                $sql="SELECT * FROM tasks";
                $result=mysqli_query($conn,$sql);
                if (mysqli_num_rows($result)>0) {
                    while ($row=mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row['status'];?></td>
                            <td><?php echo $row['created_at'];?></td>
                            <td>
                            <a href="view.php?id=<?php echo $row['id']; ?>" class="btn btn-info">View More</a>
                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">edit</a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                
                ?>
            </tbody>
            

        </table>
    </div>
</body>
</html>