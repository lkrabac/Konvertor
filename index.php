<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="main.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konvertor</title>
  </head>
  <body>
    <h1>Konvertuj si video</h1>
    <h2>Konverter</h2>
    <form action="/apicall.php">
      <select name="type" id="">
        <option value="mp3">MP3</option>
        <option value="mp4">MP4</option>
        <option value="webm">WEBM</option>
      </select>
      <textarea name="url" id="" cols="25" rows="2"></textarea>
      <button type="submit">Konvertuj</button>
    </form>
  </body>
</html>
