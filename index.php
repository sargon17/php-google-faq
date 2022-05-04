<?php

include "faq_data.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet"> 
    <title>Domande frequenti</title>
</head>
<style>
    body{
        background-color: #f2f2f2;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        color: #3d3d3d;
    }
    .qa_list{
    width: 50vw;
    list-style: none;
    padding: 0;
    margin: 100px auto;
    }
    .qa_list li{
        margin: 20px 0;
    }

    .qa_list h3{
        font-size: 1.5rem;
        font-weight: 500;
        margin: 0;
        margin-top: 40px;
        padding: 0;
    }
    .qa_list h4{
        font-size: 1.2rem;
        font-weight: 400;
        margin: 0;
        margin-top: 30px;
    }
    .qa_list p, .qa_list li{
        line-height: 1.3;
    }
    @media screen and (max-width: 768px){

        body{
            font-size: 12px;
        }
        .qa_list{
            width: 80vw;
        }

        
    }
</style>

<body>
    <ul class="qa_list">
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