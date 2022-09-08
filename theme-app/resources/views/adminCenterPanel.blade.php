<section class="p-0 m-0 col-10 col-md-10 col-lg-10 col-xl-10 d-flex flex-wrap justify-content-start" style="min-height: 80vh">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">email</th>
            <th scope="col">name</th>
            <th scope="col">Кухня</th>
            <th scope="col">Итоговая цена</th>
            <th scope="col">Статус заказа</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <th scope="row">1</th>
                <td>{{$order['userEmail']}}</td>
                <td>{{$order['name']}}</td>
                <td>{{$order['kitchenConfigurations']}}</td>
                <td>{{$order['totalPrice']}}</td>
                <td>{{$order['status']}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>