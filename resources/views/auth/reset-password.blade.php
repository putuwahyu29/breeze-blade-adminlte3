<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">You are only one step a way from your new password, recover your password now.
                </p>

                <form method="POST" action="{{ route('password.store') }}">
                    @csrf
                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                    <div class="input-group mb-3">
                        <x-text-input id="password" placeholder="Email" type="email" name="email" required
                            autocomplete="username" :value="old('email', $request->email)" />
                        <x-icon-input icon="fas fa-envelope" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="input-group mb-3">
                        <x-text-input id="password" placeholder="Password" type="password" name="password" required
                            autocomplete="new-password" />
                        <x-icon-input icon="fas fa-lock" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="input-group mb-3">
                        <x-text-input id="password_confirmation" placeholder="Retype password" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                        <x-icon-input icon="fas fa-lock" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-primary-button>
                                {{ __('Change password') }}
                            </x-primary-button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}">{{ __('Login') }}</a>
                </p>
            </div>
        </div>
    </div>
</x-guest-layout>
