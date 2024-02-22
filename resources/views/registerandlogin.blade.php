@extends('layouts/layouts')

@section('content')


    <div class="cont font-kode">
        <div class="form sign-in transition-transform duration-1200 ease-in-out transform translate-x-640">
            <h2 class="w-full text-2xl text-center">Welcome</h2>
            <form action="signInCommand" method="post">
                <label class="label">
                    <span class="labelSpan">Email</span>
                    <input class="input" type="email" name="email"/>
                </label>
    
                <label class="label">
                    <span class="labelSpan">Password</span>
                    <input class="input" type="password" />
                </label>
                
                <p class="mt-[15px] text-center text-sm text-[#cfcfcf]">Forgot password?</p>
                <button type="button" class=" mt-[40px] mb-[20px] bg-[#d4af7a] uppercase">Sign In</button>
            </form>

        </div>
        <div class="sub-cont">
            <div class="img">
                <div
                    class="img__text m--up z-10 absolute w-full top-12 text-center text-white transition-transform duration-1000 px-5 ease-in-out">

                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div
                    class="img__text m--in z-10 absolute w-full top-12 text-center text-white transition-transform duration-1000 px-5 ease-in-out">

                    <h3>If you already has an account, just sign in.<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up absolute left-0 top-0 flex justify-center items-center w-full h-full transform duration-1000">Sign Up</span>
                    <span class="m--in absolute left-0 top-0 flex justify-center items-center w-full h-full  duration-1000 transform -translate-y-[72px]">Sign In</span>
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
