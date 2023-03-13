<h1>ini halaman guru</h1>
<br>
<form action="/auth/logout" method="POST">
    @csrf
    <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
  </form>

  @foreach ($kelas as $item)
    <a href="/kelas/{{ $item->id }}" type="button">{{ $item->nama_kelas }}</a>    
  @endforeach
  {{-- <a href="/kelas/{kelas}" type="button">show</a> --}}