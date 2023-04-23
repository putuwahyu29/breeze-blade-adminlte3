{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="input-group mb-3">
                    <x-text-input id="email" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-icon-input icon="fas fa-envelope"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>
              <div class="row">
                <div class="col-12">
                    <x-primary-button>
                        {{ __('Request new password') }}
                    </x-primary-button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <p class="mt-3 mb-1">
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
</x-guest-layout>
