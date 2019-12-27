<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <br>
  <div class="alert alert-success">
    <h4><strong>Success!</strong><p>The Question has been successfully updated</p></h4>
  </div>
<form action="{{ action('TestsController@display') }}" method="GET">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="hidden" name="test_id" value="{{$a}}"/>
    <input type="hidden" name="test_n" value="{{$b}}"/>
    
    <button type="submit" class="btn btn-primary">Back</button>
    
</form>
  
</div>

</body>
</html>
