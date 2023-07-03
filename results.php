<?php

    $badword = $_GET('badword');
    $paragraph = $_GET('paragraph');

    $paragraph_length = strlen($paragraph);

    $censored_paragraph = str_replace($badword, '***', $paragraph);
    $l_par_censored = strlen($censored_paragraph);
    // var_dump

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-badwords</title>
</head>
<body>
    <h4>Paragrafo</h4>
    <p><?php echo $paragraph; ?></p>
    <p><strong><h4>Parola cattiva:</h4></strong><?php echo $badword; ?></p>
    <p><strong><h4>Lunghezza paragrafo:</h4></strong><?php echo $paragraph_length; ?></p>
    <hr>
    <h4>Paragrafo censurato</h4>
    <p><?php echo $censored_paragraph; ?></p>
    <p><strong><h4>Lunghezza paragrafo censurato:</h4></strong><?php echo $l_par_censored; ?></p>

</body>
</html>