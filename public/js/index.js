ibiri.push("#new_frame", "#new_ctn", [
  { from: 1024, to: 768, W: 1024, H: 1069 }
]);
$(document).ready(function () {
  var qs = location.search.replace(/^\?/, "");
  if(qs ==="new"){
    moveTo(DOM("#new"));
  }
})
