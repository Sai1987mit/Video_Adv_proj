// This will attach the controller to the view, $scope is from the state machine concept 
// of scopes, http is for the connection to the banckend
app.controller("LoginController", function($scope, $http){
		//Variables
	      $scope.signUpInfo = {
	    		  username: undefined,
	    		  password: undefined
	    		  
	      }
	      
	      $scope.loginInfo = {
	    		  username: undefined,
	    		  password: undefined
	    		  
	      }
	    //Functions
	      
	      $scope.signUserUp = function (){
	    	  var data = {
	    			  username: $scope.signUpInfo.username,
	    			  password: $scope.signUpInfo.password
	    			  
	    	  }
	    	  
	    	  $http.post("endpoints/signup.php", data).success(function(response){
	    		   console.log(response);  
	    	  }).error(function(error){
	    		  console.error(error);
	    	  });
	    	  
	      }
	      
	      
	    //Init
})