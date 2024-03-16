<div class="form-group">
    <label for="{{$field}}" class="form-label">{{$label}}</label>
    <textarea class="form-control" id="{{$field}}" rows="3" name="{{$field}}">@isset($value){{old($field)?old($field):$value}}
        @else{{old($field)}}
        @endisset
    </textarea>

    @error($field)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>