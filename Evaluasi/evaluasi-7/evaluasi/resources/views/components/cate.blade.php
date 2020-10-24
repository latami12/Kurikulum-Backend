

<div class="form-group">
    <label for="{{$field}}">{{$label}}</label>
    <select class="form-control" type="{{$type}}" id="{{$field}}" name="{{$field}}" id="{{$field}}">
        <option value="Biografi">Biografi</option>
        <option value="Champions">Champions</option>
        <option value="Timnas">Timnas</option>
        <option value="Premier League">Premier League</option>
        <option value="La Liga">La Liga</option>
        <option value="Seria A">Seria A</option>
        <option value="Bundesliga">Bundesliga</option>
        <option value="Ligue 1">Ligue 1</option>
        <option value="Eredivise">Eredivise</option>
    </select>
</div>
@isset($value)
value="{{old($field) ? old($field) : $value }}"
@else
{{old($field)}}
@endisset

@error($field)
<div class="alert alert-danger">{{ $message }}</div>
@enderror

