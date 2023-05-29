@props(['name', 'show' => false, 'modal_title' => '', 'modal_body' => '', 'modal_footer' => ''])

<div class="modal fade" id="{{ $name }}" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $modal_title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $modal_body }}
            </div>
            <div class="modal-footer">
                {{ $modal_footer }}
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
