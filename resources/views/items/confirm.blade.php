@extends('layouts.logged_in')
 
@section('title', $title)
 
@section('content')
    <div>
        <p>商品名</p>
        {{ $item->name }}
    </div>
    <div>
        <p>画像</p>
        <img src="{{ asset('/storage/' . $item->image) }}">
    </div>
    <div>
        <p>カテゴリ</p>
        {{ $item->category->name }}
    </div>
    <div>
        <p>価格</p>
        {{ $item->price }}
    </div>
    <div>
        <p>説明</p>
        {{ $item->description }}
    </div>
    <div>
        <form method="post" action="{{ route('items.store_order', $item) }}">
            @csrf
            <input type="submit" value="内容を確認し､購入する">
        </form>
    </div>
@endsection