{{--{{ dd($list) }}--}}
@foreach ($list as $key => $item)
   - {{ \Modules\Staff\Category\Models\Category::find($key)->name }}
  <br>
  @while (is_array($item))
    @php
      $item = extract($key);
      dd($item);
    @endphp
    {{ \Modules\Staff\Category\Models\Category::find($item)->name }}
  @endwhile
  @if (!is_array($item))
    {{ 'ss ' . dd($item) }}
  @endif
@endforeach
