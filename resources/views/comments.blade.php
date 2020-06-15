 @extends('layouts.app')
@section('content')
<div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Comments</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container section-padding2">
<div class="container">
	<textarea name="text"></textarea>
</div>
</div>
<script src="{{url("ckeditor/ckeditor.js")}}"></script>
<script>
	CKEDITOR.replace('text');
</script>
@endsection 