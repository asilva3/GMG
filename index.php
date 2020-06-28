<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    <title>GMG Dev Test</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navigation.css">
    <?php $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>
    <script type="text/javascript" src="<?php echo $url; ?>/vendor/jquery.js"></script>
    <script type="text/javascript" src="javascript.js"></script>
  </head>
  <body>
    <main>
      <h1>Goldman Marketing Group Web Developer Test</h1>
      <section id="task1">
        <h2>Task 1</h2>
        <p>The image below is pretty awesome. However, when we run a Lighthouse audit or a Google Pagespeed Index audit we see this come up:</p>
        <a href="https://web.dev/uses-webp-images/?utm_source=lighthouse&utm_medium=devtools">Serve images in next-gen formats</a>
        <p>Our Lead Generation team is really concerned about our Google rankings and would like this resolved.</p>
        <p><strong>Objective:</strong> Update the image and resolve the Lighthouse error (don't forget cross browser support).</p>
        <?php // TODO: Edit code for task 1 ?>
        <img src="Fire_breathing.webp" alt="Fire breathing">
        <?php // TODO: Edit code for task 1 ?>
      </section>
      <hr>
      <section id="task2">
        <h2>Task 2</h2>
        <p>While the statement below is true, it does seem outdated.</p>
        <p><strong>Objective:</strong> Update the paragraph to be relevant for the actual current year (make it future proof).</p>
        <?php // TODO: Edit code for task 2 ?>
          <?php
          $year = date("Y");
          ?>
          <p class="quote">PHP was originally created by Rasmus Lerdorf in 1994. Which means it is now 23 years old in <?php print_r($year) ?>.</p>
        <?php // TODO: Edit code for task 2 ?>
      </section>
      <hr>
      <section id="task3">
        <h2>Task 3</h2>
        <p>For whatever reason our Design team came up with a very hip idea for a button. They say that the background color of the wrapper should change from Gold to Silver once you hover on the link (but not the wrapper itself). They even came up with a useful visualisation of how it should work:</p>
        <img class="gif" src="hover-example.gif" alt="Hover solution (task 3)">
        <figcaption>Example of hover solution.</figcaption>
        <p>Our button is being loaded from a third party script so you won't be able to edit the HTML markup. Someone already tried coming up with a solution, but it's not quite there.</p>
        <p><strong>Objective:</strong> Make the wrapper background change colors when you hover your pointer over the anchor tag.</p>
        <?php // TODO: DO NOT edit this code for task 3 (you may edit the style.css and javascript.js) ?>
        <div id="wrapper">
          <a id="link" href="#">Aqua Regia</a>
        </div>
        <?php // TODO: DO NOT edit this code for task 3 (you may edit the style.css and javascript.js) ?>
      </section>
      <hr>
      <section id="task4">
        <h2>Task 4</h2>
        <p>It is very important that the third item in this list is red. It is also important that the HTML structure doesn't change. As you can see someone already made the item red. However, !important was used to achieve this and some people on stackoverflow were making fun of developrs using !important. Let's fix it and keep our prestigious reputation.</p>
        <p><strong>Objective:</strong> Remove !important from the CSS while still keeping the third item red.</p>
        <?php // TODO: DO NOT edit this code for task 4 (you may edit the style.css and javascript.js) ?>
        <ol class="green-list">
          <li class="underlined">Green underlined</li>
          <li>Boring green</li>
          <li class="red">It is important that this item stays red</li>
          <li class="underlined">Green underlined</li>
          <li>Boring green</li>
        </ol>
        <?php // TODO: DO NOT edit this code for task 4 (you may edit the style.css and javascript.js) ?>
      </section>
      <hr>
      <section id="task5">
        <h2>Task 5</h2>
        <p>We wanted to make this document easy to navigate so we outsorced this last part to a team of developers that will remain unnamed. We asked them to add navigation, add some styling for the desktop version, and make sure the links are easy to touch on smaller touch devices. We are happy with the way it looks, but we do think the HTML could be a lot more <a href="https://en.wikipedia.org/wiki/Don%27t_repeat_yourself">DRY</a>.</p>
        <p><strong>Objective:</strong> Keep the current styling while only leaving one single &lt;nav&gt; element.</p>
        <?php // TODO: Edit code for task 5 ?>
        <nav class="desktop-nav">
          <a href="#task1">Task1</a>
          <a href="#task2">Task2</a>
          <a href="#task3">Task3</a>
          <a href="#task4">Task4</a>
          <a href="#task5">Task5</a>
        </nav>
        <?php // TODO: Edit code for task 5 ?>
      </section>
      <hr>
      <section>
        <p>Once you have completed the test please archive the "test" folder into a .zip file and upload it to our <a href="https://www.dropbox.com/request/izhCnKgDmhO6RvKJ3Yb7" target="_blank">Dropbox</a>.</p>
      </section>
    </main>
  </body>
</html>
