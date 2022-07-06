
<body>
        
        <h1 id="acc">TOUTE L'ACTUALITE </h1>
        <?php foreach($articles as $article){?>

       <section id="section1">
          
              <div class="contenu">
       
                      <h2><?= $article['titre'] ?> </h2>
                      <p><?php  echo $article['contenu']; ?></p>
                      <button id="btt" onclick="window.location.href='index.php?id=<?= $article['categorie'] ?>'">lire la suite</button>
             </div>
        </section>
        <?php }?>
        

     
       
                  
     </body>
     </html>
