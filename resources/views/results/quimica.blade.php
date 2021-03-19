<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RESULTADOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin: 3cm 2cm 2cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            background-color: #30abaf;
            color: rgb(255, 255, 255);
            text-align: center;
            line-height: 10px;
        }
        .column {
        float: left;
        width: 30%;
        }
        .row:after {
        content: "";
        display: table;
        clear: both;
        }
    </style>
</head>
<body>
    <header>
        <br>
        <h1>Hospital Municipal de Laguna Salada</h1>
        <br>
        <h2 class="hero-text">Servicio de Laboratorio</h2>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center"><strong>TABLA DE RESULTADOS</strong></h5>
            

            @foreach ($patients as $item)
            <div class="row">
                <div class="column"><h6 class="">Nombre:</h6></div>
                <div class="column"><h6 class="" style="left: 15%; margin-top:0%;">{{$item->name}} {{$item->lastname}}</h6></div>
                <div class="column"><h6 class=""># Paciente:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;">{{$item->id}}</h6></div>
            </div>
              <div class="row">
                <div class="column"><h6 class="">Doctor:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;">{{$item->doctor}}</h6></div>
                <div class="column"><h6 class="">Sexo:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;">{{$item->gender}}</h6></div>
            </div>
            <div class="row">
                <div class="column"><h6 class="">Fecha:</h6></div>
                <div class="column"><h6 class="" style="left: 15%;">{{$item->created_at}}</h6></div>
                
            </div>
            @endforeach   


            {{-- <table class = "table" id = "table"> 
                <thead> 
                    <tr> 
                        <th class = "text-center"> Nombre </th> 
                        <th class = "text-center"> Apellido </th> 
                        <th class = "text-center"> NSS </th> 
                        <th class = "text-center"> Doctor </th> 
                        <th class = "text-center"> Sexo </th> 
                        <th class = "text-center"> Edad</th> 
                        <th class = "text-center"> Telefono </th> 
                        <th class = "text-center"> Unidad </th> 
                    </tr> 
                </thead> 
                <tbody>
                 @foreach ($patients as $item)
                 <tr> 
                    <td>{{$item->name}}</td> 
                    <td>{{$item->lastname}}</td> 
                    <td>{{$item->nss}}</td> 
                    <td>{{$item->doctor}}</td> 
                    <td>{{$item->gender}}</td> 
                    <td>{{$item->age}}</td> 
                    <td>{{$item->phone}}</td> 
                    <td>{{$item->unidad}}</td> 
            
                </tr> 
                 @endforeach   
                </tbody> 
            </table> --}}
        </div>
    </main>
    <footer>
    
    </footer>
</body>
</html>