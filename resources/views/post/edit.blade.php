@extends('post.post')

@section('content')
<form action="{{ Route('post.update', ['id' =>$post->id]) }}" method="POST" enctype="multipart/form-data">

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
                    value="{{ $post->title }}"
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
                    value="{{ old('content') }}">{{ $post->content }}</textarea>
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
                            value="{{$category->id}}"
                            @foreach ($post->category as $postcat)
                                {{$postcat->id == $category->id ? 'checked' : '' }}
                            @endforeach>
                        <label for="{{$category->name}}">
                            {{$category->name}}
                        </label>
                      </div>
                @endforeach
            </div>
          </div>
            @error('categories')
                <span class="error invalid-feedback" style="font-size: 17px;font-weight: 600; display: block;">
                    {{ $message }}
                </span>
            @enderror
        </div>




            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Uplode Image</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color: #000;"><i class="fas fa-minus"></i>
                        </button>
                  </div>
                </div>
                <div class="card-body">
                    <!-- checkbox -->
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
                            <div class="form-group" style="width: 288px; height: 230px">
                                    @foreach ($post->photo as $img)
                                    <img src="{{$img->photo_path}}" alt="{{ $img->photo_path }}" style="width: 100%; height: 100%" id="image_perview" class="img-thumbnail">
                                    @endforeach
                            </div>
                            @error('photo')
                                <span class="error invalid-feedback" style="font-size: 17px;font-weight: 600; display: block;">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div><!-- End Images Uplode -->
            <button class="btn btn-primary" type="submit">Update</button>
          </div>

    </div>


</form>
@endsection

@push('scripts')

<script type="text/javascript">
$(document).ready(function() {

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
