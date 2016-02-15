<?php include "inc/header.php" ?>
 	<div class="container">
      <ul>
 
<?php foreach ( $results['articles'] as $article ) { ?>
 	
        <li>
          <h2>
          	<a href="?action=viewArticle&amp;articleId=<?php echo $article->id?>">
          	<?php echo htmlspecialchars( $article->title )?></a>
          	<br>
            <span class="pubDate"><?php echo date('F j', $article->publicationDate)?></span>
          </h2>
          <p class="lead"><?php echo htmlspecialchars( $article->summary )?></p>
        </li>

 
<?php } ?>
 
      </ul>
 	 </div>
    
 
<?php include "inc/footer.php" ?>
