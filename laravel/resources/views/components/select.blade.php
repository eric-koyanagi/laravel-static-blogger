<select name="{{ $name }}">
    <option value="">(none)</option>
    @foreach ($options as $option)
        <option value="{{$option->id}}" {{ ($option->id == $selected) ? "selected" : ""}}>{{$option->title}}</option>
    @endforeach
</select>
