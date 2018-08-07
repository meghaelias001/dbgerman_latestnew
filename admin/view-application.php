<?php
require_once 'dbconfig.php';
if(!isset($_SESSION['user_details'])) {
    header('location: index.php');
}
$db->orderBy('id', 'DESC');
$results = $db->get('files');
?>
<html>
<head>
    <title>
        Administrator
    </title>
    <link rel="stylesheet" href="admin_styles.css">
</head>
<body>
<div class="center width-500">
    <div class="content">
        <h3>View Applications</h3>
        <a class="align-right" href="set-data.php"><h4>Set Data</h4></a>
        <table>
            <thead>
            <tr>
                <th>FileName</th>
                <th>Created Date</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($results as $result) {
                $filename= explode('/', $result['filename']);
                echo '<tr><td><a href="../' . $result['filename'] . '" target="_blank">' . $filename[1] . '</a></td>';
                echo '<td>' . $result['created_date'] . '</td></tr>';
            }
            ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>

