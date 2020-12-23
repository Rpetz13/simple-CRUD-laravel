<script>
@if (session('success'))
  $.notify({
    // options
    message: "{{ session('success') }}"
  },{
    // settings
    type: 'success',
    z_index: 9999,
  });
@endif
</script>