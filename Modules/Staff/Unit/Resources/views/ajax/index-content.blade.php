@if(count($units) > 0)
  <tbody id="tbody" class="ui-sortable">
  @foreach($units->unique('name') as $unit)
    <tr name="row new-row" id="item-{{$unit->id}}" class="c-ui-table__row c-ui-table__row--body c-join__table-row row">

      <td class="c-ui-table__cell" style="padding-right: 0px; padding-left: 23px;">
        <div class="c-content-upload__drag-handler c-content-upload__drag-handler--outer">
          <span class="c-content-upload__drag-handler c-content-upload__drag-handler--up js-sort-up"></span>
          <span class="c-content-upload__drag-handler c-content-upload__drag-handler--bg"></span>
          <span class="c-content-upload__drag-handler c-content-upload__drag-handler--down js-sort-down"></span>
        </div>
      </td>

      <td class="c-ui-table__cell unit_name" style="min-width: 90px">
        {{ $unit->name }}
      </td>

      <td class="c-ui-table__cell c-ui-table__cell-desc c-ui--pt-15 c-ui--pb-15 td-select unit_type" style="text-align: center !important;padding: 25px;">
        {{ ($unit->type == 1)? 'تک فیلد' : 'چند فیلد' }}
      </td>

      <td class="c-ui-table__cell manage-fields fiels-list">
        @foreach($units->where('name', $unit->name) as $u)
          {{ $u->value }} &nbsp; &nbsp;
        @endforeach
      </td>

      <td class="c-ui-table__cell">
        <div class="c-promo__actions">
          <button class="c-join__btn c-join__btn--icon-right c-join__btn--icon-edit
                          c-join__btn--secondary-greenish edit-btn" data-name="{{ $unit->name }}">ویرایش</button>
          <button class="c-join__btn c-join__btn--icon-right c-join__btn--icon-delete
                          c-join__btn--primary js-remove-plp js-remove-product-list remove-row-btn" data-name="{{ $unit->name }}">حذف
          </button>
        </div>
      </td>


    </tr>
  @endforeach
  </tbody>
@endif


<script>
  $('#tbody').sortable({
    handle: '.c-content-upload__drag-handler',
    update: function (event, ui) {
      var data = $("#tbody").sortable('serialize');
      $.ajax({
        data: data,
        type: 'post',
        url: '{{route('staff.units.indexChangePosition')}}'
      });
    }
  });
</script>
