<div class="form-group">
    <label for="{{$field}}">Subject</label>
    <textarea class="form-control" name="{{$field}}" id="{{$field}}" rows="3" placeholder="{{$placeholder ?? ''}}">
    @isset($value){{old($field) ? old($field) : $value }}
    @else {{old($field)}}
    @endisset 
    </textarea>
</div>
@error($field)
<div class="alert alert-danger">{{ $message }}</div>
@enderror