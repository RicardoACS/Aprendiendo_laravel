<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            .active{
                text-decoration: none;
                color: green;
            }
            .error{
                color:red;
                font-size: 12px;
            }
        </style>
        <title>Sitio</title>
    </head>
    <body>
        <?php 
            function menuActive($url){
                return request()->is($url) ? 'active' : '';
            }
        ?>
       <header>
        <nav>
            <a  class="{{ menuActive('/') }}" 
                href="{{ route('home') }}">
                Inicio
            </a>
            <a  class="{{ menuActive('saludos') }}" 
                href="{{ route('saludo', 'Rick') }} ">
                Saludo
            </a>
            <a  class="{{ menuActive('messages/create') }}" 
                href="{{ route('mensajes.create') }} ">
                Contacto
            </a>
            
            @if(auth()->check())
                <a  class="{{ menuActive('messages/index') }}" 
                    href="{{ route('mensajes.index') }} ">
                    Mensajes
                </a>
                <a href="/logout">Cerrar sesión de {{ auth()->user()->name }} </a>
            @endif
            @if(auth()->guest() == 1)
                    <a href="/login" class="{{ menuActive('login') }}">Login</a>
                    
            @endif

            
           </nav>
       </header>
       @yield('contenido')

       <hr>
       <footer>Copyright {{ date('Y') }} </footer>
    </body>
</html>