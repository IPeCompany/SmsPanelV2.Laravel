@extends('Smsir::components.index')
@section('body')
<div class="row m-1">
    <h3>ارسال پیام</h3>
</div>
<div class="row m-1">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-6">
                            <label for="mobiles">موبایل</label>
                            <span class="sm">هر شماره موبایل در یک خط</span>
                            <textarea
                                class="form-control"
                                id="mobiles"
                                name="mobiles"
                                rows="7"></textarea>
                        </div>
                        <div class="col-12"></div>
                        <div class="col-6">
                            <label for="message">پیام</label>
                            <textarea
                                class="form-control"
                                id="message"
                                name="message"
                                rows="3"
                            ></textarea>
                        </div>
                        <div class="col-12"></div>
                        <div class="col-3">
                            <button class="btn btn-primary" type="submit">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
