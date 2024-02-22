@extends('layouts/layouts')

@section('content')
    <div class="cont font-kode">
        <div class="form sign-in transition-transform duration-1200 ease-in-out transform translate-x-640">
            <h2 class="w-full text-2xl text-center">Welcome</h2>
            {{-- form section here --}}
            <form action="{{ route('signInCommand') }}}" method="POST">
                @csrf

                <label class="label">
                    <span class="labelSpan">Email</span>
                    <input class="input" type="email" name="email" value="{{ old('email') }}" />
                    <small style="color: red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>
                </label>

                <label class="label">
                    <span class="labelSpan">Password</span>
                    <input class="input" type="password" name="password" value="{{ old('password') }}" />
                    <small style="color: red">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </small>
                </label>

                <p class="mt-[15px] text-center text-sm text-[#cfcfcf]">Forgot password?</p>
                <button type="submit" class=" mt-[40px] mb-[20px] bg-[#d4af7a] uppercase">Sign In</button>
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
                    <span
                        class="m--up absolute left-0 top-0 flex justify-center items-center w-full h-full transform duration-1000">Sign
                        Up</span>
                    <span
                        class="m--in absolute left-0 top-0 flex justify-center items-center w-full h-full  duration-1000 transform -translate-y-[72px]">Sign
                        In</span>
                </div>
            </div>
            <div class="form sign-up transform translate-x-[-900px]">

                <form action="{{ route('SignUpCommand') }}" method="post">
                    @csrf
                    <h2 class="w-full text-2xl text-center">Create your Account</h2>
                    <label class="label">
                        <span class="labelSpan">Your Name</span>
                        <input name="name" class="input" type="text" value="{{ old('name') }}" />
                        <small style="color: red">
                            @error('name')
                                {{$message}}
                            @enderror
                        </small>
                    </label>
                    <label class="label">
                        <span class="labelSpan">Email</span>
                        <input class="input" type="email" name="email" value="{{ old('email') }}" />
                        <small style="color: red">
                            @error('email')
                                {{$message}}
                            @enderror
                        </small>
                    </label>
                    <label class="label">
                        <span class="labelSpan">Password</span>
                        <input class="input" type="password" name="password" value="{{ old('password') }}" />
                        <small style="color: red">
                            @error('password')
                                {{$message}}
                            @enderror
                        </small>
                    </label>
                    <button type="submit" class=" mt-[40px] mb-[20px] bg-[#d4af7a] uppercase">Sign Up</button>

                </form>
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
