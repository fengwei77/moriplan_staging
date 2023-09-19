var header_H = 0;
var header_H_active = 0;
var header_H_total = 0;
function getHeader_H() {
  var windowW = window.innerWidth;
  if (windowW > 768) {//lg
    header_H = 120;
    header_H_active = 40;
  }
  else if (windowW > 576) {//md
    header_H = 90;
    header_H_active = 30;
  }
  else {//sm
    header_H = 60;
    header_H_active = 10;
  }
}
getHeader_H();
window.addEventListener("resize", getHeader_H, false);
//header
function scroll_header() {
  var w_scrollTop = window.pageYOffset;
  if (w_scrollTop > 10) {
    $(DOM(".header, .header_fill")).addClass("active");
    header_H_total = header_H - header_H_active;
  }
  else {
    $(DOM(".header, .header_fill")).removeClass("active");
    header_H_total = header_H;
  }
}
scroll_header();
window.addEventListener("scroll", scroll_header, false);
//選單
var navObj = {
  _active: false,
  _transform: false
}
Object.defineProperty(navObj, "active", {
  get: function () { return this._active },
  set: function (val) {
    var _this = this;
    if (this._transform || this._active === val) {
      return false;
    }
    this._transform = true;
    this._active = val;
    if (val) {
      $(DOM(".nav_frame, .nav_ctn, .nav_btn")).addClass("active");
      Array.prototype.slice.call(DOM("html, body")).forEach(function (el) {
        el.style["overflow-y"] = "hidden";
      })
    }
    else {
      $(DOM(".nav_frame, .nav_ctn, .nav_btn")).removeClass("active");
      Array.prototype.slice.call(DOM("html, body")).forEach(function (el) {
        el.style.removeProperty("overflow-y");
      })
    }
    setTimeout(function () {
      _this._transform = false;
    }, 500);
  }
})
function moveTo(e, close) {
  $(DOM("html,body")).stop().animate({
    scrollTop: $(e).offset().top - header_H_total
  }, 500);
  if (close) {
    navObj.active = false;
  }
}