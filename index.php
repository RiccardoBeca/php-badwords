<!--

   Creare una variabile con un paragrafo di testo a vostra scelta.
   Stampare a schermo il paragrafo e la sua lunghezza.
   Una parola da censurare viene passata dall’utente tramite parametro GET.
   Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

 -->
 <style><?php include 'C:/MAMP/htdocs/php-badwords/style.css'; ?></style>

<?php

  $testo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum veritatis praesentium nesciunt eum amet commodi, quibusdam dolorum? Pariatur neque hic totam aliquid, eveniet voluptate aperiam voluptatibus exercitationem consequatur corporis, vel commodi sequi nesciunt officiis quasi asperiores porro! Et expedita possimus quae, distinctio recusandae ipsam nesciunt illum consectetur? Tempore incidunt iure quas ipsum, commodi suscipit. Sunt sequi mollitia aliquid sint aut in culpa pariatur ipsum asperiores, soluta nostrum expedita distinctio provident ea quo, quam maiores molestiae facere dicta voluptas dignissimos hic? Ipsam porro quo explicabo, officiis excepturi assumenda quisquam earum odio nobis ex consequatur reiciendis molestias saepe laudantium sit obcaecati iste.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum veritatis praesentium nesciunt eum amet commodi, quibusdam dolorum? Pariatur neque hic totam aliquid, eveniet voluptate aperiam voluptatibus exercitationem consequatur corporis, vel commodi sequi nesciunt officiis quasi asperiores porro! Et expedita possimus quae, distinctio recusandae ipsam nesciunt illum consectetur? Tempore incidunt iure quas ipsum, commodi suscipit. Sunt sequi mollitia aliquid sint aut in culpa pariatur ipsum asperiores, soluta nostrum expedita distinctio provident ea quo, quam maiores molestiae facere dicta voluptas dignissimos hic? Ipsam porro quo explicabo, officiis excepturi assumenda quisquam earum odio nobis ex consequatur reiciendis molestias saepe laudantium sit obcaecati iste.';

  $censoredWord =  $_GET['censoredWord'];

  $censoredText = str_replace($censoredWord,'***', $testo);

 
?>


<h2>Questo e' il primo testo:</h2>
     
<h3> <?php echo  $testo ?> </h3>

<p>Il testo e' lungo <?php echo str_word_count("$testo") ?> parole.</p>

<h2>Il testo censurato e':</h2>

<h3><?php echo $censoredText ?></h3>

<p>La lunghezza del testo censurato e' di: <?php echo str_word_count("$censoredText") ?> parole.</p>



