
var ibiri = {
  //依比例縮放
  push: function (frame, ctn, rules) {
    var _id = Object.keys(this).length - 1;
    this[_id] = {
      frame: frame,
      ctn: ctn,
      rules: rules//[{ from, to, W, H }]
    };
    $(DOM(frame)).addClass("sp_resize");
    sp_resize(_id);
    window.addEventListener("resize", function () {
      sp_resize(_id);
    }, false);
  }
};
function sp_resize(obj) {
  obj = ibiri[obj];
  //包含scroll(for css media)
  var windowW = window.innerWidth;
  if (windowW > 1920) {
    windowW = 1920;
  }
  //不包含scroll
  var windowW_noScl = document.body.clientWidth;
  if (windowW_noScl > 1920) {
    windowW_noScl = 1920;
  }
  var scalcRate = 1;
  var inScope = -1;
  obj.rules.forEach(function (el, index) {
    if (windowW <= el.from && windowW >= el.to) {
      inScope = index;
    }
  })
  //class active
  if (inScope > -1) {
    var scope_W = obj.rules[inScope].W;
    var scope_H = obj.rules[inScope].H;
    scalcRate = windowW_noScl / scope_W;
    //active
    $(DOM([obj.frame, obj.ctn].toString())).addClass("active");
    //frame
    DOM(obj.frame).style.height = Math.floor(scope_H * scalcRate) + "px";
    //ctn
    $(DOM(obj.ctn)).css({
      "-webkit-transform": "scale(" + scalcRate + ")",
      transform: "scale(" + scalcRate + ")",
      width: scope_W + "px",
      height: scope_H + "px"
    });
  } else {
    //active
    $(DOM([obj.frame, obj.ctn].toString())).removeClass("active");
    //frame
    DOM(obj.frame).style.removeProperty("height");
    //ctn
    ["-webkit-transform", "transform", "width", "height"].forEach(function (property) {
      DOM(obj.ctn).style.removeProperty(property);
    })
  }
}
//fn
function DOM(e) {
  var result = document.querySelectorAll(e);
  if (e.indexOf("#") > -1 && result.length === 1) {
    return result[0];
  }
  else {
    return result;
  }
}
function sto() {
  var w_scrollTop = window.pageYOffset;
  var w_height = window.innerHeight;
  Array.prototype.slice.call(DOM("[sto], ._line, [class^='an_']")).forEach(function (el) {
    var el_offsetTop = Math.floor($(el).offset().top);
    var el_clientHeight = el.clientHeight;
    if (el_offsetTop > w_scrollTop && el_offsetTop < (w_scrollTop + w_height)) {
      if (el_offsetTop < w_height) {
        el.classList.add("active");
      }
      else {
        var posistionRate = Math.floor((el_offsetTop - w_scrollTop) / w_height * 100);
        if (posistionRate > 50) {
          posistionRate = 100 - posistionRate;
        }
        if (posistionRate >= (Number((el.attributes["sto-rate"] || {}).value) || 20)) {
          el.classList.add("active");
        }
      }
    }
    else if ((el_offsetTop + el_clientHeight) < w_scrollTop || el_offsetTop > (w_scrollTop + w_height)) {
      if (el.classList.contains("mo_bg")) {

      }
      else if (el.hasAttribute("sto-loop")) {

      }
      else {
        return false;
      }
      el.classList.remove("active");
    }
  });
}
//a標籤加_blank
Array.prototype.slice.call(DOM("a:not(.nav_item):not(.header_logo)")).forEach(function (el) {
  if (new RegExp(/(\/\w+)+/gm).test(el.getAttribute("href"))) {
    el.target = "_blank";
    el.rel = "noreferrer noopener";
  }
});