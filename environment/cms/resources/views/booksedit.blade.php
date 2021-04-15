@extends('layouts.app')
@section('content')
<div class="row container">
    <div class="col-md-12">
    @include('common.errors')
    <form action="{{ url('books/update') }}" method="POST">
        <!-- item_category -->
        <div class="form-group">
           <label for="category">カテゴリ</label>
           <input type="text" name="item_category" class="form-control" value="{{$book->item_category}}">
        </div>
        <!--/ item_category -->
        
        <!-- item_problem -->
        <div class="form-group">
           <label for="problem">困ったこと</label>
           <input type="text" name="item_problem" class="form-control" value="{{$book->item_problem}}">
        </div>
        <!--/ item_problem -->
        
        <!-- item_coping -->
        <div class="form-group">
           <label for="coping">対処法</label>
        <input type="text" name="item_coping" class="form-control" value="{{$book->item_coping}}">
        </div>
        <!--/ item_coping -->
        
        <!-- item_result -->
        <div class="form-group">
           <label for="result">結果</label>
        <input type="text" name="item_result" class="form-control" value="{{$book->item_result}}">
        </div>
        <!--/ item_result-->
        
        <!-- added -->
        <div class="form-group">
           <label for="added">登録日</label>
            <input type="date" name="added" class="form-control" value="{{$book->added}}"/>
        </div>
        <!--/ added -->
        
        <!-- Saveボタン/Backボタン -->
        <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link pull-right" href="{{ url('/') }}">
                Back
            </a>
        </div>
        <!--/ Saveボタン/Backボタン -->
         
         <!-- idを送信 -->
         <input type="hidden" name="id" value="{{$book->id}}">
         
         <!-- CSRF -->
         @csrf
         <!--/ CSRF -->
         
    </form>
    </div>
</div>
@endsection
