<div class="email">
    <h2 class="email__ttl">メールを作成</h2>
    <form action="/" method="post">
    @csrf
        <label>
            件名：
            <input name="title" type="text">
        </label>
        <br>
        <label>
            テキスト：
            <textarea name="text" id="text" cols="30" rows="10" placeholder="こんにちは"></textarea>
        </label>
        <button>送信</button>
    </form>
</div>