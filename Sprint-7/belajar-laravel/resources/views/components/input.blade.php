<div class="form-group">
    <label for="{{$field}}" class="{{$field}}">{{$label}} </label>
    <input type="{{$type}}" class="form-control" id="{{$field}}" name="{{$field}}"  placeholder="{{$placeholder ?? ''}}" 
    
    @isset($value)
    value="{{old($field) ? old($field) : $value }}"
    @else
    value="{{old($field)}}"
    @endisset 
    >
</div>
@error($field)
<div class="alert alert-danger">{{ $message }}</div>
@enderror