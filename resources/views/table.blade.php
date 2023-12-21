<!DOCTYPE html>
<html lang="">
<head>
    <style>
        .button {
            background-color: rgba(19, 14, 68, 0.6);
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>
    <body>
        <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Active</th>
            <th>Sort</th>
            <th>Панель управления</th>
        </tr>
            @foreach ($currency as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->active}}</td>
                    <td>{{$item->sort}}</td>
                    <td>
{{--                        <a href="{{route('currency.destroy', ['id'=>$item->id])}}" --}}
{{--                           class="btn btn-xs btn-info pull-right">--}}
{{--                            Удалить--}}
{{--                        </a>--}}
                        <form action="{{route('currency.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="button">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

    </table>
    <form action="{{route('currency.store')}}" method="POST">
        @csrf
        <label for="name">Имя</label>
        <input type="text" name="name" value="">
        <br>

        <label for="name">Цена</label>
        <input type="text" name="price" value="">
        <br>

        <label for="name">Чекбокс</label>
        <input type="checkbox" name="active" value="">
        <br>

{{--        <label for="name">Сорт</label>--}}
{{--        <input type="text" name="title" value="">--}}
        <input type="submit">
    </form>
    </body>
</html>
