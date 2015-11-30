var calendar = {
    init: function() {
        function a(a) {
            var b = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            return b[a - 1]
        }

        function b(b, d, e, f, g, h, i, j) {
            $(".month").text(a(b) + "-" + s), $(".month").attr("data-month", b), c(b, d, e, f, g, h, i, j)
        }

        function c(a, b, c, g, h, j, k, l) {
            function m(a, b) {
                for (var c = new Date(b, a, 1), d = []; c.getMonth() === a;) d.push(new Date(c)), c.setDate(c.getDate() + 1);
                return d
            }

            function n(b, c, d, e, f, g, h) {
                var i = m(a - 1, s)[0].toString().substring(0, 3);
                "Mon" === i ? $("thead.event-days tr").append("<td>" + b + "</td><td>" + c + "</td><td>" + d + "</td><td>" + e + "</td><td>" + f + "</td><td>" + g + "</td><td>" + h + "</td>") : "Tue" === i ? $("thead.event-days tr").append("<td>" + c + "</td><td>" + d + "</td><td>" + e + "</td><td>" + f + "</td><td>" + g + "</td><td>" + h + "</td><td>" + b + "</td>") : "Wed" === i ? $("thead.event-days tr").append("<td>" + d + "</td><td>" + e + "</td><td>" + f + "</td><td>" + g + "</td><td>" + h + "</td><td>" + b + "</td><td>" + c + "</td>") : "Thu" === i ? $("thead.event-days tr").append("<td>" + e + "</td><td>" + f + "</td><td>" + g + "</td><td>" + h + "</td><td>" + b + "</td><td>" + c + "</td><td>" + d + "</td>") : "Fri" === i ? $("thead.event-days tr").append("<td>" + f + "</td><td>" + g + "</td><td>" + h + "</td><td>" + b + "</td><td>" + c + "</td><td>" + d + "</td><td>" + e + "</td>") : "Sat" === i ? $("thead.event-days tr").append("<td>" + g + "</td><td>" + h + "</td><td>" + b + "</td><td>" + c + "</td><td>" + d + "</td><td>" + e + "</td><td>" + f + "</td>") : "Sun" === i && $("thead.event-days tr").append("<td>" + h + "</td><td>" + b + "</td><td>" + c + "</td><td>" + d + "</td><td>" + e + "</td><td>" + f + "</td><td>" + g + "</td>")
            }
            $($("tbody.event-calendar tr")).each(function(a) {
                $(this).empty()
            }), $($("thead.event-days tr")).each(function(a) {
                $(this).empty()
            }), n(b, c, g, h, j, k, l), $(m(a - 1, s)).each(function(b) {
                var b = b + 1;
                8 > b ? $("tbody.event-calendar tr.1").append('<td date-month="' + a + '" date-day="' + b + '">' + b + "</td>") : 15 > b ? $("tbody.event-calendar tr.2").append('<td date-month="' + a + '" date-day="' + b + '">' + b + "</td>") : 22 > b ? $("tbody.event-calendar tr.3").append('<td date-month="' + a + '" date-day="' + b + '">' + b + "</td>") : 29 > b ? $("tbody.event-calendar tr.4").append('<td date-month="' + a + '" date-day="' + b + '">' + b + "</td>") : 32 > b && $("tbody.event-calendar tr.5").append('<td date-month="' + a + '" date-day="' + b + '">' + b + "</td>"), i++
            });
            var o = new Date,
                p = o.getMonth() + 1;
            d(p), e(), f()
        }

        function d(a) {
            var b = $(".month").attr("data-month");
            parseInt(a) === parseInt(b) && $('tbody.event-calendar td[date-day="' + q.getDate() + '"]').addClass("current-day")
        }

        function e() {
            $(".day-event").each(function(a) {
                var b = $(this).attr("date-month"),
                    c = $(this).attr("date-day"),
                    d = $(this).attr("event-class");
                d = void 0 === d ? "event" : "event " + d, $('tbody.event-calendar tr td[date-month="' + b + '"][date-day="' + c + '"]').addClass(d)
            })
        }

        function f() {
            $("tbody.event-calendar td").on("click", function(a) {
                $(".day-event").slideUp("fast");
                var b = $(this).attr("date-month"),
                    c = $(this).text();
                $('.day-event[date-month="' + b + '"][date-day="' + c + '"]').slideDown("fast")
            })
        }

        function g() {
            $(".remove").click(function() {
                if (this.checked) {
                    $(this).next().text("Remove from personal list");
                    var a = $(this).closest(".day").attr("date-month"),
                        b = $(this).closest(".day").attr("date-day"),
                        c = $(this).closest(".day").attr("data-number");
                    $('.day[date-month="' + a + '"][date-day="' + b + '"][data-number="' + c + '"]').slideUp("slow"), $('.day-event[date-month="' + a + '"][date-day="' + b + '"][data-number="' + c + '"]').find(".save").attr("checked", !1), $('.day-event[date-month="' + a + '"][date-day="' + b + '"][data-number="' + c + '"]').find("span").text("Save to personal list"), setTimeout(function() {
                        $('.day[date-month="' + a + '"][date-day="' + b + '"][data-number="' + c + '"]').remove()
                    }, 1500)
                }
            })
        }

        function h() {
            var a = $(".person-list");
            a.find(".day").sort(function(a, b) {
                return +a.getAttribute("date-day") - +b.getAttribute("date-day")
            }).appendTo(a)
        }
        var j = "Mon",
            k = "Tue",
            l = "Wed",
            m = "Thu",
            n = "Fri",
            o = "Sat",
            p = "Sun",
            q = new Date,
            r = (q.getFullYear() + "/" + (q.getMonth() + 1) + "/" + q.getDate(), q.getMonth() + 1),
            s = (new Date).getFullYear();
        console.log("full year ", s), i = 0, b(r, j, k, l, m, n, o, p), $(".btn-next").on("click", function(a) {
            var c = $(".month").attr("data-month");
            if (c > 11) {
                $(".month").attr("data-month", "0");
                var c = $(".month").attr("data-month");
                b(parseInt(c) + 1, j, k, l, m, n, o, p)
            } else b(parseInt(c) + 1, j, k, l, m, n, o, p)
        }), $(".btn-prev").on("click", function(a) {
            var c = $(".month").attr("data-month");
            if (2 > c) {
                $(".month").attr("data-month", "13");
                var c = $(".month").attr("data-month");
                b(parseInt(c) - 1, j, k, l, m, n, o, p)
            } else b(parseInt(c) - 1, j, k, l, m, n, o, p)
        }), $("tbody td").on("click", function(a) {
            $(this).hasClass("event") ? ($("tbody.event-calendar td").removeClass("active"), $(this).addClass("active")) : $("tbody.event-calendar td").removeClass("active")
        }), $(".close").on("click", function(a) {
            $(this).parent().slideUp("fast")
        }), $(".save").click(function() {
            if (this.checked) {
                $(this).next().text("Remove from personal list");
                var a = $(this).closest(".day-event").html(),
                    b = $(this).closest(".day-event").attr("date-month"),
                    c = $(this).closest(".day-event").attr("date-day"),
                    d = $(this).closest(".day-event").attr("data-number");
                $(".person-list").append('<div class="day" date-month="' + b + '" date-day="' + c + '" data-number="' + d + '" style="display:none;">' + a + "</div>"), $('.day[date-month="' + b + '"][date-day="' + c + '"]').slideDown("fast"), $(".day").find(".close").remove(), $(".day").find(".save").removeClass("save").addClass("remove"), $(".day").find(".remove").next().addClass("hidden-print"), g(), h()
            } else {
                $(this).next().text("Save to personal list");
                var b = $(this).closest(".day-event").attr("date-month"),
                    c = $(this).closest(".day-event").attr("date-day"),
                    d = $(this).closest(".day-event").attr("data-number");
                $('.day[date-month="' + b + '"][date-day="' + c + '"][data-number="' + d + '"]').slideUp("slow"), setTimeout(function() {
                    $('.day[date-month="' + b + '"][date-day="' + c + '"][data-number="' + d + '"]').remove()
                }, 1500)
            }
        }), $(".print-btn").click(function() {
            window.print()
        })
    }
};
$(document).ready(function() {
    calendar.init()
});