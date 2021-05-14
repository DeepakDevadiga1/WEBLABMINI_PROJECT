var app=angular.module("Home",[]);
app.controller("mycontr",function($scope,$http,$window)
{
	
	$http.post('home.php').then(function(response)
   {
		$scope.res=response.data;
		console.log($scope.res['username']);
		if($scope.res['valid']==0)
		{
			$window.location.href = '../Login/login.php';
		}

   })
   // $scope.customercart=function( product_name,product_location,product_deli,product_image)
   // {
   // 	console.log($scope.product_name);
   // 	console.log($scope.product_location);
   // 	console.log($scope.product_deli);
   // 	console.log($scope.product_image);

   // }
   // $scope.Servicemap=function()
   // {
   // 	document.getElementById('Service-map').style.display="block";
   // }

  $scope.stepsModel = [];

$scope.imageUpload = function(element){
    var reader = new FileReader();
    reader.onload = $scope.imageIsLoaded;
    reader.readAsDataURL(element.files[0]);
}

$scope.imageIsLoaded = function(e){
    $scope.$apply(function() {
        $scope.stepsModel.push(e.target.result);
    });
}

$scope.logout=function()
{
  
  $http.post('../Services/delete_Session.php').then(function(response)
   {
     $scope.val=response.data;

     console.log($scope.val['valid1']);
     if($scope.val['valid1']==0)
     {
      $window.location.href='../main/main.php';
     }
   })
}

// $scope.mycart=function()
// {
//   console.log("i am here");
//   $http.post('../DatabaseConnection/userCart.php').then(function(response)
//    {
//      $scope.cart=response.data;

//     })
  
// }

	
 })

