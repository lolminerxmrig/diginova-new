@if(is_array($fullCategoryList) && count($fullCategoryList))
     {{ $fullCategoryList[0] }}
     $fullCategoryList = array_shift($fullCategoryList);
     {{ dd($fullCategoryList) }}
     {{--  @include('front::layouts.category-menu', ['fullCategoryList' => $fullCategoryList])  --}}
@endif
