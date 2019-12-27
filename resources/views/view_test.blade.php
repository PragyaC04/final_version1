<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
  h4{ 
      word-spacing: 4px;
      letter-spacing: 1px;
      text-decoration: none;
      font-size: 10px;
   }

   .right{
    text-align:right;
   }

   #sect1{
       height: 600px;
       overflow-y: auto;
   }
   #sect2{
       height: 600px;
       overflow-y: auto;
   }
   #sect3{
       height: 600px;
       overflow-y: auto;
   }
   #sect4{
       height: 600px;
       overflow-y: auto;
   }
   .card-footer form{
       display:inline;
   }
  </style>
</head>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Test Number: {{$b}}</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sect1"><h4>Qualitative Analysis</h4></a></li>
    <li><a data-toggle="tab" href="#sect2"><h4>Analytical Analysis</h4></a></li>
    <li><a data-toggle="tab" href="#sect3"><h4>Creative Analysis</h4></a></li>
    <li><a data-toggle="tab" href="#sect4"><h4>Comprehension Analysis</h4></a></li>
  </ul>
  <br>
  <div class="tab-content">
    <!-------------------------------------------Qualitative--------------------------------------------->
    <div id="sect1" class="tab-pane fade in active">
        
        <form action="{{action('TestsController@question')}}" method="GET">                        
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" value="{{$a}}" name="test_id">
            <input type="hidden" value="{{$b}}" name="test_n">
            <input type="hidden" value="qualitative" name="section">
            <div class="right"><button type="submit"  class="btn btn-primary" >Add Question</button></div><br>
        </form>
        
        @foreach($qual as $q)
            <div class="card">
                <div class="card-header">
                    Q{{$q->qid}}&nbsp;
                    {{$q->question}}<br>
                    <img src="{{ asset('uploads/questions/'.$q->questionimg)}}"  alt="">
                    <p class="right">{{$q->marks}}</p>
                </div>
                
                
                <div class="card-body">
                    {{ $q->option1}} <img src="{{ asset('uploads/option1/'.$q->option1img)}}"  alt=""> <br>
                    {{ $q->option2}} <img src="{{ asset('uploads/option2/'.$q->option2img)}}"  alt=""> <br>
                    {{ $q->option3}} <img src="{{ asset('uploads/option3/'.$q->option3img)}}"  alt=""> <br>
                    {{ $q->option4}} <img src="{{ asset('uploads/option4/'.$q->option4img)}}"  alt=""> <br>
                </div> 
            
            
                <div class="card-footer">
                    <form action="{{action('TestsController@qual_edit')}}" method="POST"> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" value="{{$a}}" name="test_id">
                    <input type="hidden" value="{{$b}}" name="test_n">
                    <input type="hidden" value="{{$q->qid}}" name="quest_id">
                    <input type="hidden" value="qualitative" name="section">
                    <button type="submit"  class="btn btn-primary">Edit</button>
                    </form> 
                    {{--<a href="edit_qual_question/{{$a}}/{{$q->qid}}" class="btn btn-primary">Edit</a>--}}
                    
                    <form action="{{action('TestsController@qual_delete')}}" method="GET"> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" value="{{$a}}" name="test_id">
                    <input type="hidden" value="{{$b}}" name="test_n">
                    <input type="hidden" value="{{$q->qid}}" name="quest_id">
                    <input type="hidden" value="qualitative" name="section">
                    <button type="submit"  class="btn btn-danger">Delete</button>
                    </form>    
                    <p class="right">Correct option is: {{$q->correct}}</p>
                </div>
            </div>
            <br>
        @endforeach 
        <form action="{{action('TestsController@index')}}" method="GET">                        
            <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>

    <!-------------------------------------------Analytical--------------------------------------------->
    <div id="sect2" class="tab-pane fade">
        <form action="{{action('TestsController@question')}}" method="GET">                        
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" value="{{$a}}" name="test_id">
            <input type="hidden" value="{{$b}}" name="test_n">
            <input type="hidden" value="analytical" name="section">
            <div class="right"><button type="submit"  class="btn btn-primary" >Add Question</button></div><br>
        </form>
       @foreach($analy as $q)
            <div class="card">
                <div class="card-header">
                    Q{{$q->qid}}&nbsp;
                    {{$q->question}}<br>
                    <img src="{{ asset('uploads/questions/'.$q->questionimg)}}"  alt="">
                    <p class="right">{{$q->marks}}</p>
                </div>
                
                <div class="card-body">
                    {{ $q->option1}} <img src="{{ asset('uploads/option1/'.$q->option1img)}}"  alt=""> <br>
                     {{ $q->option2}} <img src="{{ asset('uploads/option2/'.$q->option2img)}}"  alt=""> <br>
                    {{ $q->option3}} <img src="{{ asset('uploads/option3/'.$q->option3img)}}"  alt=""> <br>
                    {{ $q->option4}} <img src="{{ asset('uploads/option4/'.$q->option4img)}}"  alt=""> <br>
                </div> 
            
                <div class="card-footer">
                    <form action="{{action('TestsController@analy_edit')}}" method="POST"> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" value="{{$a}}" name="test_id">
                    <input type="hidden" value="{{$b}}" name="test_n">
                    <input type="hidden" value="{{$q->qid}}" name="quest_id">
                    <input type="hidden" value="analytical" name="section">
                    <button type="submit"  class="btn btn-primary">Edit</button>
                    </form> 
                    
                    <form action="{{action('TestsController@analy_delete')}}" method="GET"> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" value="{{$a}}" name="test_id">
                    <input type="hidden" value="{{$b}}" name="test_n">
                    <input type="hidden" value="{{$q->qid}}" name="quest_id">
                    <input type="hidden" value="qualitative" name="section">
                    <button type="submit"  class="btn btn-danger">Delete</button>
                    </form> 
                    <p class="right">Correct option is: {{$q->correct}}</p>  
                </div>
            </div>
            <br>
        @endforeach 
        <form action="{{action('TestsController@index')}}" method="GET">                        
            <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
    
    
    <!-------------------------------------------Creative--------------------------------------------->
    <div id="sect3" class="tab-pane fade">
        <form action="{{action('TestsController@question')}}" method="GET">                        
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" value="{{$a}}" name="test_id">
            <input type="hidden" value="{{$b}}" name="test_n">
            <input type="hidden" value="creative" name="section">
            <div class="right"><button type="submit"  class="btn btn-primary" >Add Question</button></div><br>
        </form>
        @foreach($creat as $q)
            <div class="card">
                <div class="card-header">
                    Q{{$q->qid}}&nbsp;
                    {{$q->question}}<br>
                    <img src="{{ asset('uploads/questions/'.$q->questionimg)}}"  alt="">
                    <p class="right">{{$q->marks}}</p>
                </div>
                
                
                <div class="card-body">
                    {{ $q->option1}} <img src="{{ asset('uploads/option1/'.$q->option1img)}}"  alt=""> <br>
                    {{ $q->option2}} <img src="{{ asset('uploads/option2/'.$q->option2img)}}"  alt=""> <br>
                    {{ $q->option3}} <img src="{{ asset('uploads/option3/'.$q->option3img)}}"  alt=""> <br>
                    {{ $q->option4}} <img src="{{ asset('uploads/option4/'.$q->option4img)}}"  alt=""> <br>
                    {{ $q->option5}} <img src="{{ asset('uploads/option5/'.$q->option5img)}}"  alt=""><br>
                   
                   {{-- @if( isset($q->option5img) && !empty($q->option5img))
                   @if( asset('uploads/option5/'.$q->option5img) !== "null" || asset('uploads/option5/'.$q->option5img) !== " ")
                    <input type="radio" name="opt" value="5"> <img src="{{ asset('uploads/option5/'.$q->option5img)}}"  alt=""> <br>
                    @endif --}}
                   {{--  {{$q->option5img}} --}}
                </div>

                <div class="card-footer">
                    <form action="{{action('TestsController@creat_edit')}}" method="POST"> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" value="{{$a}}" name="test_id">
                    <input type="hidden" value="{{$b}}" name="test_n">
                    <input type="hidden" value="{{$q->qid}}" name="quest_id">
                    <input type="hidden" value="creative" name="section">
                    <button type="submit"  class="btn btn-primary">Edit</button>
                    </form> 
                    
                    <form action="{{action('TestsController@creat_delete')}}" method="GET"> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" value="{{$a}}" name="test_id">
                    <input type="hidden" value="{{$b}}" name="test_n">
                    <input type="hidden" value="{{$q->qid}}" name="quest_id">
                    <input type="hidden" value="qualitative" name="section">
                    <button type="submit"  class="btn btn-danger">Delete</button>
                    </form>
                    <p class="right">Correct option is: {{$q->correct}}</p>   
                </div>
            </div>
            <br>
        @endforeach  
        <form action="{{action('TestsController@index')}}" method="GET">                        
            <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
    
    <!-------------------------------------------Comprehension--------------------------------------------->
    <div id="sect4" class="tab-pane fade">
        <form action="{{action('TestsController@question')}}" method="GET">                        
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" value="{{$a}}" name="test_id">
            <input type="hidden" value="{{$b}}" name="test_n">
            <input type="hidden" value="comprehension" name="section">
            <div class="right"><button type="submit"  class="btn btn-primary" >Add Question</button></div><br>
        </form>
        @foreach($comp as $q)
            <div class="card">
                <div class="card-header">
                    Q{{$q->qid}}&nbsp;
                    {{$q->para}}<br>
                    {{$q->question}}
                    <img src="{{ asset('uploads/questions/'.$q->questionimg)}}"  alt="">
                    <p class="right">{{$q->marks}}</p>
                </div>
                
                
                <div class="card-body">
                    {{ $q->option1}} <img src="{{ asset('uploads/option1/'.$q->option1img)}}"  alt=""> <br>
                    {{ $q->option2}} <img src="{{ asset('uploads/option2/'.$q->option2img)}}"  alt=""> <br>
                    {{ $q->option3}} <img src="{{ asset('uploads/option3/'.$q->option3img)}}"  alt=""> <br>
                     {{ $q->option4}} <img src="{{ asset('uploads/option4/'.$q->option4img)}}"  alt=""> <br>
                </div> 
            
                <div class="card-footer">
                    <form action="{{action('TestsController@comp_edit')}}" method="POST"> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" value="{{$a}}" name="test_id">
                    <input type="hidden" value="{{$b}}" name="test_n">
                    <input type="hidden" value="{{$q->qid}}" name="quest_id">
                    <input type="hidden" value="comprehension" name="section">
                    <button type="submit"  class="btn btn-primary">Edit</button>
                    </form> 
                    <form action="{{action('TestsController@comp_delete')}}" method="GET"> 
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <input type="hidden" value="{{$a}}" name="test_id">
                    <input type="hidden" value="{{$b}}" name="test_n">
                    <input type="hidden" value="{{$q->qid}}" name="quest_id">
                    <input type="hidden" value="qualitative" name="section">
                    <button type="submit"  class="btn btn-danger">Delete</button>
                    </form>  
                    <p class="right">Correct option is: {{$q->correct}}</p> 

                </div>
            </div>
            <br>
        @endforeach 
        <form action="{{action('TestsController@index')}}" method="GET">                        
            <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div> 

  </div>
</div>

</body>
</html>

