<!-- Header Section -->

<style>
    .nav-link {
    color: #333; /* Default link color */
    text-decoration: none;
}

.nav-link.active {
    color: #ff0000; /* Color for the active link */
    font-weight: bold; /* Optional: make the active link bold */
}
</style>
<header class="header">
    <div class="container">
        <div class="logo">
            <h1>Blog Name</h1>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ route('blog') }}" class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function () {
                navLinks.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
            });
        });
    });
</script>
