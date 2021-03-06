@extends('layout')
@section('content')
<div class="row index1 ">
        <div class="col-md-12 center">
          <h2>พื้นที่วงกลม</h2>
          <img class="img img-responsive img-thumbnail" src="picture/2.png">
          <p><h3>สูตรในการคำนวณ : π * R^2 </h3></p>
          <div class="row">
          	<div class="col-md-offset-3 col-md-6">
          		<form id="form" role = "form" method="POST">

				   <div class = "form-group">
				      <label for = "v1">รัศมี</label>
				      <input type = "number" class = "form-control" name ="v1" id = "v1" required min="0" step="0.001">
				   </div>
				   
				  <button type = "submit" class = "btn btn-info btnbold" >คำนวน</button>
           <a href="/" class = "btn btn-danger btnbold" >กลับหน้าแรก</a>
				</form>
				<div class = "alert alert-success result" id ="result"></div>
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
    	
    	var result = 3.14 * v1 * v1 ;
    	$('#result').html('ผลลัพท์ : '+result+' ตารางหน่วย');
    	$('#result').css('visibility','visible');
    });
});
</script>
@endsection