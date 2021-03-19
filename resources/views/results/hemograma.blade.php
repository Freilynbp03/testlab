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
        div.page_break+div.page_break {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <div class="page_break">
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

            <h3>Hemograma</h3>
            <table class = "table" id = "table"> 
                <thead> 
                    <tr> 
                        <th class = "text-center"> Hemograma </th> 
                        <th class = "text-center"> Resultados </th> 
                        <th class = "text-center"> Flag </th> 
                        <th class = "text-center"> Ref. Rango </th> 
                        <th class = "text-center"> Unidades </th> 
                    </tr> 
                </thead> 
                <tbody>
                 @foreach ($hemograma as $item)
                 <tr>  
                    <td>{{$item->wbc}}</td> 
                     
                </tr> 
                <tr>
                        <td>{{$item->rbc}}</td> 
                </tr>
                <tr>
                         <td>{{$item->hgb}}</td> 
                </tr>
                <tr>
                        <td>{{$item->hct}}</td> 
                </tr>
                <tr>
                        <td>{{$item->mcv}}</td> 
                </tr>
                <tr>
                        <td>{{$item->mch}}</td> 
                </tr>
                <tr>
                    <td>{{$item->mvhv}}</td>
                </tr>
                <tr>
                    <td>{{$item->plt}}</td>
                </tr>
                 @endforeach   
                </tbody> 
            </table>
        </div>
    </main>
    <footer>
    
    </footer></div>
    <div class="page_break">
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
    
                <h3>Hemograma</h3>
                <table class = "table" id = "table"> 
                    <thead> 
                        <tr> 
                            <th class = "text-center"> Hemograma </th> 
                            <th class = "text-center"> Resultados </th> 
                            <th class = "text-center"> Flag </th> 
                            <th class = "text-center"> Ref. Rango </th> 
                            <th class = "text-center"> Unidades </th> 
                        </tr> 
                    </thead> 
                    <tbody>
                     @foreach ($hemograma as $item)
                     <tr>  
                        <td>{{$item->wbc}}</td> 
                         
                    </tr> 
                    <tr>
                            <td>{{$item->rbc}}</td> 
                    </tr>
                    <tr>
                             <td>{{$item->hgb}}</td> 
                    </tr>
                    <tr>
                            <td>{{$item->hct}}</td> 
                    </tr>
                    <tr>
                            <td>{{$item->mcv}}</td> 
                    </tr>
                    <tr>
                            <td>{{$item->mch}}</td> 
                    </tr>
                    <tr>
                        <td>{{$item->mvhv}}</td>
                    </tr>
                    <tr>
                        <td>{{$item->plt}}</td>
                    </tr>
                     @endforeach   
                    </tbody> 
                </table>
            </div>
        </main>
        <footer>
        
        </footer>
    </div>
    
</body>
</html>