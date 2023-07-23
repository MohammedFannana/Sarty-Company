@extends('layouts.sarty_front')

<style>
    .form {
        width: 100%;
        background-color: #eee;
        border-radius: 5px;
    }

    .form1 {
        text-align: right;
        padding-right: 25px;
        padding-left: 25px;
        padding-top: 20px;
        padding-bottom: 26px;
    }

    .name {
        margin: 10px 0px;
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

@section('content')

<div class="introduction container-fluid text-center text-white p-4" style="background-color: #085faa; box-sizing:none;">

    <h5 class="mb-3">تواصل معنا</h5>
    <p> {{ $company->first()->contact_introduction }}
    </p>

</div>

<x-alert type="success" />

<div class="section" style="padding-top:50px; padding-bottom:50px">
    <div class="row">

        <div class="col-lg-5" data-aos="zoom-in-up" data-aos-duration="1000">
            <div class="form">
                <form class="form1" action="{{route('contactStore')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <x-form.input label="اسمك الشخصي " placeholder="ادخل اسمك الشخصي" name="name" type="text" />

                    </div>
                    <div class="mb-3">
                        <x-form.input label=" رقم الهاتف " placeholder="ادخل رقم الهاتف" name="phoneNumber" type="phone" />

                    </div>
                    <div class="mb-3">
                        <x-form.input label="بريدك الالكتروني " placeholder="ادخل بريدك الالكتروني" name="email" type="email" />

                    </div>

                    <div class="form-group">
                        <x-form.textarea label="رسالتك" name="message">{{old('message')}}</x-form.textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">إرسال</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="col-lg-5" data-aos="zoom-in-up" data-aos-duration="1000">
            <div style="width: 100%;">
                <img class="bord" src="photo/kar.jpg" alt="" width="100%" height="420px">
            </div>
        </div>
    </div>
</div>

@endsection