@extends('post.post')

@section('content')
<form action="{{ Route('post.store') }}" method="POST" enctype="multipart/form-data">

    {{csrf_field()}}
    {{method_field('post')}}

    <div class="form-group">
        <div class="col-md-8" style="display: inline-block;">


            <!-- Title -->
            <div class="form-group">
                <label for="title">title</label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    placeholder="Add Title"
                    value="{{ old('title') }}"
                    required>
                @error('title')
                    <span class="error invalid-feedback" style="font-size: 17px;font-weight: 600; display: block;">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label>content</label>
                <textarea
                    class="form-control"
                    name="content"
                    id="summernote"
                    placeholder="Add Content"
                    value="{{ old('content') }}"></textarea>
                @error('content')
                    <span class="error invalid-feedback" style="font-size: 17px;font-weight: 600; display: block;">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="form-group clearfix">
                @foreach ($categories as $category)
                      <div class="icheck-primary d-inline">
                        <input
                            type="checkbox"
                            name="categories[]"
                            id="{{$category->name}}"
                            value="{{$category->id}}">
                        <label for="{{$category->name}}">
                            {{$category->name}}
                        </label>
                      </div>
                @endforeach
                @error('categories')
                    <span class="error invalid-feedback" style="font-size: 17px;font-weight: 600; display: block;">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="form-group clearfix">
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input
                                type="file"
                                name="photo"
                                id="images"
                                class="img-form image_prev custom-file-input">
                            <label
                                class="custom-file-label"
                                for="images">Choose Image
                            </label>
                        </div>
                    </div>
                    <small class="text-muted">
                          Must Be Width 1024px or More Than This Width
                    </small>
                    {{-- <div class="form-group" style="width: 288px; height: 230px">
                        <img src="{{asset('storage/images/post/post_imag_default.jpg')}}" alt="" style="width: 100%; height: 100%" id="image_perview" class="img-thumbnail">
                    </div> --}}
                    @error('photo')
                        <span class="error invalid-feedback" style="font-size: 17px;font-weight: 600; display: block;">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
          </div>
    </div>

    <button class="btn btn-primary" type="submit">Send</button>
</form>
@endsection
{{-- Push Some Style --}}
@push('styles')
<link rel="stylesheet" href="{{ asset('back-end/dist/plugins/summernote/summernote-bs4.min.css') }}">
<link rel="stylesheet" href="{{ asset('back-end/dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('back-end/dist/plugins/select2/css/select2.min.css') }}">

<style type="text/css">
.custom-file-input:lang(en)~.custom-file-label::after {
    content: "Uplode" !important;
}
span.imgCheckbox0 {
    width: 8rem;
    height: 8rem;
    overflow: hidden;
}
span.imgCheckbox0 img {
    position: relative;
    width: 100%;
    height: 100%;
}

.select2-container .select2-selection--single {
    height: 41px;
}
</style>
@endpush

{{-- Push Some Script --}}
@push('scripts')
{{-- Summernote Plugin --}}
<script src="{{ asset('back-end/dist/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('back-end/dist/plugins/imgcheck.js') }}"></script>

<script src="{{ asset('back-end/dist/plugins/select2/js/select2.full.min.js') }}"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#summernote').summernote({
        placeholder: 'Add Your Content Here',
        height: 375,
    }); // End Summernote

    $("#images").change(function() {

        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#image_perview').attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        }

    });// End User Post Image preview


    $(".js-example-matcher-start").select2({});

    $("img.checkable").imgCheckbox({
        "radio": true,
        "styles": {
            "span.imgCheckbox.imgChked img": {
                // It's important to note that overriding the "filter" property will remove grayscaling
                "filter": "blur(5px)",

                // This is just css: remember compatibility
                "-webkit-filter": "blur(5px)",

                // Let's change the amount of scaling from the default of "0.8"
                "transform": "scale(0.9)"
            }
        }
    });

});
</script>
@endpush

