<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header p-2">
                <h5>Profile Information</h5>
            </div><!-- /.card-header -->
            <div class="card-body">
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>
                <form method="post" action="{{ route('profile.update') }}" class="form-horizontal">
                    @csrf
                    @method('patch')
                    <div class="form-group row">
                    <x-input-label for="name" :value="__('Name')" />
                      <div class="col-sm-10">
                        <x-text-input id="name" name="name" type="text" placeholder="Full Name" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <x-input-label for="email" :value="__('Email')" />
                        <div class="col-sm-10">
                            <x-text-input id="email" placeholder="Email" type="email" name="email" :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                    </div>
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="form-group row">
                            <p class="offset-sm-2 text-danger text-sm">
                                Your email address is unverified.<button form="send-verification" class="btn btn-link text-sm ">
                                    Click here to re-send the verification email.
                                </button>
                            </p>
                        </div>
                        @if (session('status') === 'verification-link-sent')
                            <p class="offset-sm-2 text-success text-sm ">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    @endif
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                        @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-success"
                        >{{ __('Saved.') }}</p>
                        @endif
                      </div>
                    </div>
                  </form>
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->