<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.header {
    width: 100%;
    background-color: #333;
    color: #fff;
    padding: 20px 0;
    position: fixed; /* Fixed header for easy navigation */
    z-index: 1000; /* Ensure it stays above other elements */
}

.header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px; /* Limit width for larger screens */
    margin: 0 auto; /* Center the header */
    padding: 0 20px; /* Add padding to prevent content from touching edges */
}

.user-info {
    display: flex;
    align-items: center;
}

.user-info .username {
    color: #fff; /* Keep the username visible */
    font-size: 16px; /* Increase font size for better readability */
    margin-right: 20px; /* Space between username and logout */
}

.user-info .logout {
    display: flex;
    align-items: center;
    background-color: #e74c3c; /* Red background for logout button */
    color: #fff; /* Text color for the logout button */
    padding: 10px 15px; /* Padding for the button */
    border-radius: 5px; /* Rounded corners */
    text-decoration: none; /* Remove underline */
    transition: background-color 0.3s; /* Smooth transition */
}

.user-info .logout:hover {
    background-color: #c0392b; /* Darker red on hover */
}

.user-info .logout:active {
    background-color: #a93226; /* Even darker when clicked */
}






.sidebar {
    margin-top:75px;
    width: 200px;
    background-color: #444;
    height: 100vh;
    position: fixed;
}

.sidebar nav ul {
    list-style: none;
}

.sidebar nav ul li {
    margin: 0;
    position: relative;
}

.sidebar nav ul li a {
    display: block;
    color: #fff;
    padding: 15px 20px;
    text-decoration: none;
    transition: background 0.3s;
}

.sidebar nav ul li a:hover,
.sidebar nav ul li a.active {
    background-color: #555;
}

.dropdown {
    display: none; /* Hide dropdown by default */
    padding-left: 20px;
}

.sidebar nav ul li:hover .dropdown {
    display: block; /* Show dropdown on hover */
}

.main-content {
    margin-left: 250px;
    padding: 20px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;

}

.card {
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px;

}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 8px;
}

table th {
    background-color: #f2f2f2;
}

</style>
<body>

@include('admin.componet.header')

 
@include('admin.componet.sidver')

@yield('contand')



@include('admin.componet.script')



</body>
</html>
