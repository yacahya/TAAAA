@switch($item)
    @case(0)
        <span class="badge badge-primary"> Baru</span>
        @break
        @case(1)
        <span class="badge badge-success"> Selesai</span>
        @break
        @case(2)
        <span class="badge badge-warning"> diTolak</span>
        @break

    @default
        <span>Something went wrong, please try again</span>
@endswitch