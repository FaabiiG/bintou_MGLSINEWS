
<body>
        
<?php foreach($articles as $value){ ?>
       <section id="section2">

              <div class="contenu2">
                    
                      <h2><?= $value['titre'] ?> </h2>
                      <p><?php  echo $value['contenu']; ?></p>
             </div>
        </section>
 <?php } ?>
                     
        </body>
</html>
