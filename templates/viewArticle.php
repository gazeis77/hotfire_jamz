<?php include "inc/header.php" ?>
 	<div class="container">
      <h1><?php echo htmlspecialchars( $results['article']->title )?></h1>
      
      <div><?php echo $results['article']->content?></div>
      <p>Published on <?php echo date('F j Y', $results['article']->publicationDate)?></p>
 	</div>
      
 
<?php include "inc/footer.php" ?>