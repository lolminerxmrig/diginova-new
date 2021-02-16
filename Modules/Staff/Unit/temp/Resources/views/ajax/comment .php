@if(count($units) > 0)
  <tbody id="tbody" class="ui-sortable">
  @foreach($units->unique('name') as $unit)
    <tr name="row new-row" class="c-ui-table__row c-ui-table__row--body c-join__table-row row">

      <td class="c-ui-table__cell" style="padding-right: 0px; padding-left: 23px;">
        <div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer">
          <span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span>
          <span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span>
          <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down"></span>
        </div>
      </td>

      <td class="c-ui-table__cell unit_name" style="min-width: 90px">
        {{ $unit->name }}
        {{--                                <input type="text" name="unit_name" value="" class="c-content-input__origin js-attribute-old-value attr_name">--}}
      </td>

      <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15 td-select unit_type" style="text-align: center !important;padding: 25px;">
        {{ ($unit->type == 1)? 'تک فیلد' : 'چند فیلد' }}
        {{--                                <select class="c-ui-select c-ui-select--common c-ui-select--small select2-hidden-accessible" name="unit_type" tabindex="-1" aria-hidden="true">--}}
        {{--                                    <option value="1">تک فیلد</option>--}}
        {{--                                    <option value="2">چند فیلد</option>--}}
        {{--                                </select>--}}
      </td>
      <td class="c-ui-table__cell manage-fields fiels-list">

        @foreach($units->where('name', $unit->name) as $u)
          {{ $u->value }} &nbsp; &nbsp;
        @endforeach

        {{--                                <a class="c-ui-btn c-ui-btn--next mr-a manage-btn" style="width: 189px !important; min-width: 120px !important;">مدیریت فیلد ها</a>--}}
      </td>
      <td class="c-ui-table__cell main-remove-btn">
        <a type="button" class="c-content-categories__search-reset remove-row-btn" style="min-height: 34px !important;height: 34px;width: 34px;margin: auto;"> </a>
      </td>
    </tr>
  @endforeach
  </tbody>
@endif
