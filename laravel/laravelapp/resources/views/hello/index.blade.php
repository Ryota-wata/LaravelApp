@extends('layouts.helloapp')
<style>
  .pagination { font-size:10pt; }
  .pagination li { display:inline-block }
  tr th a:link { color: white; }
  tr th a:visited { color: white; }
  tr th a:hover { color: white; }
  tr th a:active { color: white; }
</style>

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  @if (Auth::check())
    <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
  @else
    <p>※ログインしていません。(<a href="/login">ログイン</a>|
      <a href="/register">登録</a>)</p>
  @endif
  <table>
    <tr>
      <th><a href="/hello?sort=name">Name</a></th>
      <th><a href="/hello?sort=mail">Mail</a></th>
      <th><a href="/hello?sort=age">Age</a></th>
    </tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->mail}}</td>
        <td>{{$item->age}}</td>
      </tr>
    @endforeach
  </table><br>
  {{$items->appends(['sort'=>$sort])->links()}}
@endsection

@section('footer')
  copylight 2023 ryota1992
@endsection