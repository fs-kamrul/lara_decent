@props([
    'type' => 'primary',
    'content' => null,
])
@switch($type)
    @case('info')
        @pushOnce('footer')
            <x-kamruldashboard::modal.action
                id="global-info-modal"
                type="{{ $type }}"
            />
        @endPushOnce
    @break

    @case('danger')
        @pushOnce('footer')
            <x-kamruldashboard::modal.action
                id="global-danger-modal"
                type="{{ $type }}"
            />
        @endPushOnce
    @break

    @case('warning')
        @pushOnce('footer')
            <x-kamruldashboard::modal.action
                id="global-warning-modal"
                type="{{ $type }}"
            />
        @endPushOnce
    @break
@endswitch
