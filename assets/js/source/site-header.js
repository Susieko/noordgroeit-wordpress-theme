'use strict';

document.documentElement.classList.add('js');

/* =========================================================
   SITE HEADER
   Main menu, submenus and scrolled state
========================================================= */

document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('.ng-site-header');

    if (!header) {
        return;
    }

    const toggle = header.querySelector('.ng-menu-toggle');
    const navigation = header.querySelector('.ng-primary-navigation');
    const submenuButtons = header.querySelectorAll('.ng-submenu-toggle');

    function closeSubmenus(exceptItem) {
        header.querySelectorAll('.ng-nav-parent.submenu-is-open')
            .forEach(function (item) {
                if (item === exceptItem) {
                    return;
                }

                item.classList.remove('submenu-is-open');

                const button = item.querySelector('.ng-submenu-toggle');

                if (button) {
                    button.setAttribute('aria-expanded', 'false');
                }
            });
    }

    function setMobileMenu(open) {
        if (!toggle) {
            return;
        }

        header.classList.toggle('menu-is-open', open);
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        document.body.classList.toggle('ng-menu-open', open);

        if (!open) {
            closeSubmenus();
        }
    }

    submenuButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const parent = button.closest('.ng-nav-parent');

            if (!parent) {
                return;
            }

            const willOpen =
                !parent.classList.contains('submenu-is-open');

            closeSubmenus(parent);

            parent.classList.toggle(
                'submenu-is-open',
                willOpen
            );

            button.setAttribute(
                'aria-expanded',
                willOpen ? 'true' : 'false'
            );
        });
    });

    if (toggle && navigation) {
        toggle.addEventListener('click', function () {
            setMobileMenu(
                !header.classList.contains('menu-is-open')
            );
        });

        navigation.addEventListener('click', function (event) {
            if (
                window.innerWidth <= 1180 &&
                event.target.closest('a')
            ) {
                setMobileMenu(false);
            }
        });
    }

    document.addEventListener('click', function (event) {
        if (!header.contains(event.target)) {
            closeSubmenus();
        }
    });

    document.addEventListener('keydown', function (event) {
        if (event.key !== 'Escape') {
            return;
        }

        const menuWasOpen =
            header.classList.contains('menu-is-open');

        setMobileMenu(false);
        closeSubmenus();

        if (menuWasOpen && toggle) {
            toggle.focus();
        }
    });

    function updateHeader() {
        header.classList.toggle(
            'is-scrolled',
            window.scrollY > 32
        );
    }

    updateHeader();

    window.addEventListener(
        'scroll',
        updateHeader,
        {
            passive: true
        }
    );

    window.addEventListener('resize', function () {
        if (window.innerWidth > 1180) {
            setMobileMenu(false);
            closeSubmenus();
        }
    });
});
