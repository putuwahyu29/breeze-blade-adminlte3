<x-guest-layout>
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">This is a secure area of the application. Please confirm your password before
                    continuing.</p>
                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <x-text-input id="password" placeholder="Password" type="password" name="password" required
                            autocomplete="current-password" />
                        <x-icon-input icon="fas fa-lock" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <x-primary-button>
                                {{ __('Confirm') }}
                            </x-primary-button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</x-guest-layout>
