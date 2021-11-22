<?php
require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body><center>
<a href="tambah.php">Add New</a>
    <table border="3" cellpadding="20" cellspacing="0">
        <tr bgcolor="#F37A64">
            <th>Bil</th>
            <th>Nama</th>
            <th>No K/P</th>
            <th>Tindakan</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM senarai";
        if ($result = $conn->query($sql)) {
            while ($row = $result->fetch_object()) {
        ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->ic; ?></td>
                    <td>
                        <a href="update.php?idsenarai=<?php echo $row->idsenarai; ?>">Edit</a>
                        |
                        <a href="padam.php?idsenarai=<?php echo $row->idsenarai; ?>" onclick="return confirm('Adakah anda ingin padam?');">Padam</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body></center>

</html>\