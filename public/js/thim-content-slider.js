! function (t) {
    t.thimContentSlider = function (e, i) {
        function n(e) {
            var i = t('<li><div class="slide-content" style="margin: ' + g("itemPadding") + 'px;"><img src="' + e.image + '" alt="' + e.alt + '" /></div></li>');
            return i
        }

        function s() {
            var e = typeof q.options.items,
                i = null;
            "string" == e ? i = t(q.options.items) : "object" == e && (i = t(q.options.items).children()), i && (q.options.items = [], i.each(function () {
                var e = t(this),
                    i = e.find("img" + q.options.imageSelector + ":first"),
                    n = i.parent();
                q.options.items.push({
                    image: i.attr("src"),
                    alt: i.attr("alt"),
                    url: n.is("a") ? n.attr("href") : "",
                    content: e.find(q.options.contentSelector)
                })
            }))
        }

        function o() {
            var e = t('<div class="slides-wrapper"><ul class="scrollable"></ul></div><a href="prev" class="control-nav prev"></a><a href="next" class="control-nav next"></a><div class="slides-content"></div>'),
                i = q.options.items;
            q.$el.html(e), q.$slidesWrapper = q.$el.find(".slides-wrapper"), q.$scrollable = q.$el.find(".scrollable").css({
                marginTop: -g("itemPadding"),
                marginBottom: -g("itemPadding")
            }), q.$slideContent = q.$el.find(".slides-content");
            for (var s = 0, o = i.length; o > s; s++) {
                var d = n({
                        image: i[s].image,
                        alt: i[s].alt
                    }),
                    c = t('<div class="slide-content" />').append(i[s].content);
                q.$scrollable.append(d), q.$slideContent.append(c)
            }
            q.$items = q.$scrollable.children(), R = g("itemsVisible") <= g("items").length ? g("itemsVisible") : g("items").length, T = Math.floor(R / 2), k = T, D = q.$items.length, B = k, q.$el.on("click", ".control-nav", h).on("click", ".scrollable > li", h), q.options.mouseWheel && q.$el.on("mousewheel", function (t, e, i, n) {
                t.preventDefault(), -1 != e ? p() : v()
            }), q.options.autoPlay && b(), q.options.pauseOnHover && q.$el.hover(function () {
                w()
            }, function () {
                C()
            }), q.$scrollable.bind(E.start, a).bind(E.move, l).bind(E.end, r), m(), q.$slideContent.children().eq(k).css({
                opacity: 1
            }).addClass("current").siblings().removeClass("current")
        }

        function a() {}

        function l() {}

        function r() {}

        function m() {
            var t = q.$el.find(".control-nav");
            q.$el.hover(function () {
                q.$el.addClass("hover")
            }, function () {
                q.$el.removeClass("hover")
            }), q.$nav = t
        }

        function d() {
            var t = q.$nav.height(),
                e = {
                    top: (O - 2 * g("itemPadding")) / 2,
                    marginTop: -t / 2
                };
            "behind" == g("controlNav"), q.$nav.css(e)
        }

        function c(t) {
            if (t.hasClass("mid-item")) return 0;
            var e = q.$items.index(t),
                i = q.$items.index(q.$items.filter(".mid-item")),
                n = e - i;
            return n
        }

        function h(e) {
            e.preventDefault();
            var i = t(this).attr("href");
            switch (i) {
                case "prev":
                    p();
                    break;
                case "next":
                    v();
                    break;
                default:
                    var n = t(e.target);
                    n.is("li") || (n = n.closest("li")), u(c(n))
            }
        }

        function f(e, i) {
            "prev" == e ? q.$items.last().remove() : q.$items.first().remove(), $(), q.$items.eq(T).addClass("mid-item").siblings().removeClass("mid-item"), J && q.$slideContent.children().eq(B).stop().show().animate({
                opacity: 1
            }).siblings().hide(), z = !1, C(), q.$el.hasClass("hover"), t.isFunction(i) && i.apply(q)
        }

        function u(t) {
            if (0 == t) return G = "", void(J = !0);
            J = 1 == Math.abs(t) ? !0 : !1, G = 250;
            var e = 0 > t ? p : v;
            e.call(this, function () {
                u(0 > t ? t + 1 : t - 1)
            })
        }

        function p(t) {
            if (!z) {
                w(), z = !0, q.$slideContent.children().eq(B).stop().animate({
                    opacity: 0
                }), B--, 0 > B && (B = D - 1);
                var e = (g("itemPadding"), parseInt((O - N) / 2)),
                    i = 0,
                    n = q.$items.length,
                    s = 0,
                    o = function () {
                        s++, s == n && f("prev", t)
                    },
                    a = q.$items.last().clone();
                a.insertBefore(q.$items.first()).css({
                    left: parseInt(q.$items.first().css("left")) - N
                }), $(), q.$el.find(".mid-item").removeClass("mid-item"), q.$items.eq(k + 1).addClass("mid-item");
                for (var l = i; n >= l; l++) {
                    var r = {
                        left: A - (k - l) * N,
                        width: N,
                        top: e
                    };
                    k > l ? r.left -= H : l == k ? (r.left = A, r.top = 0, r.width = O) : l == k + 1 ? (r.left = A + O + H, r.top = e, r.width = N) : r.left += O - N + H, q.$items.eq(l).stop().show().animate(r, G, o)
                }
            }
        }

        function v(t) {
            if (!z) {
                w(), z = !0, q.$slideContent.children().eq(B).stop().animate({
                    opacity: 0
                }), B++, B >= D && (B = 0);
                var e = (g("itemPadding"), parseInt((O - N) / 2)),
                    i = 0,
                    n = q.$items.length,
                    s = 0,
                    o = function () {
                        s++, s == n && f("next", t)
                    },
                    a = q.$items.first().clone();
                a.insertAfter(q.$items.last()).css({
                    left: parseInt(q.$items.last().css("left")) + N
                }), $(), q.$el.find(".mid-item").removeClass("mid-item"), q.$items.eq(k + 1).addClass("mid-item");
                for (var l = i; n >= l; l++) {
                    var r = {
                        left: A - (k - l) * N,
                        width: N,
                        top: e
                    };
                    k > l ? r.left -= N + H : l == k ? (r.left -= N + H, r.top = e, r.width = N) : l == k + 1 ? (r.left = A, r.top = 0, r.width = O) : r.left = A + O + (l - k - 2) * N + H, q.$items.eq(l).stop().show().animate(r, G, o)
                }
            }
        }

        function $() {
            q.$items = q.$scrollable.children()
        }

        function g(t) {
            return q.options[t]
        }

        function b() {
            S && clearTimeout(S), S = setTimeout(function () {
                b(), v()
            }, g("pauseTime"))
        }

        function w() {
            S && clearTimeout(S)
        }

        function C() {
            g("autoPlay") && b()
        }

        function I(e) {
            if (q.$scrollable.css("width", ""), e = t.extend({
                    itemPadding: g("itemPadding"),
                    itemMaxWidth: g("itemMaxWidth"),
                    itemsVisible: R,
                    itemMinWidth: g("itemMinWidth")
                }, e || {}), V = q.$el.width(), O = parseInt(e.itemMaxWidth + 2 * e.itemPadding), N = parseInt(O / F), j = N * (e.itemsVisible - 1) + O + 2 * H, j > V) {
                var i = j - V,
                    n = i / (e.itemsVisible + F - 1);
                if (O - n * F < e.itemMinWidth) {
                    if (e.itemsVisible - 2 >= 1) return e.itemsVisible -= 2, void I({
                        itemsVisible: e.itemsVisible
                    })
                } else O -= n * F, N -= n;
                j = V
            } else q.$scrollable.width(j);
            A = parseInt((j - O) / 2)
        }

        function P() {
            I(), d();
            var t = g("itemPadding");
            q.$scrollable.height(O);
            var e = 0,
                i = parseInt((O - N) / 2),
                n = 0,
                s = q.$items.length - 1;
            q.$items.hide();
            for (var o = n; s >= o; o++) q.$items.eq(o).show(), o == k ? q.$items.eq(o).css({
                left: parseInt(A),
                width: parseInt(O)
            }).addClass("mid-item").find(".slide-content").css({
                margin: t
            }) : (e = A - (k - o) * N, o > k ? e += O - N + H : e -= H, q.$items.eq(o).css({
                width: parseInt(N),
                left: parseInt(e),
                top: parseInt(i)
            }).removeClass("mid-item"))
        }

        function x(t) {
            t ? P() : (W && clearTimeout(W), W = setTimeout(function () {
                P()
            }, 350))
        }

        function y() {
            s(), o(), M.on("resize.thim-content-slider", function () {
                x()
            }).trigger("resize.thim-content-slider"), P()
        }
        this.$el = t(e).addClass("thim-content-slider"), this.$items = [], this.options = t.extend({}, t.fn.thimContentSlider.defaults, i);
        var q = this,
            M = t(window),
            V = (t(document), t(document.body), 0),
            W = null,
            S = null,
            T = 0,
            k = 0,
            j = 0,
            z = !1,
            B = 0,
            D = 0,
            F = this.options.activeItemRatio || 2.5,
            H = this.options.activeItemPadding,
            N = 0,
            O = 0,
            R = this.options.itemsVisible || 7,
            A = 0,
            Q = "ontouchstart" in window || window.navigator.msMaxTouchPoints,
            E = {
                start: Q ? "touchstart" : "mousedown",
                move: Q ? "touchmove" : "mousemove",
                end: Q ? "touchend" : "mouseup"
            },
            G = "",
            J = !0;
        this.pause = w, this.restart = C, this.prev = p, this.next = v, this.update = P, this.move = u, y()
    }, t.fn.thimContentSlider = function (e) {
        var i = !1,
            n = [];
        if (arguments.length > 0 && "string" == typeof arguments[0]) {
            i = arguments[0];
            for (var s = 1; s < arguments.length; s++) n[s - 1] = arguments[s]
        }
        return t.each(this, function () {
            var s = t(this),
                o = s.data("thim-content-slider");
            if (o || (o = new t.thimContentSlider(this, e), s.data("thim-content-slider", o)), i) {
                if (t.isFunction(o[i])) return o[i].apply(o, n);
                throw "Method thimContentSlider." + i + "() does not exists"
            }
            return s
        })
    }, t.fn.thimContentSlider.defaults = {
        items: [{
            image: "",
            url: "",
            html: ""
        }],
        itemMaxWidth: 200,
        itemMinWidth: 150,
        itemsVisible: 7,
        itemPadding: 10,
        activeItemRatio: 2,
        activeItemPadding: 0,
        mouseWheel: !0,
        autoPlay: !0,
        pauseTime: 3e3,
        pauseOnHover: !0,
        imageSelector: "",
        contentSelector: ".content",
        controlNav: "behind"
    }
}(jQuery);