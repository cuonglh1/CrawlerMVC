<!doctype html>
<html>

<head>
    <title>Showdata</title>
    <h3>show data</h3>
    <h3><a href="index.php">Return</a></h3>
</head>
<style>
    .content-article-crawler {
        height: 300px;
        overflow-x: auto;
    }
</style>

<body>
    <table border="1px black">
        <thead>
            <tr>
                <th>#</th>
                <th>title</th>
                <th>article</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($rows as $row) {
            ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <td>
                            <div class="content-title-crawler">
                                <?= $row['title'] ?>
                            </div>
                        </td>
                        <td>
                            <div class="content-article-crawler">
                                <?= $row['article'] ?>
                            </div>
                        </td>
                        <td>
                            <div class="content-date-crawler">
                                <?= $row['datetime'] ?>
                            </div>
                        </td>

                    </tr>
        </tbody>
<?php
                }
            } else {
                echo "no record in database";
            }
?>

</tr>
    </table>


</body>

</html>