<?php

include "faq_data.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domande frequenti</title>
</head>

<body>
    <ul>
        <?php foreach ($faq_data as $faq) {
          echo "<li>";
          echo "<h3>" . $faq["question"] . "</h3>";
          foreach ($faq["answer"] as $answer) {
            echo "<p>" . $answer . "</p>";
          }
          if (isset($faq["subquestion"])) {
            echo "<h4>" . $faq["subquestion"] . "</h4>";
            foreach ($faq["subanswer"] as $subanswer) {
              echo "<p>" . $subanswer . "</p>";
            }
          }
          echo "</li>";
        } ?>
    </ul>
</body>

</html>