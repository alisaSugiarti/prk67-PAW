@extends('template')

@section('content')              
 <div class="container mt-4">
    <div class="profile card">
        <div class="profile-body">
            <div class="profile-bio">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="img-thumbnail md-margin-bottom-10" src="gambar/{{ $gambar }}">
                    </div>
                    <div class="col-md-7">
                        <h1 class="text-center"><strong>About Me</strong></h1>
                        <h2>{{$nama}}</h2>
                        <span><strong>Email : </strong>{{$email}}</span>
                        <span><strong>&nbsp; &nbsp; Alamat : </strong>{{$alamat}}</span>
                        <hr>
                        <h6><strong>Background</strong></h6>
                        <p>Nama saya Alisa Sugiarti, saya dari Nganjuk. saya anak pertama dari dua bersaudara. saya lulusan SDN Dawuhan 1, SMPN 1 Jatikalen, SMKN 1 Lengkoong, dan kini melanjutkan kuliah di Universitas Trunojoyo Madura Jurusan Teknik Informatika</p>
                        <h6><strong>Suka Duka Praktikum PAW</strong></h6>
                        <p>Saya sempat kesusahan dalam mengerjakan praktikum terakhir, tapi saya senang karena bisa eksplore materi baru yang belum pernah saya pelajari sebelumnya </p>
                    </div>
                </div>    
            </div>
    	</div>
    </div>
</div>                       
@endsection
  