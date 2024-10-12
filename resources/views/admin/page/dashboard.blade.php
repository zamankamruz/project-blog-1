@extends('admin.admin_master')


@section('contand')

<style>
    .container{
        margin-top: 80px;
    }
</style>

<main class="main-content">
        <div class="container">
            <h2>Dashboard Overview</h2>
            <div class="cards">
                <div class="card">
                    <h3>Total Posts</h3>
                    <p>{{$TotalPost}}</p>
                </div>
                <div class="card">
                    <h3>Published Posts</h3>
                    <p>{{$TotalPost}}</p>
                </div>
                <div class="card">
                    <h3>Active Post</h3>
                    <p>{{$TotalPost}}</p>
                </div>
     
            </div>


            <h3>Recent Activity</h3>
            <table>
                <thead>
                    <tr>
                        <th>Post Title</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Understanding JavaScript</td>
                        <td>Published</td>
                        <td>2024-10-01</td>
                    </tr>
                    <tr>
                        <td>CSS Flexbox Guide</td>
                        <td>Draft</td>
                        <td>2024-10-02</td>
                    </tr>
                    <tr>
                        <td>HTML5 Features</td>
                        <td>Published</td>
                        <td>2024-10-03</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>


@endsection

