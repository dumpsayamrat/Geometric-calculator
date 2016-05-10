@extends('layout')
@section('content')
<div class="row index1 ">
        <div class="col-md-12 center">
          <h2>พื้นที่สี่เหลี่ยมด้านไม่เท่า</h2>
          <img class="img img-responsive img-thumbnail" src="picture/9.png">
          <p><h3>สูตรในการคำนวณ : (ความห่วงใย * ความคิดถึง)/ สแควรูทแห่งความคำนึง </h3></p>
          <div class="row">
          	<div class="col-md-offset-3 col-md-6">
          		<form id="form" role = "form" method="POST">

				   <div class = "form-group">
				      <label for = "v1">ความห่วงใย</label>
				      <input type = "number" class = "form-control" name ="v1" id = "v1" required >
				   </div>
				     <div class = "form-group">
				      <label for = "v2">ความคิดถึง</label>
				      <input type = "number" class = "form-control" name ="v2" id = "v2" required >
				   </div>
				    <div class = "form-group">
				      <label for = "v3">ความคำนึง</label>
				      <input type = "number" class = "form-control" name ="v3" id = "v3" required >
				   </div>
				   
				   <button type = "submit" class = "btn btn-info btnbold" >คำนวน</button>
           <a href="/" class = "btn btn-danger btnbold" >กลับหน้าแรก</a>
				</form>
				<div class = "alert alert-success result" id ="result"></div>
				<span class = "small" id ="trueresult"></span>
          	</div>
          </div>

        </div>

        </div>

@endsection

@section('javascript')
<script type="text/javascript">
	// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "ready!" );
    $('#form').on('submit', function(e){
    	e.preventDefault();
    	var v1 = $('#v1').val();
    	var v2 = $('#v2').val();
    	var v3 = $('#v3').val();
    	var result = (v1 * v2)/Math.sqrt(v3);
    	$('#result').html("เท่ากับ 3 คำซึ้ง คือ \"ฉันรักเธอ\" ");
    	$('#result').css('visibility','visible');
    	$('#trueresult').html("("+result+") ");
    	$('#trueresult').css('visibility','visible');
    });
});
</script>
@endsection