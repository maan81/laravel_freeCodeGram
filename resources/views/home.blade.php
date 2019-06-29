@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fktm7-1.fna.fbcdn.net/vp/2041d815426b6d7d2c8cb94837574812/5DB47138/t51.2885-19/s150x150/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fktm7-1.fna.fbcdn.net" class="rounded-circle ">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5">
                    <strong>153</strong> posts
                </div>
                <div class="pr-5">
                    <strong>23k</strong> followers
                </div>
                <div class="pr-5">
                    <strong>212</strong> following
                </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div>
                <a href="#">{{ $user->profile->url ?? 'N/A' }}</a>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fktm7-1.fna.fbcdn.net/vp/bdc3f4094d6c928b395113a4b9d206d6/5DBD4AB8/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/65285896_859971694372408_6053802884198789538_n.jpg?_nc_ht=instagram.fktm7-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fktm7-1.fna.fbcdn.net/vp/f9ebd6b08361db6be1612e8550f2cbc7/5DB89C39/t51.2885-15/sh0.08/e35/c1.0.747.747/s640x640/64399732_342632753086513_7474261410690496163_n.jpg?_nc_ht=instagram.fktm7-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fktm7-1.fna.fbcdn.net/vp/0de6a4a1c3ecf3a679375021c0d67f62/5DAEF247/t51.2885-15/sh0.08/e35/c0.113.933.933a/s640x640/64608541_325913674993611_762834003623133469_n.jpg?_nc_ht=instagram.fktm7-1.fna.fbcdn.net" class="w-100">
        </div>
    </div>
</div>
@endsection
