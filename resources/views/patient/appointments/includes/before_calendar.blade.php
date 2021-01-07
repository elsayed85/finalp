<div class="row">
    <div class="col-md-6">
        <h1><b>{{ $startsAt->format('Y-m-d') }} - {{ $endsAt->format('Y-m-d') }}</b></h1>
    </div>
    <div class="col-md-6">
        <button type="button" class="btn btn-rounded btn-noborder btn-success min-width-125 mb-10" data-toggle="modal"
            data-target="#add_new_event_model">Add Event</button>

        <button type="button" class="btn btn-rounded btn-noborder btn-success min-width-125 mb-10"
            wire:click="goToPreviousMonth">
            <i class="si si-arrow-left fa-1x"></i>
        </button>

        <button type="button" class="btn btn-rounded btn-noborder btn-success min-width-125 mb-10"
            wire:click="goToCurrentMonth">
            Current Month
        </button>

        <button type="button" class="btn btn-rounded btn-noborder btn-success min-width-125 mb-10"
            wire:click="goToNextMonth">
            <i class="si si-arrow-right fa-1x"></i>
        </button>
    </div>
</div>


<div wire:ignore.self class="modal fade" id="add_new_event_model" tabindex="-1" role="dialog"
    aria-labelledby="add_new_event_model" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popin" role="document">
        <div class="modal-content">
            <div class="block block-themed">
                <div class="block-header bg-gd-leaf">
                    <h3 class="block-title">Add Event</h3>
                </div>
                <div class="block-content">
                    <form id="add_event_form">
                        <div class="form-group row">
                            <label class="col-12" for="title">Event Title</label>
                            <div class="col-12">
                                <input type="text" class="form-control" id="title" wire:model="event_title"
                                    placeholder="Enter event title..">
                                @error('event_title')
                                <div class="invalid-feedback animated fadeInDown">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="notes">Notes</label>
                            <div class="col-12">
                                <textarea class="form-control" id="notes" wire:model="event_notes" rows="6"
                                    placeholder="Content.."></textarea>
                                @error('event_notes')
                                <div class="invalid-feedback animated fadeInDown">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12" for="event_scheduled_at">Scheduled At</label>
                            <div class="col-12">
                                <input type="text" class="js-flatpickr form-control bg-white" id="event_scheduled_at"
                                    wire:model="event_scheduled_at" data-enable-time="true">
                                @error('event_scheduled_at')
                                <div class="invalid-feedback animated fadeInDown">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <button wire:click.prevent="addEvent" type="submit" class="btn btn-alt-primary">
                                <i class="fa fa-check mr-5"></i> Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
