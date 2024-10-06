<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="{{ asset('signup.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="left-container"></div>

<div class="right-container">
    <div class="right-container__box">
        <div class="right-container-box">
            <h2 class="right-container__h2">Create an Account</h2>
            <p class="right-container__p">Please fill out the form to <strong>Sign Up</strong></p>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-container">
                <label for="name" class="right-container__label">Full Name</label>
                <input type="text" class="right-container__input" name="name" placeholder="Your full name">
                
                <label for="gender" class="right-container__label">Gender</label>
                <select class="right-container__input" name="gender">
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label for="country" class="right-container__label">Country</label>
                <select class="right-container__input" name="country">
                    <option value="" disabled selected>Select your country</option>
                    <option value="pakistan">Pakistan</option>
                    <option value="india">India</option>
                    <option value="usa">USA</option>
                    <option value="uk">UK</option>
                    <!-- You can add more countries as needed -->
                </select>

                
                <label for="email" class="right-container__label">Email</label>
                <input type="email" class="right-container__input" name="email" placeholder="Your email address">
                
                <label for="password" class="right-container__label">Password</label>
                <input type="password" class="right-container__input" name="password" placeholder="Your password">

                <label for="password-confirm" class="right-container__label">Confirm Password</label>
                <input id="password-confirm" type="password" class="right-container__input" name="password_confirmation" placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn">{{ __('SignUp') }}</button>
        </form>
        <p class="right-container__bottom-text">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
    </div>
</div>
</body>
</html>
