@extends('layouts')

@section('title', 'search')

@section('form')
<h3>顧客検索</h3>
{!!Form::open(['action'=>'SearchController@search', 'method'=>'get'])!!}
    <div class="form-group">
        {!!Form::label('text','顧客名:')!!}
        {!!Form::text('name',$word,['class'=>'form-control','placeholder'=>'店名を入力してください'])!!}
        {!!Form::label('tanto','営業担当:')!!}
        {!!Form::select('tanto', $tanto, $s_tanto, ['placeholder'=>'選択して下さい'])!!}
        {!!Form::label('gyosyu','業種:')!!}
        {!!Form::select('gyosyu', $gyosyu, $s_gyosyu, ['placeholder'=>'選択して下さい'])!!}
    </div>
    {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
{!!Form::close()!!}
@endsection

@section('content')
<div class='box'>
@if ($items != null)
    <table>
        <tr>
            <th>eigyo_tantou</th><th>kokyaku_name</th><th>kokyaku_name_kana</th><th>email</th>
            <th>password</th><th>gyosyu</th><th>area</th><th>big_area</th><th>mdl_area</th>
        </tr>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->eigyo_tantou}}</td><td>{{$item->kokyaku_name}}</td><td>{{$item->kokyaku_name_kana}}</td>
                    <td>{{$item->email}}</td><td>{{$item->password}}</td><td>{{$item->gyosyu}}</td><td>{{$item->area}}</td>
                    <td>{{$item->big_area}}</td><td>{{$item->mdl_area}}</td>
                </tr>
            @endforeach
    </table>
    {!! $items->links('pagination::default') !!}
@endif
</div>
@endsection
