/**
 * Spotlight – Mobile navigation toggle.
 *
 * @package Spotlight
 */
(function () {
    'use strict';

    var toggle = document.getElementById('mobile-menu-toggle');
    var menu   = document.getElementById('mobile-menu');

    if (!toggle || !menu) {
        return;
    }

    toggle.addEventListener('click', function () {
        var expanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', String(!expanded));
        menu.classList.toggle('hidden');
    });
})();

/**
 * Spotlight – Torch beam effect on "Spotlight" text.
 */
(function () {
    'use strict';

    var wrapper = document.getElementById('spotlight-torch');
    if (!wrapper) return;

    var reveal = wrapper.querySelector('.spotlight-reveal');
    var beam   = wrapper.querySelector('.spotlight-beam');
    var radius = 40;

    wrapper.addEventListener('mousemove', function (e) {
        var rect = wrapper.getBoundingClientRect();
        var x = e.clientX - rect.left;
        var y = e.clientY - rect.top;

        reveal.style.clipPath = 'circle(' + radius + 'px at ' + x + 'px ' + y + 'px)';
        beam.style.left = x + 'px';
        beam.style.top  = y + 'px';
    });

    wrapper.addEventListener('mouseleave', function () {
        reveal.style.clipPath = 'circle(0px at 0px 0px)';
    });
})();
