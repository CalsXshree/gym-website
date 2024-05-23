<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        nav {
            display: flex;
            justify-content: space-between;
            background-color: transparent;
            position: fixed;
            width: 100%;
            top: 0px;
            z-index: 4;
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        nav div a {
            display: inline-block;
            justify-content: center;
            text-decoration: none;
            margin: 10px 20px;
            font-size: 18px;
            position: relative;
        }

        .navbar div a {
            color: black;
        }

        .container {
            margin: 0 5rem;
        }

        form {
            width: 100%
        }

        form input,
        form textarea,
        form select {
            border: 0;
            outline: none;
            background: #262626;
            padding: 15px;
            margin: 15px 0;
            color: #fff;
            font-size: 18px;
            border-radius: 6px;
        }

        form button {
            width: 100%;
            padding: 1rem 3rem;
            border-radius: 5rem;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo"> <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 60px">
        </div>
        <div style="display:flex; align-items:center;">
            <a href="/#home">Home</a>
            <a href="/#about">About Us</a>
            <a href="/#service">Our Services</a>
            <a href="/#community">Community</a>
            <a href="/#contact">Contact Us</a>
            <a href="/join">Join Now </a>
        </div>
    </nav>
    <div style="margin-top: 8rem; display: flex; gap: 15rem; color:#fff" class="container">
        <div><img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 100%"></div>
        <div style="padding-top: 5rem; background-color: #010100; padding :5rem; border-radius: 20px; width: 45rem">
            <h2 style="color: #b0adad">Sign Up Form Membership</h2>
            <form action="/join" style="display: flex; flex-direction: column; gap: 2rem" method="POST">
                @csrf
                <input type="text" name="name" id="" placeholder="Enter Your Name" required>
                <input type="email" name="email" id="" placeholder="Enter Your Email" required>
                <select name="membersihip" id="" style="color: #757575">
                    <option value="premium_plus">Premium plus</option>
                    <option value="premium">Premium</option>
                    <option value="fitness">Fitness</option>
                    <option value="program">Program</option>
                    <option value="basic">Basic</option>
                </select>
                <button type="submit">submit</button>
            </form>
        </div>
    </div>
</body>

</html>
