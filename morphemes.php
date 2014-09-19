
<!DOCTYPE html>
<html lang="en"
	  xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta charset="utf-8"/>
		<meta property="og:image" content='resources/Images/Alex/conducting.jpg' />
<link rel='description' href='resources/Images/Alex/conducting.jpg'/>
<meta name="keywords" content="Alexander Stein, portfolio, projects" />
<meta name="description" content="The portfolio of Alexander Stein" />
<meta name="author" content="Alexander Stein" />
<meta name="copyright" content="&copy; 2013" />	
<link rel="stylesheet/less" type="text/css" href="resources/CSS/main.css"/>
<link rel="stylesheet/less" type="text/css" href="resources/CSS/morphemes.css?version=100"/>

<!-- TO FIX
<script src="less.js" type="text/javascript"></script>
<script src="resources/scripts/jquery-2.1.1.js"></script>
<script async src="resources/scripts/MainQuery.js"></script>
--!>

<script src="resources/scripts/lib/require.js"></script>
<script src="resources/scripts/main.js"></script>
<script src="resources/scripts/lib/utils.js"></script>

<title>Alexworks</title>
<body id='body' style='display: none; '>
<nav  id="navigation">
    <ul>
    	<span id='logo'>
			<a href=""><li>Alexworks</li></a>
		</span>
		<span id='links'>
			<a href="main/about/"><li>About-Meta</li></a><a href="main/projects/"><li>Projects</li></a><a href="main/music/"><li>Music</li></a>		</span>
		<span id='hamburgerSection'>
			<li id="hamburger"><img src=".//resources/Images/icons/hamburger.png" alt="Menu" class="iconSmall"/>		</span>
        </li>
    </ul>
	<div id="hamburgerMenu" style="display:none">
		<div id="controls">
			<img height="35" width="35" class="textControls" id="smallTextButton" src="resources/Images/icons/TextIconSmall.png" alt="Small">
			<img height="35" width="35" class="textControls" id="medTextButton" src="resources/Images/icons/TextIconMed.png" alt="Medium">
			<img height="35" width="35" class="textControls" id="largeTextButton" src="resources/Images/icons/TextIcon.png" alt="Large">
		</div>
		<p>Table of Contents<p>
		<ul id="tableOfContents">
			<li>No contents to display</li>
		</ul>
	</div>
</nav>
<h1>Testng</h1>
<!-------------------------------------------------------->
<!-------------------------------------------------------->
<!-- DEVELOP HERE  --!>
	<div id="Morpheme_Dictionary" class="contentsIndex" >
		<div id="loading-box">
			<span id="loading-text">LOADING</span>
		</div>
		<div ng-cloak id="morpheme-app-container" ng-controller="MorphemeController as ctrl">
			<div ng-controller="SearchController as search" id="search-column" class="">
				<div id="search-input-container">
					<input type="text" id="search-input" placeholder="Search" ng-model="search.searchVal">
					</input>
				</div>
				<div id="search-settings">
					<div id="morpheme-search-tab" ng-click="search.activeSetting = 0" ng-class="{'active-setting': (search.activeSetting == 0)}" class="setting-tab">
						Morpheme
					</div>
					<div id="gloss-search-tab" ng-click="search.activeSetting = 1" ng-class="{'active-setting': (search.activeSetting == 1)}" class="setting-tab">
						Gloss
					</div>
				</div>
				<div id="search-results-box">
					<ul id="search-results">
						<li ng-click="ctrl.handleMorphemeClick(morpheme.id)" class="result" ng-repeat="morpheme in search.morphemes | filter: search.morphemeFilter">
							{{(morpheme.isSuffix ? "-" : "") + morpheme.morpheme + (morpheme.isPrefix ? "-" : "")}}
							<span class="allomorphs-holder" ng-show="morpheme.allomorphs">~{{morpheme.allomorphs.join(', ')}}</span>
						</li>
					</ul>
				</div>
			</div>
			<div id="main-display" class="">
				<div id="name-box">
					<h3 id="morpheme-name">
						{{(ctrl.activeMorpheme.isSuffix ? "–" : "") + ctrl.activeMorpheme.morpheme + (ctrl.activeMorpheme.isPrefix ? "–" : "")|| "Morpheme Dictionary"}}
					</h3>
					<div id="morpheme-allomorphs" class="morpheme-info" ng-show="ctrl.activeMorpheme.allomorphs">
						~{{ctrl.activeMorpheme.allomorphs.join(', ')}}
					</div>
				</div>
				<h4 class="morpheme-info-title">
				Origin
				</h4>
				<div id="morpheme-origin" class="morpheme-info" ng-show="ctrl.activeMorpheme">
					{{ctrl.activeMorpheme.origin}}
				</div>
				<h4 class="morpheme-info-title">
				Gloss
				</h4>
				<div id="morpheme-gloss" class="morpheme-info" ng-show="ctrl.activeMorpheme">
					{{ctrl.activeMorpheme.gloss.join(', ')}}
				</div>
				<h4 class="morpheme-info-title">
				Notes
				</h4>
				<div id="morpheme-notes" class="morpheme-info" ng-show="ctrl.activeMorpheme">
					{{ctrl.activeMorpheme.notes}}
				</div>
			</div>
		</div>
	</div>
<!--END OF DEV AREA --!>
<!-------------------------------------------------------->
<!-------------------------------------------------------->

<div id="adBottom">
	
</div>
<footer id="footer">
	Copyright &copy; 2014 Alexander Stein
</footer>
</body>
</html>