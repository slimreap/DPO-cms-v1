@push('scripts')
<script>
    
    var toggles = document.querySelectorAll('.toggle-column');
    for (var i = 0; i < toggles.length; i++) {
        toggles[i].addEventListener('click', function() {
            var rowId = this.closest('tr').dataset.rowId;
            Livewire.emit('toggle-is-approved', rowId);
        }, { once: true });
    }
</script>
@endpush