@extends('Smsir::components.index')
@section('body')
<div class="row">
    <h3>پیام های دریافتی امروز</h3>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <th>شماره</th>
                        <th>موبایل</th>
                        <th>پیام</th>
                        <th>تاریخ</th>
                    </tr>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->Number }}</td>
                            <td>{{ $message->Mobile }}</td>
                            <td>{{ $message->MessageText }}</td>
                            <td>{{ $message->ReceivedDateTime }}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="row">
                    @isset($next_page)
                        <a class="btn btn-outline-light" href="{{ route('todaysent',[ 'page_num' => $next_page ]) }}">بعدی</a>
                    @endisset
                    @isset($previous_page)
                        <a class="btn btn-outline-light" href="{{ route('todaysent',[ 'page_num' => $previous_page ]) }}">قبلی</a>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
@stop
