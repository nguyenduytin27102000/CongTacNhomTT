<!DOCTYPE html>
<html>
<head>
    <title>Tính toán</title>
</head>
<body>
    
    <!-- Xử lý dữ liệu post lên -->
    <?php
        $soA = $soB = $ketQua = "";

        $error = array();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $soA = $_POST['soA'];
            $soB = $_POST['soB'];

            if (empty($error)) {
                $ketQua = $soA * $soB;
            }
        }
    ?>

    <form action="" method="post">
        <table>
            <tr>
                <td>Nhập a: </td>
                <td>
                    <input type="text" name="soA" value="<?php echo $soA; ?>">
                </td>
            </tr>
            <tr>
                <td>Nhập b: </td>
                <td>
                    <input type="text" name="soB" value="<?php echo $soB; ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả: </td>
                <td>
                    <input type="text" value="<?php echo $ketQua; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>