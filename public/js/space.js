DOM("#sp_ctn2").innerHTML = DOM("#sp_ctn1").innerHTML;
ibiri.push("#room_ctn1", "#room_ctn2", [
    { from: 1300, to: 769, W: 1300, H: 1612 },
    { from: 768, to: 577, W: 768, H: 2807 },
    { from: 576, to: 0, W: 768, H: 2918 },
]);
ibiri.push("#info_frame1", "#info_ctn1", [
    { from: 1024, to: 768, W: 1024, H: 1854 },
    { from: 540, to: 0, W: 540, H: 3653 }
]);
ibiri.push("#info_frame2", "#info_ctn2", [
    { from: 1024, to: 768, W: 1024, H: 1404 },
    { from: 540, to: 0, W: 540, H: 2993 }
]);
ibiri.push("#focus_ctn1", "#focus_ctn2", [
    { from: 1200, to: 768, W: 1200, H: 1470 },
    { from: 540, to: 0, W: 540, H: 2408 },
]);

var SPACE = $("#sp_ctn2");
SPACE.owlCarousel(owlInit);
