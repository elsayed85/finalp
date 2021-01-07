<div class="modal-content" data-show-event-id="{{ $event->id }}">
    <div class="block block-themed block-transparent mb-0">
        <div class="block-header bg-primary-dark">
            <h3 class="block-title">
                {{ $event->title }}
            </h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                    <i class="si si-close"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <p>
                {{ $event->description ?? 'No Notes' }}
            </p>
        </div>
    </div>
</div>
