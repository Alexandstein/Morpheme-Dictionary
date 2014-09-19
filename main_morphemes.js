require(['angular', 'jquery', 
		 'morphemes', 'ngSanitize', 'utils'], 
		 function(angular, $, ngMorphemes){

	//Use define() to export an ngInit() function to allow explicit execution of ng app.
	ngMorphemes.ngInit();
	
	//angularInit wraps the bootstrapping process and turns on Angular manually in orde
	//to make it play nice with Requirejs
	Utils.angularInit('morphemeDict', '#body');
});
