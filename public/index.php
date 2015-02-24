<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Simple Temp</title>

<link href="css/app.css" rel="stylesheet">

</head>
<body ng-app>
<div class="container">
 <div class="row">
  <div class="col-md-12">
   <a class="btn btn-default" href="#" role="button">Link</a>
    <button class="btn btn-default" type="submit">Button</button>
    <input class="btn btn-default" type="button" value="Input">
    <input class="btn btn-default" type="submit" value="Submit">
 </div>
</div>
</div> 
 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="stater-template">
                 <input type="text" ng-model="name" placeholder="Ur name.." />
                 <h1>Hi<span ng-bind="name"></span></h1>
             </div>
        </div>
    </div>     
 </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>   
<script type="text/javascript" src = "js/app.js"></script>
</body>

</html>