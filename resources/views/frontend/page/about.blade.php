@extends('frontend.master')

@section('contand')


<style>
    /* About Us Section */
.about-us {
    padding: 50px 0;
    text-align: center;
    background-color: #f9f9f9;
}

.about-us h2 {
    font-size: 32px;
    margin-bottom: 20px;
}

.about-us p {
    font-size: 18px;
    line-height: 1.8;
}

/* Mission Section */
.mission {
    padding: 50px 0;
    text-align: center;
    background-color: #fff;
}

.mission h2 {
    font-size: 32px;
    margin-bottom: 20px;
}

.mission p {
    font-size: 18px;
    line-height: 1.8;
}

/* Team Section */
.team {
    padding: 50px 0;
    text-align: center;
    background-color: #f9f9f9;
}

.team h2 {
    font-size: 32px;
    margin-bottom: 30px;
}

.team-grid {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.team-member {
    background-color: #fff;
    border-radius: 5px;
    padding: 20px;
    width: 30%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.team-member img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.team-member h3 {
    font-size: 20px;
    margin-top: 15px;
    margin-bottom: 10px;
}

.team-member p {
    font-size: 16px;
    color: #777;
}
</style>

 <!-- About Us Section -->
 <section class="about-us">
        <div class="container">
            <h2>Who We Are</h2>
            <p>Welcome to our blog! We are a passionate team of writers, designers, and developers dedicated to providing you with high-quality, informative content. Our mission is to inspire, inform, and entertain through our blog posts. We focus on a variety of topics to cater to your interests.</p>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team">
        <div class="container">
            <h2>Meet the Team</h2>
            <div class="team-grid">
                @foreach ($about as $aboute)
                <div class="team-member">
                <img src="{{ asset('storage/' . $aboute->image) }}" alt="{{ $aboute->name }}">
                    <h3>{{$aboute->name}}</h3>
                    <p>{{$aboute->role}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection