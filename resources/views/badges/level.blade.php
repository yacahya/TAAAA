@switch($item)
    @case(0)
        <span class="badge badge-primary"> Desa</span>
        @break
        @case(1)
        <span class="badge badge-success"> Admin Capil</span>
        @break

    @default
        <span>Something went wrong, please try again</span>
@endswitch