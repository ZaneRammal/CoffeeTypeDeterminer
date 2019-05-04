<?php

# Disable error reporting on deployment
error_reporting(E_ALL);
ini_set('display_errors', 1);

# The <head> and opening <html> element(s), <body>, and navigation bar
include 'html/head.html';
echo '<title>About this websiter</title>';
echo '<body>';
include 'html/menu.html';

echo '<div class = "center">
<h2>This was Assignment 1 for Dr. Mahmoud`s Cloud Computing Course</h2>';
echo '<p>Modifed from the original</p>';
echo '<h3>Image Sources:</h3></div><br><br><br>
<li class = "credits">Flat White: https://en.wikipedia.org/wiki/Flat_white#/media/File:Flat_white_coffee_with_pretty_feather_pattern.jpg | CC BY-SA 4.0</li>
<li class = "credits">Espresso: https://www.pexels.com/photo/selective-focus-photography-of-a-cup-of-black-coffee-1233528/ | Pexels License </li>
<li class = "credits">Latte: https://www.pexels.com/photo/coffee-latte-with-heart-art-2226091/ | Pexels License</li>
<li class = "credits">Cappuccino: https://www.pexels.com/photo/clear-footed-drinking-glass-filled-with-cappuccino-on-white-ceramic-saucer-and-table-1705536/ | Pexels License</li>
<li class = "credits">Macchiato: https://www.pexels.com/photo/white-ceramic-coffee-cup-with-white-ceramic-saucer-1036444/ | Pexels License </li>
<li class = "credits">Affogato: https://pixabay.com/photos/affogato-ice-cream-coffee-cafe-623516/ | Pixabay License</li>
<li class = "credits">CafeAmericano: https://www.pexels.com/photo/white-baby-s-breath-flowers-beside-white-cup-1549707/ | Pexels License </li>
<li class = "credits">Mocha: https://www.pexels.com/photo/white-ceramic-cup-with-white-cream-1006297/ | Pexels License</li>
<li class = "credits">Long Black: https://en.wikipedia.org/wiki/Long_black#/media/File:Long_Black_1.jpg | CC BY-SA 3.0 </li>
<li class = "credits">Water: https://www.pexels.com/photo/clean-clear-cold-drink-416528/ | Pexels License</li>
<li class = "credits">Vienna: https://en.wikipedia.org/wiki/Viennese_coffee_house#/media/File:Einspaenner.jpg CC BY-SA 3.0 </li>
<li class = "credits">Rum: https://pixabay.com/photos/rum-alcohol-after-work-cozy-mood-3898745/ | Pixabay License </li>

<br><br><br>
<div class = "center">
<h3> Research Sources </h3>
</div>
    <li class = "credits"><b>[1]</b> www.cafeculture.com, What is a piccolo latte?. 2011.</li>
      <li class = "credits"><b>[2]</b> Canstar Blue, "Coffee Types:
         11 Most Popular Types Of Coffee | Canstar Blue",
         Canstar Blue, 2018. [Online]. Available:
         https://www.canstarblue.co.nz/food-drink/coffee-shop-chains/coffee-types-explained/.
         [Accessed: 02- Feb- 2019]. </li>
        <li class = "credits"><b>[3]</b> "The origins of coffee names |
        Bassett Espresso", Bassettespresso.com,
        2016. [Online]. Available:
        http://bassettespresso.com/coffee-names-where-do-they-come-from/.
         [Accessed: 05- Feb- 2019].</li>
        <li class = "credits"><b>[4]</b> "12 Different Types Of Coffee
        Explained", Latte Art Guide. [Online].
         Available:
         https://www.latteartguide.com/2016/01/different-types-of-coffee.html.
          [Accessed: 05- Feb- 2019].</li>';

echo '<br><br><br><br><br><br>';
include 'html/footer.html';
echo '</body></html>';

?>
