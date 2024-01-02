$(document).ready(function () {
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    function handleScroll() {
        $(".animated-scroller").each(function () {
            var element = $(this)[0];
            if (isElementInViewport(element)) {
                $(this).css({
                    opacity: 1,
                    transform: "translateY(0)"
                });
            }
        });
    }

    $(window).on("scroll", handleScroll);

    handleScroll();
});