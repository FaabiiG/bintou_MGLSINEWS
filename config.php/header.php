<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8"/>
            <title> MGLSI_NEWS</title>
            <style type="text/css">
           <?php include 'Style.php'; ?>
           </style>
        </head>
         
        
        <header>
            <div class=" entete"> <h1> ACTUALITES POLYTECHNICIENNES </h1></div>

            <div class="main">
               <ul class="menu"> <li class="menu_i"><a href="index.php">ACCUEIL</a></li>
                <?php foreach($categories as $categorie): ?>
                        <li class="menu_i">
                            
                            <a href="articles.php?id=<?= $categorie['id'] ?>"><?= $categorie['libelle'] ?></a></li>       
                
                <?php endforeach ?>
                </ul> 
            </div>
        </header>
 