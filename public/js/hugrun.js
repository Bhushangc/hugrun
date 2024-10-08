
function changeLanguage() {
    const select = document.getElementById('language-select');
    const selectedOption = select.options[select.selectedIndex];
    const newFlagSrc = selectedOption.getAttribute('data-img');
    const newLangText = selectedOption.value.toUpperCase();

    const currentFlag = document.getElementById('current-flag');
    const currentLangText = document.getElementById('current-lang-text');

    currentFlag.src = newFlagSrc;
    currentFlag.alt = selectedOption.text;
    currentLangText.textContent = newLangText;
}
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuIcon = document.querySelector(".mobile-menu-icon");
    const mobileCloseIcon = document.querySelector(".mobile-close-icon");
    const mobileNavContent = document.querySelector(".mobile-nav-content");
    function closeMobileNav() {
        mobileNavContent.style.display = "none";
    }
    mobileMenuIcon.addEventListener("click", function () {
        mobileNavContent.style.display = "flex";
    });
    mobileCloseIcon.addEventListener("click", function () {
        closeMobileNav();
    });
    const mobileNavLinks = document.querySelectorAll(".mobile-nav-content a");
    mobileNavLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            closeMobileNav();
        });
    });
});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("shows");
}
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('shows')) {
            openDropdown.classList.remove('shows');
        }
    }
    }
}
var modal = document.getElementById('announcement-modal');

        var image = document.querySelector('.clicked-image');

        var span = document.querySelector('.close');

        image.addEventListener('click', function() {
            modal.style.display = 'block';
        });

        span.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
