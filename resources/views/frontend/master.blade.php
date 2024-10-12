<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home Page</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
}

.container {
    width: 90%;
    margin: 0 auto;
}





/* Header Styling */
.header {
    background-color: #333;
    padding: 20px 0;
}

.logo h1 {
    color: #fff;
    text-align: center;
}

.navbar {
    text-align: center;
    margin-top: 10px;
}

.navbar ul {
    list-style: none;
    padding: 0;
}

.navbar ul li {
    display: inline-block;
    margin-right: 20px;
}

/* General menu link styling */
.navbar ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    padding: 5px 10px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Hover effect for menu links */
.navbar ul li a:hover {
    background-color: #007bff; /* Change to your preferred hover color */
    color: #fff;
    border-radius: 5px;
}

/* Active link styling for About page */
.navbar ul li a.active {
    background-color: #007bff; /* Active background color */
    color: #fff; /* Active text color */
    border-radius: 5px;
}





/* Blog Posts Section */
.blog-posts {
    padding: 50px 0;
}

.blog-posts h2 {
    text-align: center;
    margin-bottom: 40px;
}

/* Flexbox Grid for Blog Posts */
.posts-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: space-between;
}

.post {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
    flex-basis: calc(33.333% - 20px); /* Three columns with equal width */
    text-align: center;
}

.post img {
    max-width: 100%;
    border-radius: 8px;
}

.post h3 {
    margin-top: 15px;
    font-size: 24px;
}

.post p {
    margin: 15px 0;
    font-size: 16px;
}

.read-more {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.read-more:hover {
    background-color: #555;
}



/* Footer */
.footer {
    background-color: #333;
    color: #fff;
    padding: 40px 0;
}

.footer .container {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.footer-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    width: 100%;
    margin-bottom: 20px;
}

.footer-logo h2 {
    font-size: 24px;
    color: #fff;
}

.footer-nav ul {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 15px;
}

.footer-nav ul li {
    display: inline-block;
}

.footer-nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
}

.footer-nav ul li a:hover {
    color: #ddd;
}

.footer-bottom {
    text-align: center;
    width: 100%;
}

.footer-bottom p {
    margin: 10px 0 0;
}




/* Responsive Design */
@media (max-width: 768px) {
    .post {
        flex-basis: calc(50% - 20px); /* Two columns for medium screens */
    }
}

@media (max-width: 576px) {
    .post {
        flex-basis: 100%; /* Full width for small screens */
    }
}

</style>


<body>

   @include('frontend.componet.header')

    <!-- Blog Posts Section -->
   @yield('contand')

    <!-- Footer Section -->
<!-- Footer Section -->
  @include('frontend.componet.footer')

</body>
</html>
