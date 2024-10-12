

<aside class="sidebar">
    <nav>
        <ul>
            <li>
                <a href="{{ route('dashboard') }}" class="active">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('psot.create') }}">
                    <i class="fas fa-plus-circle"></i> Add New Post
                </a>
            </li>
            <li>
                <a href="{{ route('psot.list') }}">
                    <i class="fas fa-list"></i> All Posts
                </a>
            </li>
            <li>
                <a href="{{ route('post.category') }}">
                    <i class="fas fa-folder-plus"></i> Add Category
                </a>
            </li>
            <li>
                <a href="{{ route('admin.about') }}">
                 <i class="fas fa-info-circle"></i>Team Member
                </a>
            </li>
            <li>
                <a href="{{ route('admin.contact') }}">
                   <i class="fas fa-envelope"></i> Contact
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-comments"></i> Comments
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cogs"></i> Settings
                </a>
            </li>
        </ul>
    </nav>
</aside>

<!-- Styling -->
<style>
    .sidebar {
        width: 200px;
        background-color: #343a40;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        padding: 20px 0;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar nav ul {
        list-style-type: none;
        padding-left: 0;
        margin: 0;
    }

    .sidebar nav ul li {
        margin-bottom: 20px;
    }

    .sidebar nav ul li a {
        display: flex;
        align-items: center;
        padding: 10px 20px;
        color: #fff;
        font-size: 16px;
        text-decoration: none;
        transition: background 0.3s ease;
    }

    .sidebar nav ul li a i {
        margin-right: 10px;
        font-size: 18px;
    }

    .sidebar nav ul li a:hover,
    .sidebar nav ul li a.active {
        background-color: #007bff;
        border-radius: 5px;
    }

    .sidebar nav ul li a.active {
        font-weight: bold;
    }
</style>
