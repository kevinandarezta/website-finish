<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Apartment</title>
        <link rel="stylesheet" href="css/aboutusstyle.css">
    </head>
    <style>
    div.gallery {
      margin: 5px;
      border: 1px solid #ccc;
      float: left;
      width: 180px;
    }

    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
    }

    div.desc {
      padding: 15px;
      text-align: center;
    }
    </style>
    <body>
        <div class="team-section">
            <h1>Apartement Available</h1>
            <span class="border"></span>
        </div>

        <div style="width: 1024px; margin: 0 auto;">
          <?php 
              include 'connection.php';

              $no = 1;
              $query = mysqli_query($conn,"SELECT * FROM residence");
              while($row = mysqli_fetch_assoc($query)){ ?>
              <a target="_blank" href="detail_residence.php?id_residence=<?= $row['id_residence']; ?>">
              <div class="gallery">
                  <img src="images/<?= $row['image']; ?>" alt="" width="1200" height="1000">
                <div class="desc"><?= $row['name']; ?></div>
              </div>
              </a>
          <?php } ?>
        </div>
    </body>
</html>