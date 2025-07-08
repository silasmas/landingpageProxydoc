(function ($) {
    $.fn.countdown = function (options, callback) {
        var thisEl = $(this);
        var settings = $.extend({
            date: null,
            format: null
        }, options);

        var interval;

        function updateTimer() {
            var eventDate = Date.parse(settings.date);
            if (isNaN(eventDate)) {
                console.error("Date invalide. Exemple : 30 Tuesday 2013 15:50:00");
                clearInterval(interval);
                return;
            }

            var now = new Date();
            var diff = eventDate - now;

            if (diff <= 0) {
                // Événement déjà passé
                thisEl.find(".days").text("00");
                thisEl.find(".hours").text("00");
                thisEl.find(".minutes").text("00");
                thisEl.find(".seconds").text("00");

                thisEl.find(".timeRefDays").text("jours");
                thisEl.find(".timeRefHours").text("heures");
                thisEl.find(".timeRefMinutes").text("minutes");
                thisEl.find(".timeRefSeconds").text("secondes");

                clearInterval(interval);
                if (typeof callback === "function") {
                    callback.call(this);
                }
                return;
            }

            var seconds = Math.floor(diff / 1000);
            var days = Math.floor(seconds / (60 * 60 * 24));
            seconds -= days * 60 * 60 * 24;

            var hours = Math.floor(seconds / (60 * 60));
            seconds -= hours * 60 * 60;

            var minutes = Math.floor(seconds / 60);
            seconds -= minutes * 60;

            // Libellés en français
            thisEl.find(".timeRefDays").text(days === 1 ? "jour" : "jours");
            thisEl.find(".timeRefHours").text(hours === 1 ? "heure" : "heures");
            thisEl.find(".timeRefMinutes").text(minutes === 1 ? "minute" : "minutes");
            thisEl.find(".timeRefSeconds").text(seconds === 1 ? "seconde" : "secondes");

            if (settings.format === "on") {
                days = days < 10 ? "0" + days : days;
                hours = hours < 10 ? "0" + hours : hours;
                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;
            }

            thisEl.find(".days").text(days);
            thisEl.find(".hours").text(hours);
            thisEl.find(".minutes").text(minutes);
            thisEl.find(".seconds").text(seconds);
        }

        updateTimer();
        interval = setInterval(updateTimer, 1000);
    };
})(jQuery);

// Initialisation
$(document).ready(function () {
    $("#countdown").countdown({
        date: "10/30/2025 23:59:59",  // mets ta date ici
        format: "on"
    }, function () {
        $("#countdown").hide();
        $("#launch-message").fadeIn();
    });
});
