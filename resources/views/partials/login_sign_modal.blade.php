<div id="modal-login" class="modal fade" tabindex="-1" role="dialog"
     aria-labelledby="LargeModalForm" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row" style="margin-right: -4em;">
                <div class="col-1 col-md-1 line-vertial-modal" >
                    <img src="{{asset('img/icons/logo.png')}}" alt="logo">
                </div>
                <div class="col-10 col-md-10">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h2>Iniciar Sesión</h2>
                            <form action="" class="needs-validation py-2" novalidate>
                                <div class="form-group">
                                    <label for="email-login">E-mail</label>
                                    <input id="email-login" type="email"
                                           class="form-control"
                                           placeholder="ejemplo@ejemplo.com" required>
                                    <div class="invalid-feedback">
                                        Campo obligatorio
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pass-login">Contraseña</label>
                                    <input id="pass-login" type="password"
                                           class="form-control"
                                           required>
                                    <div class="invalid-feedback">
                                        Contraseña requerida
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 col-md-3"></div>
                                    <div class="col-12 col-md-9">
                                        <button type="submit" class="btn btn-pink">Iniciar Sesión</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--endmoallogin-->

<!--modalSignup-->

<div id="modal-sign" class="modal fade" tabindex="-1" role="form"
     aria-labelledby="LargeModalForm" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row " style="margin-right: -4em;">
                <div class="col-1 col-md-1 line-vertial-modal">
                    <img src="{{asset('img/icons/logo.png')}}"  style="width: 3.5em;" alt="logo">
                </div>
                <div class="col-10 col-md-10">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h2>Registro</h2>
                        <form class="needs-validation" novalidate>
                            <div class="form-row py-2">
                                <div class="col-6 col-md-6">
                                    <lable for="nombre-sign">Nombres</lable>
                                    <input id="nombre-sign" name="nombre-sing" type="text" required
                                    class="form-control">
                                    <div class="invalid-feedback">
                                        Nombre requerido. El nombre solo debe contener letras
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <lable for="apellidos">Apellidos</lable>
                                    <input id="apellidos-sign"  name="apellidos-sing" type="text" required
                                           class="form-control">
                                    <div class="invalid-feedback">
                                        Apellidos requeridos. Los apellidos solo debe contener letras
                                    </div>
                                </div>
                            </div>
                            <div class="form-row py-2">
                                <div class="col-12">
                                    <label for="email-sign">Correo</label>
                                    <input id="email-sign"  type="email"
                                    class="form-control" required>
                                    <div class="invalid-feedback">
                                        El correo es obligatorio
                                    </div>
                                </div>

                            </div>

                            <div class="form-row py-2">
                                <div class="col-6 col-md-6">
                                    <lable for="pass-sign">Constraseña</lable>
                                    <input id="pass-sign" name="pass-sing" type="password" required
                                           class="form-control">
                                    <div class="invalid-feedback">
                                        Contraseña requerida
                                    </div>
                                </div>

                                <div class="col-6 col-md-6">
                                    <lable for="passconf-sign">Confirmar contraseña</lable>
                                    <input id="passconf-sign"  name="passconf-sign" type="password" required
                                           class="form-control">
                                    <div class="invalid-feedback">
                                        Favor de confirmar la contraseña
                                    </div>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-1 col-md-5"></div>
                                <div class="col-12 col-md-6">
                                    <button type="submit" class="btn btn-pink">Registrar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

