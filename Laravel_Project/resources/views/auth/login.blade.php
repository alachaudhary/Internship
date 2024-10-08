<title>Login</title>
<link rel="stylesheet" href="{{ asset('login.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

<div class="left-container">
</div>
<div class="right-container">
    <div class="right-container__box">
        <div class="right-container-box">
            <h2 class="right-container__h2">Nice to see you!</h2>
            <p class="right-container__p">Enter your email and password to sign in</p>
        </div>
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-container">
            <label for="email" class="right-container__label">Email</label>
            <input type="text" class="right-container__input" name="email" placeholder="Your email address">
            <label for="email" class="right-container__label">Password</label>
            <input type="password" class="right-container__input" name="password" placeholder="Your password"> 
        </div> 
        <div class="toggle-container">
          <input type="checkbox" class="toggle-box" name="checkbox">
          <label for="checkbox">Remember me</label>
        </div>
        <button class="btn">SIGN IN</button></form>
       <p class="right-container__bottom-text">Don't have an account?<a href="{{route('register')}}">Sign Up</a></p>
    </div>
</div>