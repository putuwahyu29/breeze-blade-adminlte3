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
