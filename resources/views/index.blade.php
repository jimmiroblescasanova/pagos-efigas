@extends('layouts.main')

@section('content')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Pago vía PayPal</h3></div>
                            <div class="card-body">
                                <form action="{{ route('payments.index') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPaymentReference">Referencia de pago</label>
                                        <input class="form-control py-4" id="inputPaymentReference" type="text" name="paymentReference" placeholder="Ingrese la referencia de pago" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputRfc">RFC</label>
                                        <input class="form-control py-4" id="inputRfc" type="text" name="payerRfc" placeholder="Ingrese su RFC" />
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="conditionsCheckbox" type="checkbox" />
                                            <label class="custom-control-label" for="conditionsCheckbox">Acepto los términos y condiciones</label>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
{{--                                        <a class="small" href="password.html">Forgot Password?</a>--}}
                                        <button type="submit" class="btn btn-primary">Localizar pago</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
@stop