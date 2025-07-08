
    (function ($) {
        $.fn.countdown = function (options, callback) {

            function updateTimer() {
                eventDate = Date.parse(settings.date) / 1000;
                currentDate = Math.floor(Date.now() / 1000);

                if (eventDate <= currentDate) {
                    if (typeof callback === "function") {
                        callback.call(this);
                    }
                    clearInterval(interval);
                }

                seconds = eventDate - currentDate;

                days = Math.floor(seconds / 86400);
                seconds -= days * 60 * 60 * 24;

                hours = Math.floor(seconds / 3600);
                seconds -= hours * 60 * 60;

                minutes = Math.floor(seconds / 60);
                seconds -= minutes * 60;

                // Libellés en français
                days == 1
                    ? thisEl.find(".timeRefDays").text("jour")
                    : thisEl.find(".timeRefDays").text("jours");

                hours == 1
                    ? thisEl.find(".timeRefHours").text("heure")
                    : thisEl.find(".timeRefHours").text("heures");

                minutes == 1
                    ? thisEl.find(".timeRefMinutes").text("minute")
                    : thisEl.find(".timeRefMinutes").text("minutes");

                seconds == 1
                    ? thisEl.find(".timeRefSeconds").text("seconde")
                    : thisEl.find(".timeRefSeconds").text("secondes");

                if (settings.format == "on") {
                    days = days < 10 ? "0" + days : days;
                    hours = hours < 10 ? "0" + hours : hours;
                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;
                }

                if (!isNaN(eventDate)) {
                    thisEl.find(".days").text(days);
                    thisEl.find(".hours").text(hours);
                    thisEl.find(".minutes").text(minutes);
                    thisEl.find(".seconds").text(seconds);
                } else {
                    console.error("Date invalide. Exemple : 30 Tuesday 2013 15:50:00");
                    clearInterval(interval);
                }
            }

            var thisEl = $(this);
            var settings = {
                date: null,
                format: null
            };

            if (options) {
                $.extend(settings, options);
            }

            updateTimer();
            interval = setInterval(updateTimer, 1000);
        };
    })(jQuery);

    // Initialiser le countdown
    $(document).ready(function () {
        $("#countdown").countdown({
            date: "12/31/2025 23:59:59", // change la date ici si besoin
            format: "on"
        }, function () {
            $("#countdown").hide();
            $("#launch-message").fadeIn();
        });
    });

