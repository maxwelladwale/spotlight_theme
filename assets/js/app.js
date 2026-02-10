// GSAP Animation js

gsap.registerPlugin(ScrollTrigger);

var panels = gsap.utils.toArray(".scroll-panel");

panels.forEach((panel) => {

    let innerPanel = panel.querySelector(".inner-banner");

    let fakeScrollRatio = 0;

    if (innerPanel) {
        let panelHeight = innerPanel.offsetHeight;
        let windowHeight = window.innerHeight;
        let difference = panelHeight - windowHeight;

        fakeScrollRatio = difference > 0 ? (difference / (difference + windowHeight)) : 0;

        if (fakeScrollRatio) {
            panel.style.marginBottom = panelHeight * fakeScrollRatio + "px";
        }
    }

    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: panel,
            start: "bottom bottom",
            end: () => fakeScrollRatio && innerPanel ? `+=${innerPanel.offsetHeight}` : "bottom top",
            pinSpacing: false,
            pin: true,
            scrub: true
        }
    });

    if (fakeScrollRatio && innerPanel) {
        tl.to(innerPanel, { yPercent: -100, y: window.innerHeight, duration: 1 / (1 - fakeScrollRatio) - 1, ease: "none" });
    }

    tl.fromTo(panel, { scale: 1, opacity: 1 }, { scale: 0.7, opacity: 0.5, duration: 0.9 })
        .to(panel, { opacity: 0, duration: 0.1 });
});
