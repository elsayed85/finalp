<div class="modal-content" data-show-event-id="{{ $event->id }}">
    <div class="modal-header">
        <h5 class="modal-title">{{ $event->title }}</h5>
    </div>
    <div class="model-body">
        <p>{{ $event->description ?? 'No Notes' }}</p>
    </div>
</div>
