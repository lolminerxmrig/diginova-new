@foreach($product->attributes as $attribute)
    @foreach($attribute->values as $value)
        @php $array[] = $attribute->pivot->value_id;  @endphp
    @endforeach
@endforeach

@foreach($product->attributes->unique() as $attribute)
    @foreach($attribute->values as $value)
        @php $array[] = $attribute->pivot->value_id;  @endphp
    @endforeach
    Attribute Name: {{ $attribute->name }}
    <select multiple>
        @foreach($attribute->values as $value)
        <option id="{{ $value->id }}" {{ in_array($value->id, $array) ? 'selected' :  '' }} >{{ $value->id }}</option>
        @endforeach
    </select>
@endforeach

