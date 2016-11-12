@if(! Auth::guest())
    <hr />
    <div>
        <form class="form-horizontal" role="form" method="POST" action="{{ action('TopicController@comment', $topic->id) }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <label for="body" class="col-md-4 control-label">Comment</label>

                <div class="col-md-6">
                    <textarea id="body" type="body" class="form-control" name="body" required>{{ old('body') }}</textarea>
                    @if ($errors->has('body'))
                        <span class="help-block">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Post
                    </button>
                </div>
            </div>
        </form>
    </div>
@endif