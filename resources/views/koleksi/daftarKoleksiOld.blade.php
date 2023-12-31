<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>
 <!-- 
NAMA: MUHAMAD HUDANSAH
NIM: 6706223049 
KELAS: 46-03 
-->

 
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header"><a href="{{ route('koleksi.registrasi') }}" class="btn btn-icon btn-dark">Tambah</a></div>
            <!-- <div class="card-header"><a href="{{ route('koleksi.registrasi') }}" class="btn btn-icon btn-dark">Update</a></div> -->
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <script>
        $(document).on('click', '.view-detail', function () {
            var id = $(this).data('id');
            // Redirect ke rute infoKoleksi dengan parameter ID
            window.location.href = "{{ route('koleksi.infoKoleksi', '') }}/" + id;
        });
    </script>
@endpush
</x-app-layout>