document.addEventListener("DOMContentLoaded", function () {

    // Close mobile navbar after clicking a navigation link

    const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

    const navbarCollapse = document.querySelector(".navbar-collapse");

    navLinks.forEach(function (link) {

        link.addEventListener("click", function () {

            if (navbarCollapse.classList.contains("show")) {

                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);

                if (bsCollapse) {
                    bsCollapse.hide();
                }

            }

        });

    });

}); 