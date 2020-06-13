{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- profile.blade.phpの@yield('title')に'プロフィールの新規作成'を埋め込む --}}
@section('title', 'プロフィールの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale1">
        
        <title>My Profile</title>
    </head>
    <body>
        <h1>Profile screen</h1>
        <p> プロフィール 画面</p>
    </body>
</html>
@section('content')