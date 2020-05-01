<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/contactusstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="contact-section">
        <?php 
            error_reporting(0);
            include 'connection.php';

            $no = 1;
            $query = mysqli_query($conn,"SELECT * FROM residence WHERE id_residence='$_GET[id_residence]'");
            while($row = mysqli_fetch_assoc($query)){ ?>
        <h1><?= $row['name']; ?></h1>
        <div class="border"></div>
        <table style="width: 1024px; margin: 0 auto;">
            <tr>
                <td>
                    <img src="images/<?= $row['image']; ?>" width="450">
                </td>
                <td width="70%" style="vertical-align: text-top;">
                    <h2 style="color: white;"><?= $row['address']; ?></h2>
                    <h4 style="color: white;">Units : <?= $row['numUnits']; ?></h4>
                    <h4 style="color: white;">Monthly Rental : <?= $row['monthlyRental']; ?></h4>
                    <form class="contact-form" action="add_application.php" method="post">
                        <?php 
                            $result = mysqli_query($conn, "SELECT * FROM users WHERE id_user='$_SESSION[id_user]'");
                            while($row = mysqli_fetch_assoc($result)){ ?>
                                <input type="text" class="contact-form-text" name="name" value="<?= $row['fullname']; ?>" disabled>
                                <input type="hidden" name="id" value="<?= $row['id_user']; ?>">
                                <input type="hidden" name="id_residence" value="<?= $_GET['id_residence']; ?>">
                            <?php }
                        ?>
                        <input type="date" class="contact-form-text" name="fromDate">
                        <input type="number" class="contact-form-text" placeholder="Duration you stay(s)." name="duration">
                        <textarea class="contact-form-text" placeholder="Notes (Optional)" name="note"></textarea>
                        <input type="Submit" class="contact-form-btn" value="Submit">
                    </form>
                    <?php if($_GET['result'] == 'success'){ ?>
                        <p style="color: green;">Success add your application.</p>
                    <?php } ?>
                </td>
            </tr>
        </table>
        <?php } ?>
</div>
</body>
</html>