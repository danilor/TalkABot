@extends('start.template')
@section("content")
    <p>
        Welcome to TalkABot. Write something
    </p>

    <form>
        <div class="form-group">
            <input type="text" name="content" id="content" class="form-control" placeholder="Escribe algo" aria-describedby="helpContent">
            <small id="helpContent" class="text-muted">El texto que le quieres enviar al robot</small>
        </div>

            <button type="submit" class="btn btn-primary">Enviar</button>


        <div id="responses">
            <div class="col-xs-12 bot text-line">

                    <div class="span col-xs-12 col-sm-12 col-md-3 col-lg-2">
                        BOT
                    </div>
                    <div class="text col-xs-12 col-sm-12 col-md-9 col-lg-10">
                        Hola. Soy TalkABot. Fui construido con el lenguaje de programación PHP y estoy en proceso de desarrollo.
                    </div>
            </div>
            <div class="col-xs-12">
                <hr />
            </div>

        </div>

    </form>
@stop