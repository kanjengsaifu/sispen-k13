<ul class="nav nav-stacked nav-pills">
	<li><a href="#">Home</a></li>
	<li><a href="#">Absensi</a></li>
	<li><a href="#">Nilai Kognitif</a></li>
	<li><a href="#">Nilai Sikap</a></li>
	<li><a href="#">Nilai Keterampilan</a></li>
	@if(Auth::user()->isAdmin())
	<li class="nav-divider"></li>
	<li><a href="{{ route('app.guru.index') }}">Guru</a></li>
	<li><a href="{{ route('app.siswa.index') }}">Siswa</a></li>
	<li><a href="{{ route('app.pelajaran.index') }}">Pelajaran</a></li>
	@endif
</ul>