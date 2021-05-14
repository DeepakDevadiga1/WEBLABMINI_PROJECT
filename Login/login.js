var app=angular.module("Login",[]);
app.controller("mycontr",function($scope,$http,$window)
{
 $http.get('../Services/delete_Session.php',{params:{'name':$scope.uname,'pass':$scope.pass}}).then(function(response){})
 $http.get("../DatabaseConnection/Data_info.php").then(function(response)
  {
		$scope.res=response.data;

 })
 $scope.validate=function()
 {
 	var flag=0;
 	for(let i=0;i<$scope.res.length;i++)
		{
		if(($scope.uname==$scope.res[i]['UserName'])&&($scope.pass==$scope.res[i]['Password']) )
		{
            flag=1;
            break;
		}
	    }
	    if(flag==1)
	    {
	    $http.get('../Services/session.php',{params:{'name':$scope.uname,'pass':$scope.pass}}).then(function(response){});
		$window.location.href = '../main/main.php';
	    }
		
	    else
	    {
	    	alert("Invalid UserName/Password");
	    	$window.location.href='login.php';
	    }
 }
})
