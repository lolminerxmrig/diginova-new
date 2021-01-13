<option class="appended-options" value="0" {{ ($cat->parent_id == 0)? 'selected' : '' }}>دسته اصلی</option>
@foreach($categories as $category)
    @if ($category->id !== $cat->id)
        <option  class="appended-options" value="{{ $category->id }}" {{ ($category->id == $cat->parent_id)? 'selected' : '' }}>{{ $category->name }}</option>
    @endif
@endforeach
