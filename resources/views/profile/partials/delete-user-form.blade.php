<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header p-2">
                <h5>Delete Account</h5>
            </div><!-- /.card-header -->
            <div class="card-body">
                <x-danger-button data-toggle="modal" data-target="#confirm-user-deletion">
                    {{ __('Delete Account') }}
                </x-danger-button>
                <x-modal name="confirm-user-deletion">
                    <x-slot name="modal_title">
                        {{ __('Are you sure you want to delete your account?') }}
                    </x-slot>
                    <x-slot name="modal_body">
                        <form method="post" action="{{ route('profile.destroy') }}">
                            @csrf
                            @method('delete')
                            <x-text-input id="password" name="password" type="password" placeholder="{{ __('Password') }}"
                                />
                            <x-input-error :messages="$errors->userDeletion->get('password')" />
                    </x-slot>
                    <x-slot name="modal_footer">
                        <x-secondary-button data-dismiss="modal">
                            {{ __('Cancel') }}
                        </x-secondary-button>
                        <x-danger-button class="ml-3">
                            {{ __('Delete Account') }}
                        </x-danger-button>
                        </form>
                    </x-slot>
                </x-modal>
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