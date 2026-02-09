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
