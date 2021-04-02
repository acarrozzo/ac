
function(e, t, n) {
  "use strict";
  var r = n(5),
    i = n(128);
  r.define("navbar", e.exports = function(e, t) {
    var n, o, a, c, u = {},
      s = e.tram,
      l = e(window),
      d = e(document),
      f = r.env(),
      p = '<div class="w-nav-overlay" data-wf-ignore />',
      h = ".w-nav",
      M = "w--open",
      m = "w--nav-menu-open",
      b = "w--nav-link-open",
      g = i.triggers,
      A = e();

    function v() {
      r.resize.off(_)
    }

    function _() {
      o.each(S)
    }

    function y(n, i) {
      var o = e(i),
        u = e.data(i, h);
      u || (u = e.data(i, h, {
        open: !1,
        el: o,
        config: {}
      })), u.menu = o.find(".w-nav-menu"), u.links = u.menu.find(".w-nav-link"), u.dropdowns = u.menu.find(".w-dropdown"), u.button = o.find(".w-nav-button"), u.container = o.find(".w-container"), u.outside = function(t) {
        t.outside && d.off("tap" + h, t.outside);
        return function(n) {
          var r = e(n.target);
          c && r.closest(".w-editor-bem-EditorOverlay").length || L(t, r)
        }
      }(u), u.el.off(h), u.button.off(h), u.menu.off(h), T(u), a ? (O(u), u.el.on("setting" + h, function(e) {
        return function(n, r) {
          r = r || {};
          var i = l.width();
          T(e), !0 === r.open && I(e, !0), !1 === r.open && R(e, !0), e.open && t.defer(function() {
            i !== l.width() && N(e)
          })
        }
      }(u))) : (! function(t) {
        if (t.overlay) return;
        t.overlay = e(p).appendTo(t.el), t.parent = t.menu.parent(), R(t, !0)
      }(u), u.button.on("tap" + h, function(e) {
        return t.debounce(function() {
          e.open ? R(e) : I(e)
        })
      }(u)), u.menu.on("click" + h, "a", function(t) {
        return function(n) {
          var i = e(this),
            o = i.attr("href");
          r.validClick(n.currentTarget) ? o && 0 === o.indexOf("#") && t.open && R(t) : n.preventDefault()
        }
      }(u))), S(n, i)
    }

    function E(t, n) {
      var r = e.data(n, h);
      r && (O(r), e.removeData(n, h))
    }

    function O(e) {
      e.overlay && (R(e, !0), e.overlay.remove(), e.overlay = null)
    }

    function T(e) {
      var n = {},
        r = e.config || {},
        i = n.animation = e.el.attr("data-animation") || "default";
      n.animOver = /^over/.test(i), n.animDirect = /left$/.test(i) ? -1 : 1, r.animation !== i && e.open && t.defer(N, e), n.easing = e.el.attr("data-easing") || "ease", n.easing2 = e.el.attr("data-easing2") || "ease";
      var o = e.el.attr("data-duration");
      n.duration = null != o ? Number(o) : 400, n.docHeight = e.el.attr("data-doc-height"), e.config = n
    }

    function N(e) {
      e.open && (R(e, !0), I(e, !0))
    }
    u.ready = u.design = u.preview = function() {
      if (a = f && r.env("design"), c = r.env("editor"), n = e(document.body), !(o = d.find(h)).length) return;
      o.each(y), v(), r.resize.on(_)
    }, u.destroy = function() {
      A = e(), v(), o && o.length && o.each(E)
    };
    var L = t.debounce(function(e, t) {
      if (e.open) {
        var n = t.closest(".w-nav-menu");
        e.menu.is(n) || R(e)
      }
    });

    function S(t, n) {
      var r = e.data(n, h),
        i = r.collapsed = "none" !== r.button.css("display");
      if (!r.open || i || a || R(r, !0), r.container.length) {
        var o = function(t) {
          var n = t.container.css(z);
          "none" === n && (n = "");
          return function(t, r) {
            (r = e(r)).css(z, ""), "none" === r.css(z) && r.css(z, n)
          }
        }(r);
        r.links.each(o), r.dropdowns.each(o)
      }
      r.open && C(r)
    }
    var z = "max-width";

    function I(e, t) {
      if (!e.open) {
        e.open = !0, e.menu.addClass(m), e.links.addClass(b), e.button.addClass(M);
        var n = e.config;
        "none" !== n.animation && s.support.transform || (t = !0);
        var i = C(e),
          o = e.menu.outerHeight(!0),
          c = e.menu.outerWidth(!0),
          u = e.el.height(),
          l = e.el[0];
        if (S(0, l), g.intro(0, l), r.redraw.up(), a || d.on("tap" + h, e.outside), !t) {
          var f = "transform " + n.duration + "ms " + n.easing;
          if (e.overlay && (A = e.menu.prev(), e.overlay.show().append(e.menu)), n.animOver) return s(e.menu).add(f).set({
            x: n.animDirect * c,
            height: i
          }).start({
            x: 0
          }), void(e.overlay && e.overlay.width(c));
          var p = u + o;
          s(e.menu).add(f).set({
            y: -p
          }).start({
            y: 0
          })
        }
      }
    }

    function C(e) {
      var t = e.config,
        r = t.docHeight ? d.height() : n.height();
      return t.animOver ? e.menu.height(r) : "fixed" !== e.el.css("position") && (r -= e.el.height()), e.overlay && e.overlay.height(r), r
    }

    function R(e, t) {
      if (e.open) {
        e.open = !1, e.button.removeClass(M);
        var n = e.config;
        if (("none" === n.animation || !s.support.transform || n.duration <= 0) && (t = !0), g.outro(0, e.el[0]), d.off("tap" + h, e.outside), t) return s(e.menu).stop(), void u();
        var r = "transform " + n.duration + "ms " + n.easing2,
          i = e.menu.outerHeight(!0),
          o = e.menu.outerWidth(!0),
          a = e.el.height();
        if (n.animOver) s(e.menu).add(r).start({
          x: o * n.animDirect
        }).then(u);
        else {
          var c = a + i;
          s(e.menu).add(r).start({
            y: -c
          }).then(u)
        }
      }

      function u() {
        e.menu.height(""), s(e.menu).set({
          x: 0,
          y: 0
        }), e.menu.removeClass(m), e.links.removeClass(b), e.overlay && e.overlay.children().length && (A.length ? e.menu.insertAfter(A) : e.menu.prependTo(e.parent), e.overlay.attr("style", "").hide()), e.el.triggerHandler("w-close")
      }
    }
    return u
  })
});

Webflow.require('commerce') && Webflow.require('commerce').init({
  siteId: "5d9c8fcaca1c6c013b521b95",
  apiUrl: "https://render.webflow.com"
});
