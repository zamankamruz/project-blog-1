

<script>
        document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.sidebar a');
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            navLinks.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
        });
    });

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default action
            const dropdown = this.nextElementSibling; // Get the dropdown
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block'; // Toggle dropdown
        });
    });
});


</script>