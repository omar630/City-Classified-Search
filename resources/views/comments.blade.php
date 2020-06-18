 @extends('layouts.app')
@section('content')

<div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Post Your Reviews</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-padding4" style="max-width: 80%;margin: auto;">
         <div class="select-form" >
                                <div class="select-itms" style="margin-right: 120px">

                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<select name="owner" class="owner" style="margin: inherit;" >
    <option value="">Select an City</option>
    <option value="1">Hyderabad</option>
    <option value="2">Mumbai</option>
    <option value="3">Delhi</option>
</select> 
</div>
<div style="float: left;margin: auto;">

<select name="co-owner " class="co-owner" >
    <option value="">Select an Catagory</option>
    <option value="1">Bill</option>
    <option value="2">Mark</option>
    <option value="3">Larry</option>
</select>
  </div>
<div style="float: left;margin: auto;">
<form action="upload.php" method="post" enctype="multipart/form-data"> Select image to upload:
	<br>
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">
</form>
</div>
                          
                        </div>
<div class="section-padding2">
<div class="" style="max-width: 80%;margin: auto;">
	<textarea name="text"></textarea>
</div>
<div class="section-padding4">
<button type="submit" class="genric-btn primary circle" style="float: right;">
                                    {{ __('Submit') }}
                                </button>
</div>
</div>
@endsection 
@section('js')
	<script src="{{url("ckeditor/ckeditor.js")}}"></script>
	
	<script>
		CKEDITOR.replace('text');
	</script>
	<script>
		$('.owner').change(function() {
  $('.co-owner').prop('disabled', $(this).val().trim() == '');
}).change();
	</script>
	@endsection

