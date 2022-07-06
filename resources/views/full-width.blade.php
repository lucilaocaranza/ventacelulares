<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Chillaid | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left">
      <!-- ################################################################################################ -->
      <h1 class="logoname"><a href="../index.html">Cami  y <span>D</span>yl</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right">
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="../index.html">Inicio</a></li>
        <li class="active"><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="gallery.html">Gallery</a></li>
            <li class="active"><a href="full-width.html">Full Width</a></li>
          </ul>
        </li>
        <li><a href="#">Proximamente</a></li>
        <li><a href="#">Proximamente</a></li>
        <li><a href="#">Proximamente</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Precios</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">
      <!-- ################################################################################################ -->
      <h1>Inicio - Precios de los productos anteriormente mencionados</h1>
      <p>Los productos anteriormente mencionados tienen un precio fijo no negociable, porfavor no reclame al soporte sobre esto</p>
      <p>Cualquier duda o consulta sobre el stock o envio de los dichos, hacer un ticket al Email: Dylchousal@gmail.com</p>
      <p>Patata</a>.</p>
      <p>Cebolla</p>
      <p>Pelota</p>
      <h1>Table(s)</h1>
      <br>
      <br>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Marca</th>
              <th>Modelo</th>
              <th>Precio</th>
              <th>Stock</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($celulares as $celular)

            <tr>
              <td>{{$celular->id}}</td>
              <td><a href="#">{{$celular->marca}}</a></td>
              <td>{{$celular->modelo}}</td>
              <td>{{$celular->precio}}</td>
              <td>{{$celular->stock}}</td>


            <td>

                <form action="/celular/{{ $celular->id }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" value="Eliminar" onclick="return confirm('Esta seguro que quiere eliminar???')">
                </form>

            </td>


            <td>

                    <form action="/celular/{{ $celular->id }}/edit" method="get">

                <input type="submit" value="Modificar" >
                 </form>

            </td>
        </tr>

            @endforeach


        </tbody>

        </table>
      </div>
      <div id="comments">
        <br><br><h2>Reseñas de compradores</h2>
        <ul>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                De <a href="#">Dylan</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Lunes, 13<sup></sup> Noviembre 2055 @16:23:00</time>
              </header>
              <div class="comcont">
                <p>La verdad que esta pagina es una verga</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                De <a href="#">Luli y Thiago</a>
                </address>
                <time datetime="2055-07-06T08:15+00:00">Sabado, 25<sup></sup> Julio 2055 @08:15:00</time>
              </header>
              <div class="comcont">
                <p>Nosotros opinamos que la pagina esta bien, pero bien culera jajan't</p>
              </div>
            </article>
          </li>
          <li>
            <article>
              <header>
                <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                <address>
                De <a href="#">Cami</a>
                </address>
                <time datetime="2045-04-06T08:15+00:00">Martes, 7<sup></sup> Junio 2022 @19:09:00</time>
              </header>
              <div class="comcont">
                <p>Yo opino que me encanta hacer dibujos pornograficos</p>
              </div>
            </article>
          </li>
        </ul>
