<?php include_once './connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Retrive Data</title>
</head>

<body>
    <?php
    $sql = 'SELECT * FROM control ORDER BY ID DESC LIMIT 1;';
    $result = mysqli_query($connect, $sql);
    ?>
    <div class="dataSQL">
        <?php
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_row($result);
        ?>
            <table>
                <thead>
                    <th>Control 1</th>
                    <th>Control 2</th>
                    <th>Control 3</th>
                    <th>Control 4</th>
                    <th>Control 5</th>
                    <th>Control 6</th>
                    <th>Running</th>
                </thead>
                <tbody>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>

                </tbody>
            </table>
        <?php } else {
            echo "<h1>There is no data</h1>";
        }
        ?>
        <br>
        <a href="../index.html">Go Back</a>
    </div>
</body>

</html>