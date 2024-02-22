@extends('layouts/layouts')

@section('content')
    <style>
        *,
        *:before,
        *:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
            background: #ffffff;
        }

        input,
        button {
            border: none;
            outline: none;
            background: none;
            font-family: 'Open Sans', Helvetica, Arial, sans-serif;
        }

        .tip {
            font-size: 20px;
            margin: 40px auto 50px;
            text-align: center;
        }

        .cont {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            width: 900px;
            height: 550px;
            margin: 0 auto 100px;
            background: #fff;
            box-shadow: -10px -10px 15px rgba(255, 255, 255, 0.3), 10px 10px 15px rgba(70, 70, 70, 0.15), inset -10px -10px 15px rgba(255, 255, 255, 0.3), inset 10px 10px 15px rgba(70, 70, 70, 0.15);
        }

        .form {
            position: relative;
            width: 640px;
            height: 100%;
            -webkit-transition: -webkit-transform 1.2s ease-in-out;
            transition: -webkit-transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
            padding: 50px 30px 0;
        }

        .sub-cont {
            overflow: hidden;
            position: absolute;
            left: 640px;
            top: 0;
            width: 900px;
            height: 100%;
            padding-left: 260px;
            background: #fff;
            -webkit-transition: -webkit-transform 1.2s ease-in-out;
            transition: -webkit-transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out;
            transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
        }

        .cont.s--signup .sub-cont {
            -webkit-transform: translate3d(-640px, 0, 0);
            transform: translate3d(-640px, 0, 0);
        }

        button {
            display: block;
            margin: 0 auto;
            width: 260px;
            height: 36px;
            border-radius: 30px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        .img {
            overflow: hidden;
            z-index: 2;
            position: absolute;
            left: 0;
            top: 0;
            width: 260px;
            height: 100%;
            padding-top: 360px;
        }

        .img:before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            width: 900px;
            height: 100%;
            opacity: .8;
            background-size: cover;
            transition: transform 1.2s ease-in-out;
        }

        .img:after {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #111827;
        }

        .cont.s--signup .img:before {
            transform: translate3d(640px, 0, 0);
        }


        /* .img__text {
            position: absolute;
            left: 0;
            top: 50px;
            width: 100%;
            padding: 0 20px;
            text-align: center;
            color: #fff;
            transition: transform 1.2s ease-in-out;
        } */



        .cont.s--signup .img__text.m--up {
            transform: translateX(520px);
        }

        .img__text.m--in {
            transform: translateX(-520px);
        }

        .cont.s--signup .img__text.m--in {
            transform: translateX(0);
        }

        .img__btn {
            overflow: hidden;
            z-index: 2;
            position: relative;
            width: 100px;
            height: 36px;
            margin: 0 auto;
            background: transparent;
            color: #fff;
            text-transform: uppercase;
            font-size: 15px;
            cursor: pointer;
        }

        .img__btn:after {
            content: '';
            z-index: 2;
            position: absolute;
            width: 100%;
            height: 100%;
            border: 2px solid #fff;
            border-radius: 30px;
        }

        .img__btn span {
            position: absolute;
            left: 0;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            transition: transform 1.2s;
        }

        .cont.s--signup .img__btn span.m--in {
            transform: translateY(0);
        }

        .cont.s--signup .img__btn span.m--up {
            transform: translateY(72px);
        }


        .cont.s--signup .sign-up {
            transform: translate3d(0, 0, 0);
        }
    </style>



    <div class="cont font-kode">
        <div class="form sign-in transition-transform duration-1200 ease-in-out transform translate-x-640">
            <h2 class="w-full text-2xl text-center">Welcome</h2>

            <label class="label">
                <span class="labelSpan">Email</span>

                <input class="input" type="email" />
            </label>
            <label class="label">
                <span class="labelSpan">Password</span>
                <input class="input" type="password" />
            </label>
            <p class="mt-[15px] text-center text-sm text-[#cfcfcf]">Forgot password?</p>
            <button type="button" class=" mt-[40px] mb-[20px] bg-[#d4af7a] uppercase">Sign In</button>

        </div>
        <div class="sub-cont">
            <div class="img">
                <div
                .img__text {
                    position: absolute;
                    left: 0;
                    top: 50px;
                    width: 100%;
                    padding: 0 20px;
                    text-align: center;
                    color: #fff;
                    transition: transform 1.2s ease-in-out;
                }
        
                    class="img__text m--up z-10 absolute w-full px-20 text-center 
                    
                    text-white transition-transform duration-1200 ease-in-out">

                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div
                    class="img__text m--in z-10 absolute w-full px-20 text-center text-white transition-transform duration-1200 ease-in-out">

                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in transform -translate-y-[72px]">Sign In</span>
                </div>
            </div>
            <div class="form sign-up transform translate-x-[-900px]">
                <h2 class="w-full text-2xl text-center">Create your Account</h2>
                <label class="label">
                    <span class="labelSpan">Name</span>
                    <input class="input" type="text" />
                </label>
                <label class="label">
                    <span class="labelSpan">Email</span>
                    <input class="input" type="email" />
                </label>
                <label class="label">
                    <span class="labelSpan">Password</span>
                    <input class="input" type="password" />
                </label>
                <button type="button" class=" mt-[40px] mb-[20px] bg-[#d4af7a] uppercase">Sign Up</button>

            </div>
        </div>
    </div>

    <script>
        // toggle on the signup to activate the animation
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
@endsection
