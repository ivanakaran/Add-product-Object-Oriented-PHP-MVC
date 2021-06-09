$(document).on('change', '#productType', function () {
  let target = $(this).data('target');
  let show = $("option:selected", this).data('show');
  $(target).children().addClass('hide');
  $(show).removeClass('hide');
});
$(document).ready(function () {
  $('#productType').trigger('change');

  // Assign values to hidden input
  $('#size').keyup(function () {
    let sizeval = $("#typev").val("Size: " + $("#size").val() + " MB");
  })

  $('#weight').keyup(function () {
    let weightval = $("#typev").val("Weight: " + $("#weight").val() + " KG");
  })

  $('#height, #width , #length').keyup(function () {
    let furnitureval = $("#typev").val("Dimesnion: " + $("#height").val() + "x" + $("#width").val() + "x" + $("#length").val());
  })



});