@extends('body')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-12">
                            <label for="mobiles">موبایل</label>
                            <span>هر شماره موبایل در یک خط</span>
                        </div>
                        <div class="col-12">
                            <textarea
                                id="mobiles"
                                name="mobiles"
                                rows="7">
                            </textarea>
                        </div>
                        <div class="col-12">
                            <label for="message">پیام</label>
                        </div>
                        <div class="col-12">
                            <textarea
                                id="message"
                                name="message"
                                rows="3"
                            >
                            </textarea>
                        </div>
                        <button class="btn primary" type="submit">ارسال</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
