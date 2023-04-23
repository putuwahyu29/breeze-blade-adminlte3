{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-guest-layout>
    <div class="register-box">
        <div class="card card-outline card-primary">
          <div class="card-header text-center">
            <a href="index2.html" class="h1"><b>Admin</b>LTE</a>
          </div>
          <div class="card-body">
            <p class="login-box-msg">Register a new membership</p>
            <form method="POST" action="{{ route('register') }}" novalidate>
              @csrf
              <div class="input-group mb-3">
                <x-text-input id="name" type="text" name="name" placeholder="Full Name" :value="old('name')" required autofocus autocomplete="name" />
                <x-icon-input icon="fas fa-user"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>
              <div class="input-group mb-3">
                <x-text-input id="email" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-icon-input icon="fas fa-envelope"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="input-group mb-3">
                <x-text-input id="password" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
                <x-icon-input icon="fas fa-lock"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>
              <div class="input-group mb-3">
                <x-text-input id="password_confirmation"  placeholder="Retype password" type="password" name="password_confirmation"  required autocomplete="new-password" />
                <x-icon-input icon="fas fa-lock"/>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                    I agree to the <a href="#">terms</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <x-primary-button>
                    {{ __('Register') }}
                </x-primary-button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <a class="text-center" href="{{ route('login') }}">
              {{ __('I already have a membership') }}
          </a>
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
</x-guest-layout>
