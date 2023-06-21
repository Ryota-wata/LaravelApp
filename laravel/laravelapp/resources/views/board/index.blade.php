@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
  @parent
  ボード・ページ
@endsection

@section('content')
  <table>
    <tr><th>Data</th><th>Name</th><tr>
    @foreach ($items as $item)
      <tr>
        <td>{{$item->getData()}}</td>
        <td>{{$item->person->name}}</td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
  copylight 2023 ryota1992
@endsection