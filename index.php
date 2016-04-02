
<div id="main-content">

	<div class="container header-bump">
      

	        <h1 class="hotfire">That Hotfire</h1>



	<?php


	require("config.php");
	require("classes/article.php");

	$action = isset($_GET['action']) ?$_GET['action'] : "";

	switch ($action) {
		case 'archive':
			archive();
			break;
		case 'viewArticle':
			viewArticle();
			break;
		default:
			homepage();
	}

			function archive() {
				$results = array();
				$data = Article::getList();
				$results['articles'] = $data['results'];
				$results['totalRows'] = $data['totalRows'];
				$results['pageTitle'] = "Article Archive | Widget News";
				require("templates/archive.php");
			}


			function viewArticle(){
				if(!isset($_GET["articleId"]) || !$_GET["articleId"]) {
					homepage();
					return;
				}

				$results = array();
			  	$results['article'] = Article::getById( (int)$_GET["articleId"] );
			  	$results['pageTitle'] = $results['article']->title;
			 	 require("templates/viewArticle.php" );	
			}

			function homepage() {
			  $results = array();
			  $data = Article::getList( HOMEPAGE_NUM_ARTICLES );
			  $results['articles'] = $data['results'];
			  $results['totalRows'] = $data['totalRows'];
			  $results['pageTitle'] = "Widget News";
			  require("templates/homepage.php" );
			}
		?>


	</div>

</div>
