@extends('layouts.app')

@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
  }); 
</script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a New Thread</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ url('post') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="post_title">Title:</label>
                                <input type="text" class="form-control" id="post_title" name="post_title"
                                       value="{{ old('post_title') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="slug">Slug:</label>
                                <input name="slug" id="slug" class="form-control" required>{{ old('slug') }}</input>
                            </div>

                            <div class="form-group">
                                <label for="post_body">Post Content:</label>
                                <textarea name="post_body" id="post_body" class="form-control"
                                          rows="8">{{ old('post_body') }}</textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Publish</button>
                            </div>

                            @if (count($errors))
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
