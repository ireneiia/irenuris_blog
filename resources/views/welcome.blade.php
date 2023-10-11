@extends('dashboard.estructura.basica')
@section('contenido')
<!--LOGO-->
@include('dashboard.fragmentos.menu')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"> <img src="/imagen/logo_1.png" alt="logo" /></div>
    <div class="col-md-4"></div>
</div>
<hr class="hr" />
<!--CUERPO DE NOTICIAS 1-->
<!--
<div class="row">
    <div class="col-md-3 sombra redondeada altura espacio" >
        <div class="row">
            <div class="col-md-12 espacio3 altura2">
                <h5>¡¡Nueva serie sobre los merodeadores!!</h5>
            </div>
        </div>
        <hr class="hr" />
        <div class="row">
            <div class="col-md-12 espacio3 text-justify">
                <p>
                    Los Merodeadores eran el grupo formado por Peter Pettigrew, 
                    Remus Lupin, Sirius Black y James Potter, el padre de Harry. 
                    Juntos crearon el Mapa del Merodeador<a href="#">.....leer mas</a></p>
            </div>
        </div>
    </div>
    <div class="col-md-3 sombra redondeada altura espacio2">
        <div class="row">
            <div class="col-md-12 espacio3 altura2">
                <h5>Hogwarts Legacy</h5>
            </div>
        </div>
        <hr class="hr" />
        <div class="row">
            <div class="col-md-12 espacio3 text-justify">
                <p>
                    Hogwarts Legacy es un juego de rol de acción de 2023 desarrollado 
                    por Avalanche Software y publicado por Warner Bros. Games bajo su
                     sello Portkey Games. El juego está ambientado en el<a href="#">.....leer mas</a></p>
            </div>
        </div>
    </div>
    <div class="col-md-3 sombra redondeada altura espacio2">
        <div class="row">
            <div class="col-md-12 espacio3 altura2">
                <h5>Todo sobre el tour de Harry Potter</h5>
            </div>
        </div>
        <hr class="hr" />
        <div class="row">
            <div class="col-md-12 espacio3 text-justify">
                <p> Estudios Harry Potter en Londres Tour guiado de Harry Potter en
                    español en Londres.Estamos hablando de lugares como la estación King's Cross,
                    donde se ubica el andén 9¾, o Leadenhall Market, donde se<a href="#">.....leer mas</a></p>
            </div>
        </div>
    </div>
</div>-->
<!--CUERPO DE NOTICIAS 1-->
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 sombra redondeada altura espacio" style="height: auto;" >
        <!--esto es lo que tendria que repetir-->
        <div class = "row">
            <div class="col-md-4 espacio4">
                <img src="/imagen/merodeadores.jpeg" alt="logo" style="width: 100%;" />
            </div>
            <div class="col-md-7 espacio4">
                <h5>¡¡Nueva serie sobre los merodeadores!!</h5>
                <p>Los Merodeadores eran el grupo formado por Peter Pettigrew, 
                    Remus Lupin, Sirius Black y James Potter, el padre de Harry. 
                    Juntos crearon el Mapa del Merodeador<a href="#">.....leer mas</a></p>
            </div>
        </div>
        <hr class="hr" />
         <!---->
        <div class = "row">
            <div class="col-md-4 espacio4">
                <img src="/imagen/hl.jpeg" alt="logo" style="width: 100%;" />
            </div>
            <div class="col-md-7 espacio4">
                <h5>Hogwarts Legacy</h5>
                <p>Hogwarts Legacy es un juego de rol de acción de 2023 desarrollado 
                    por Avalanche Software y publicado por Warner Bros. Games bajo su
                     sello Portkey Games. El juego está ambientado en el<a href="#">.....leer mas</a></p>
            </div>
        </div>
        <hr class="hr" />
        <!---->
        <div class = "row">
            <div class="col-md-4 espacio4">
                <img src="/imagen/tour.jpeg" alt="logo" style="width: 100%;" />
            </div>
            <div class="col-md-7 espacio4">
                <h5>Todo sobre el tour de Harry Potter</h5>
                <p> Estudios Harry Potter en Londres Tour guiado de Harry Potter en
                    español en Londres.Estamos hablando de lugares como la estación King's Cross,
                    donde se ubica el andén 9¾, o Leadenhall Market, donde se<a href="#">.....leer mas</a></p>
            </div>
        </div>
        <hr class="hr" />
    </div>
    <div class="col-md-1"></div>
</div>

