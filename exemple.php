<?php include('config/connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>

        <thead>
            <th>title</th>
            <th>body</th>
            <th>author</th>
        </thead>
        <?php
        $stmt = $pdo->query('SELECT * FROM posts');

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $title = $row['title'];
            $author = $row['author'];
            $body = $row['body'];
        }
        ?>

        <tbody>
            <td><?php echo $title; ?></td>
            <td><?php echo $body; ?></td>
            <td><?php echo $author; ?></td>

        </tbody>
    </table>
</body>

</html>