<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8">
		<title>Unify Search</title>
		
		<link rel="search" href="description.xml.php" 
	      type="application/opensearchdescription+xml" 
	      title="Awesome Search" />
		  
		<script src="js/install-search-engine.js"></script>
	</head>
	
	<body>
		The Unified Search Engine
		
		<a id="install-link" href="description.xml.php" type="application/opensearchdescription+xml" search>install</a>
		
		<script>
			var a = document.getElementById("install-link");
			
			var description = a.getAttribute("href");
			
			a.addEventListener("click", function(e) {
				e.preventDefault();
				installSearchEngine(description);
				
				return false;
			}, false);
			
			//http://stackoverflow.com/questions/1384988/is-there-anyway-to-detect-whether-a-specific-opensearch-search-engine-has-been-a
		</script>
	</body>
</html>