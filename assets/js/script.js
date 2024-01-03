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






let counterValue = 0;
let counterElement = document.getElementById('counter-three');
let animationSpeed = 0; // Adjust the speed here (lower value = faster)

function startCounter() {
  requestAnimationFrame(incrementCounter);
}

function incrementCounter() {
  counterValue++;
  counterElement.textContent = counterValue;

  if (counterValue < 500) {
    setTimeout(() => {
      requestAnimationFrame(incrementCounter);
    }, animationSpeed);
  }
}

// Start the counter on page load
startCounter();


let counterValue02 = 0;
let counterElement02 = document.getElementById('counter-two');
let animationSpeed02 = 500; // Adjust the speed here (lower value = faster)

function startCounter02() {
  requestAnimationFrame(incrementCounter02);
}

function incrementCounter02() {
  counterValue02++;
  counterElement02.textContent = counterValue02;

  if (counterValue02 < 3) {
    setTimeout(() => {
      requestAnimationFrame(incrementCounter02);
    }, animationSpeed02);
  }
}

// Start the counter on page load
startCounter02();


let counterValue03 = 0;
let counterElement03 = document.getElementById('counter-one');
let animationSpeed03 = 10; // Adjust the speed here (lower value = faster)

function startCounter03() {
  requestAnimationFrame(incrementCounter03);
}

function incrementCounter03() {
  counterValue03++;
  counterElement03.textContent = counterValue03;

  if (counterValue03 < 2000) {
    setTimeout(() => {
      requestAnimationFrame(incrementCounter03);
    }, animationSpeed03);
  }
}

// Start the counter on page load
startCounter03();

