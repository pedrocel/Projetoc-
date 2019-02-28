@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="m-portlet m-portlet--tab">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                        <i class="la la-gear"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                            Pill Input Style
                        </h3>
                    </div>
                </div>
            </div>
            <!--begin::Form-->
            <form class="m-form m-form--fit m-form--label-align-right">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group m--margin-top-10">
                        <div class="alert m-alert m-alert--default" role="alert">
                            The example form below demonstrates common HTML form elements in pill and air(box shadowed) styles:
                        </div>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control m-input m-input--air m-input--pill" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <span class="m-form__help">We'll never share your email with anyone else.</span>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control m-input m-input--air m-input--pill" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group m-form__group">
                        <label for="exampleSelect1">Example select</label>
                        <select class="form-control m-input m-input--air m-input--pill" id="exampleSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="exampleSelect2">Example multiple select</label>
                        <select multiple="" class="form-control m-input m-input--air m-input--pill" id="exampleSelect2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group m-form__group">
                        <label for="exampleTextarea">Example textarea</label>
                        <textarea class="form-control m-input m-input--air m-input--pill" id="exampleTextarea" rows="3"></textarea>
                    </div>
                </div>
                <div class="m-portlet__foot m-portlet__foot--fit">
                    <div class="m-form__actions">
                        <button type="reset" class="btn btn-brand">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>
            <!--end::Form-->            
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
