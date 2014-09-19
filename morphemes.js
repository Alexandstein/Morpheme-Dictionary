function morphemesInit(){
	
	var app = angular.module('morphemeDict', []);
	//Global morpheme list
	var morphemes = [];
	
	app.controller('SearchController', ['$http', '$scope', function($http, $scope) {
		var self = this;
		
		self.activeSetting = 0;
		self.morphemes = [];
		self.searchVal = '';
		
		$http.get('/resources/data/morphemes/morphemesTest.json').success(function(data){
			for(i = 0; i < data.length; i++){
				data[i].id = i;
			}
			self.morphemes = data;
			morphemes = data;
			
			//Displays the app when loading is done.
			$('#loading-box').hide();
		});
			
		self.test = function(value){
			console.log(value.id);
		}
			
		//Filter out morphemes by morpheme, or allomorph
		self.morphemeFilter = function(value){
			//Check for empty string
			if(self.searchVal == ''){
				return true;
			}
			
			var regex = new RegExp('^' + self.searchVal);
			
			//Morpheme search
			if(self.activeSetting == 0){
				if(regex.exec(value.morpheme)){
					return true;
				}else{
					for(i = 0; i < value.allomorphs.length; i++){
						if(regex.exec(value.allomorphs[i])){
							return true;
						}
					}
				}
			//Gloss search
			}else if(self.activeSetting == 1){
				for(i = 0; i < value.gloss.length; i++){
					if(regex.exec(value.gloss[i])){
						return true;
					}
				}
			}
			return false;
		};
	}]);
	
	app.controller('MorphemeController', ['$http', '$scope', function($http, $scope) {
		var self = this;
		self.activeMorpheme = undefined;
		
		//Handles click on the morpheme search panel.
		self.handleMorphemeClick = function(i){
			self.activeMorpheme = morphemes[i];
		}
	}]);
};

define([], function(){
	return {
		ngInit: morphemesInit
	};
});