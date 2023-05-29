<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Thanks for signing up! Before getting started, could you verify your email
                    address by clicking on the link we just emailed to you? If you didn't receive the email, we will
                    gladly send you another.</p>
                @if (session('status') == 'verification-link-sent')
                    <div class="text-succcess">
                        {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <x-primary-button>
                                {{ __('Resend Verification Email') }}
                            </x-primary-button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-link">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
