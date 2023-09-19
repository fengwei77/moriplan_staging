//banner
if (DOM(".mo_banner .owl-carousel").length) {
  var mo_banner = $(DOM(".mo_banner .owl-carousel"));
  function owl_to(index) {
    mo_banner.trigger("to.owl.carousel", index);
  }
  if (DOM(".mo_dot").length) {
    var _dots = document.createElement("div");
    _dots.className = "_dots";
    var _cl = DOM(".mo_banner .card").length;
    for (var i = 0; i < _cl; i++) {
      var _dot = document.createElement("div");
      _dot.className = "_dot";
      _dot.style.width = "calc( (100% - " + (_cl * 20 + 1) + "px) / " + _cl + " )";
      _dot.setAttribute("onclick", "owl_to(" + i + ")");
      _dots.appendChild(_dot);
    }
    DOM(".mo_dot")[0].appendChild(_dots);
  }
  function dot_width() {
    var windowW = window.innerWidth;
    var _margin = 20;
    if (windowW > 576) {//up_sm
      _margin = 20;
    }
    else {
      _margin = 10;
    }
    Array.prototype.slice.call(DOM(".mo_dot ._dot")).forEach(function (dot) {
      dot.style.width = "calc( (100% - " + (_cl * _margin + 1) + "px) / " + _cl + " )";
    })
  }
  dot_width();
  window.addEventListener("resize", dot_width, false);
  mo_banner.owlCarousel({
    items: 1,
    loop: true,
    dotsContainer: ".mo_dot ._dots"
  });
}
Array.prototype.slice.call(DOM(".mo_title")).forEach(function (el) {
  var _line = document.createElement("div");
  _line.className = "_line";
  el.appendChild(_line);
});
window.onload = function () {
  //sto
  sto();
  window.addEventListener("scroll", sto, false);
}