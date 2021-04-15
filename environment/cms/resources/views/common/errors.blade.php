<!-- resources/views/common/errors.blade.php -->
<!--エラー表示用共通テンプレート-->
<!--$errors：全てのベース・パーツテンプレートで使用できる特殊変数-->
@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="alert alert-danger">
        <div><strong>入力した文字を修正してください。</strong></div> 
        <div>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    </div>
@endif