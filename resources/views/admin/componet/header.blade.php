    
    
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <h1>Blog Dashboard</h1>
            <div class="user-info">
                <span>Admin</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="logout" style="background: none; border: none; color: #007bff; cursor: pointer;">Logout</button>
            </form>
            </div>
        </div>
    </header>