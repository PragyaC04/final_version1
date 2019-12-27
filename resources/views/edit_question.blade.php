

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Question</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-------------------------------------------- QUALITATIVE SECTION START ----------------------------------------------------------------->
@if($sect == 'qualitative')
    <div class="container">
        <h3>Qualitative Analysis Section</h3>
        <h3>Questions</h3>
        <form action = "{{action('TestsController@qual_update')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT"/>
         <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="{{$c}}" name="quest_id">
        <input type="hidden" value="qualitative" name="section"> 
       
        <div class="card">
            <div class="card-header">
                <div class="form-group">
                    <label>Question No.</label>
                    <input type="text" name="q_number" class="form-control" value="{{$qual->qid}}">
                </div>
                <div class="form-group">
                    <label>Question Content</label>
                    <input type="text" name="q_content" class="form-control" value="{{$qual->question}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="q_image" class="custom-file-input" value={{$qual->questionimg}}>
                        <label class="custom-file-label">Upload question image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Marks</label>
                    <input type="text" name="q_mks" class="form-control" value="{{$qual->marks}}">
                </div>

                <div class="form-group">
                    <label>SetId</label>
                    <input type="text" name="sid" class="form-control"  value="{{$a}}" readonly>
                </div>
            </div>
            
            
            <div class="card-body">
                <div class="form-group">
                    <label>Option1 Content</label>
                    <input type="text" name="o1_content" class="form-control" value="{{$qual->option1}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o1_image" class="custom-file-input" value="{{$qual->option1img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option2 Content</label>
                    <input type="text" name="o2_content" class="form-control" value="{{$qual->option2}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o2_image" class="custom-file-input" value="{{$qual->option2img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option3 Content</label>
                    <input type="text" name="o3_content" class="form-control" value="{{$qual->option3}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o3_image" class="custom-file-input" value="{{$qual->option3img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option4 Content</label>
                    <input type="text" name="o4_content" class="form-control" value="{{$qual->option4}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o4_image" class="custom-file-input" value="{{$qual->option4img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Correct option</label>
                    <input type="text" name="correct" class="form-control" value="{{$qual->correct}}">
                </div>
            </div> 

            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            </div>
        </div>
        </form>
        <form action="{{action('TestsController@display')}}" method="GET">
         <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="qualitative" name="section"> 
        <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endif
<!----------------------------------------------- QUALITATIVE SECTION END ------------------------------------------------------------------>

 
<!---------------------------------------------- ANALYTICAL SECTION START ------------------------------------------------------------------->
@if($sect=='analytical')
 
    <div class="container">
        <h3>Analytical Analysis Section</h3>
        <h3>Questions</h3>
        <form action = "{{action('TestsController@analy_update')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT"/>
         <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="{{$c}}" name="quest_id">
        <input type="hidden" value="qualitative" name="section">
        <div class="card">
            <div class="card-header">
                <div class="form-group">
                    <label>Question No.</label>
                    <input type="text" name="q_number" class="form-control"  value="{{$qual->qid}}">
                </div>

                <div class="form-group">
                    <label>Question Content</label>
                    <input type="text" name="q_content" class="form-control"  value="{{$qual->question}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="q_image" class="custom-file-input"  value="{{$qual->questionimg}}">
                        <label class="custom-file-label">Upload question image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Marks</label>
                    <input type="text" name="q_mks" class="form-control"  value="{{$qual->marks}}">
                </div>

                <div class="form-group">
                    <label>SetId</label>
                    <input type="text" name="sid" class="form-control"  value="{{$a}}" readonly>
                </div>
            </div>
            
            
            <div class="card-body">
                <div class="form-group">
                    <label>Option1 Content</label>
                    <input type="text" name="o1_content" class="form-control"  value="{{$qual->option1}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o1_image" class="custom-file-input"  value="{{$qual->option1img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option2 Content</label>
                    <input type="text" name="o2_content" class="form-control"  value="{{$qual->option2}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o2_image" class="custom-file-input"  value="{{$qual->option2img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option3 Content</label>
                    <input type="text" name="o3_content" class="form-control"  value="{{$qual->option3}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o3_image" class="custom-file-input"  value="{{$qual->option3img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option4 Content</label>
                    <input type="text" name="o4_content" class="form-control"  value="{{$qual->option4}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o4_image" class="custom-file-input"  value="{{$qual->option4img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Correct option</label>
                    <input type="text" name="correct" class="form-control"  value="{{$qual->correct}}">
                </div>
            </div> 
            
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            </div>
        </div>
        </form>
        <form action="{{action('TestsController@display')}}" method="GET">
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="analytical" name="section">
        <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endif
<!--------------------------------------------- ANALYTICAL SECTION END ---------------------------------------------------------------------->


<!------------------------------------------ CREATIVE SECTION START ------------------------------------------------------------------------->

@if($sect=='creative')
    <div class="container">
        <h3>Creative Analysis Section</h3>
   
        <form action = "{{action('TestsController@creat_update')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT"/>
         <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="{{$c}}" name="quest_id">
        <input type="hidden" value="qualitative" name="section">
        <div class="card">
            <div class="card-header">
                <div class="form-group">
                    <label>Question No.</label>
                    <input type="text" name="q_number" class="form-control" value="{{$qual->qid}}">
                </div>

                <div class="form-group">
                    <label>Question Content</label>
                    <input type="text" name="q_content" class="form-control" value="{{$qual->question}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="q_image" class="custom-file-input" value="{{$qual->questionimg}}">
                        <label class="custom-file-label">Upload question image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Marks</label>
                    <input type="text" name="q_mks" class="form-control" value="{{$qual->marks}}">
                </div>

                <div class="form-group">
                    <label>SetId</label>
                    <input type="text" name="sid" class="form-control" value="{{$a}}" readonly>
                </div>
            </div>
            
            
            <div class="card-body">
                <div class="form-group">
                    <label>Option1 Content</label>
                    <input type="text" name="o1_content" class="form-control" value="{{$qual->option1}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o1_image" class="custom-file-input" value="{{$qual->option1img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option2 Content</label>
                    <input type="text" name="o2_content" class="form-control" value="{{$qual->option2}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o2_image" class="custom-file-input" value="{{$qual->option2img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option3 Content</label>
                    <input type="text" name="o3_content" class="form-control" value="{{$qual->option3}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o3_image" class="custom-file-input" value="{{$qual->option3img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option4 Content</label>
                    <input type="text" name="o4_content" class="form-control" value="{{$qual->option4}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o4_image" class="custom-file-input" value="{{$qual->option4img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option5 Content</label>
                    <input type="text" name="o5_content" class="form-control" value="{{$qual->option5}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o5_image" class="custom-file-input" value="{{$qual->option5img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Correct option</label>
                    <input type="text" name="correct" class="form-control" value="{{$qual->correct}}">
                </div>
            </div> 

            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            </div>
        </div>
        </form>
        <form action="{{action('TestsController@display')}}" method="GET">
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="creative" name="section">
        <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endif
<!------------------------------------------ CREATIVE SECTION END ------------------------------------------------------------------------->


<!------------------------------------------ COMPREHENSION SECTION START ------------------------------------------------------------------------->

@if($sect=='comprehension')
    <div class="container">
        <h3>Comprehension Section</h3>
        
        <form action = "{{action('TestsController@comp_update')}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT"/>
         <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="{{$c}}" name="quest_id">
        <input type="hidden" value="qualitative" name="section">
        <div class="card">
            <div class="card-header">
                <div class="form-group">
                    <label>Paragraph</label>
                    <input type="text" name="para" class="form-control" value="{{$qual->para}}">
                </div>

                <div class="form-group">
                    <label>Question No.</label>
                    <input type="text" name="q_number" class="form-control" value="{{$qual->qid}}">
                </div>

                <div class="form-group">
                    <label>Question Content</label>
                    <input type="text" name="q_content" class="form-control" value="{{$qual->question}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="q_image" class="custom-file-input" value="{{$qual->questionimg}}">
                        <label class="custom-file-label">Upload question image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Marks</label>
                    <input type="text" name="q_mks" class="form-control" value="{{$qual->marks}}>
                </div>

                <div class="form-group">
                    <label>SetId</label>
                    <input type="text" name="sid" class="form-control" value="{{$a}}" readonly>
                </div>
            </div>
            
            
            <div class="card-body">
                <div class="form-group">
                    <label>Option1 Content</label>
                    <input type="text" name="o1_content" class="form-control" value="{{$qual->option1}}>
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o1_image" class="custom-file-input" value="{{$qual->option1img}}>
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option2 Content</label>
                    <input type="text" name="o2_content" class="form-control" value="{{$qual->option2}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o2_image" class="custom-file-input" value="{{$qual->option2img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option3 Content</label>
                    <input type="text" name="o3_content" class="form-control" value="{{$qual->option3}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o3_image" class="custom-file-input" value="{{$qual->option3img}}>
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option4 Content</label>
                    <input type="text" name="o4_content" class="form-control" value="{{$qual->option4}}">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="o4_image" class="custom-file-input" value="{{$qual->option4img}}">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Correct option</label>
                    <input type="text" name="correct" class="form-control" value="{{$qual->correct}}">
                </div>
            </div> 
            
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            </div>
        </div>
        </form>
        <form action="{{action('TestsController@display')}}" method="GET">
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="comprehension" name="section">
        <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endif

<!------------------------------------------ COMPREHENSION SECTION END ------------------------------------------------------------------------->
 
</body>
</html>
