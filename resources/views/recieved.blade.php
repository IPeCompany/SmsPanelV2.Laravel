@extends('Smsir::components.index')
@section('body')
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
            </div>
        </div>
    </div>
</div>
@stop
