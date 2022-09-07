<section class="d-flex justify-content-center align-items-center row col-12" style="min-height: 80vh">
    <h1 class="text-center">Форма обратной связи</h1>
    <form class="col-12 col-md-8 col-lg-8" method="post" action='order/'>
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email для связи с вами</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Мы не присылаем рекламу и спам</div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Дополнительная информация</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    <p></p>
</section>
