<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

var_dump($data);

?>
<head>
    <title>La proximo pelicula de Marvel</title>
    <meta charset="UTF-8" />
    <meta name="description" content="La proxima pelicula de Marvel" />
    <meta name= viewport content="width=device-width, initial-scale=1.0" />
    <link
    rel="stylesheet"
    href="<!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css";
    />"
</head>
<main>
    <pre style="font-size: 8px; overflor: scroll; height: 250px;">
        <?php var_dump($data); ?>
    </pre>
    <section>
        <img src="<?= $data["poster_url"]; ?> width="300" alt="Poster de >?= $data[title]; ?>" /> 
    </section>
    
</main>