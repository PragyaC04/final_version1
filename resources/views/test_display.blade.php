<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<style>
    #card_body{
        height: 570px;
        overflow-y:auto;
    }

    .right{
    text-align:right;
   }
</style>

</head>
<body>
 
    <!---------------------------------------------modal start--------------------------------------------------------------------->
        

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New Test</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="{{ action('TestsController@store') }}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <div class="modal-body">
                
                <div class="form-group">
                    <label>Enter Test Name: </label>
                    <input type="text" class="form-control" name="test_name" placeholder="test name">
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
            </div>
        </div>
        </div>

    <!---------------------------------------------modal end--------------------------------------------------------------------->


<div class="container">
  <div class="card">
    <div class="card-header"><h4>Tests</h4></div><br>
    <div class=" right">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" >Add Test</button>
    </div>
    <div class="card-body" id="card_body">
        
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Test Name</th>
            <th scope="col">View</th>
            </tr>
        </thead>
        <tbody>
        @foreach($t as $t)
            <form action="{{action('TestsController@display')}}" method="GET">
            <input type="hidden" value="{{$t->setid}}" name="test_id">
            <input type="hidden" value="{{$t->setname}}" name="test_n">
            <tr>
            <td>{{$t->setname}}</td>
            <td><button type="submit" class="btn btn-link">View</button></td>
            </tr>
            
            </form>
        @endforeach
        </tbody>
        </table>
    </div> 





  </div>  
</div>
</body>
</html>



