<?php 
$type = $_GET['type'];
$url = $_GET['url'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Konvertor</title>
</head>
<body>
<iframe src="https://convert2mp3s.com/api/single/<?php echo $type ?>?url=<?php echo $url ?>"
width="75%" height="100%" allowtransparency="true" scrolling="no" style="border:none"></iframe>
</body>
</html>
