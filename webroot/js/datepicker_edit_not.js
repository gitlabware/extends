 $('#datetimepicker1, #datetimepicker2').datetimepicker({
      pickTime: false,
      format: 'YYYY-MM-DD'
  });

  $('#multiselect2').multiselect({
      includeSelectAllOption: true
  });

  // Init Select2 - Basic Multiple
  $(".select2-multiple").select2({
      placeholder: "Seleccione cliente",
      allowClear: true
  });