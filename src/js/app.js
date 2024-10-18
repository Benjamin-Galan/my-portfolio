document.addEventListener('DOMContentLoaded', function () {
    eventListeners();
    scrollNav();
    navegacionFija();
    resaltarEnlace();
    darkMode();
});

function navegacionFija() {
    const header = document.querySelector('.header');
    const presentacion = document.querySelector('.presentacion');

    document.addEventListener('scroll', function () {
        if (presentacion.getBoundingClientRect().bottom < 1) {
            header.classList.add('fixed')
        } else {
            header.classList.remove('fixed')
        }
    })
}

function darkMode() {
    const btnDarkMode = document.getElementById('mode-toggle');
    const body = document.body;
    const preferencia = window.matchMedia('(prefers-color-scheme: dark)');

    // Inicializar el tema y el estado del botón
    function updateTheme() {
        if (preferencia.matches) {
            body.classList.add('dark-mode');
            btnDarkMode.checked = true; // Actualizar el estado del botón
        } else {
            body.classList.remove('dark-mode');
            btnDarkMode.checked = false; // Actualizar el estado del botón
        }
    }

    // Leer las preferencias del sistema al cargar
    updateTheme();

    // Escuchar cambios en las preferencias del sistema
    preferencia.addEventListener('change', updateTheme);

    // Escuchar cambios en el botón
    btnDarkMode.addEventListener('change', function () {
        body.classList.toggle('dark-mode', btnDarkMode.checked);
    });
}

function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion-principal');
    navegacion.classList.toggle('mostrar');

    // if(navegacion.classList.contains('mostrar')){
    //     navegacion.classList.remove('mostrar');
    // } else {
    //     navegacion.classList.add('mostrar')
    // }
}

function resaltarEnlace() {
    document.addEventListener('scroll', function () {
        const sections = document.querySelectorAll('section')
        const navLinks = document.querySelectorAll('.navegacion-principal a')

        let actual = ''
        sections.forEach(section => {
            const sectionTop = section.offsetTop
            const sectionHeight = section.clientHeight

            if (window.scrollY >= (sectionTop - sectionHeight / 3)) {
                actual = section.id
            }
        })

        navLinks.forEach(link => {
            link.classList.remove('active')
            if (link.getAttribute('href') === '#' + actual) {
                link.classList.add('active');
            }
        })
    })
}

function scrollNav() {
    const navLinks = document.querySelectorAll('.navegacion-principal a')

    navLinks.forEach(link => {
        link.addEventListener('click', e => {
            // Verifica si el enlace es para cerrar sesión
            if (link.getAttribute('href') === 'cerrar-sesion.php') {
                // Permite el comportamiento normal (cerrar sesión)
                return;
            }

            e.preventDefault()
            const sectionScroll = e.target.getAttribute('href')
            const section = document.querySelector(sectionScroll)

            section.scrollIntoView({ behavior: 'smooth' })
        })
    })
}
