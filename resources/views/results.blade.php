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
            position: relative;
            /* bottom: 0; */

            top: -10%;
            left: 0;
            right: 0;
            height: 3cm;
            background-color: #30abaf;
            color: rgb(255, 255, 255);
            text-align: center;
            line-height: 10px;
            margin: 0%;
            width: 100%;
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
            margin: 0%;
            page-break-before: always;

        }
    </style>
</head>
<body>
    <div class="page_break d-flex justify-content-center">
    <header>
        <br>
        <h3>Hospital Municipal de Laguna Salada</h3>
        <br>
        <h4 class="hero-text">Servicio de Laboratorio</h4>
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
            <table class = "table table-sm" id = "table"> 
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
                     <td>WBC</td>
                     <td>{{$item->wbc}}</td>
                     <td>--------------</td>
                     <td>4.00 - 10.00</td>
                     <td>10e3/ul</td> 
                </tr> 
                <tr>
                    <td>RBC</td>
                    <td>{{$item->rbc}}</td> 
                    <td>--------------</td>
                    <td>3.50 - 5.50</td>
                    <td>10e6/ul</td> 
                </tr>
                <tr>
                    <td>HGB</td>
                    <td>{{$item->hgb}}</td> 
                    <td>--------------</td> 
                    <td>12.5 - 17.5</td>
                    <td>g/dl</td>
                </tr>
                <tr>
                    <td>HCT</td>
                    <td>{{$item->hct}}</td> 
                    <td>--------------</td> 
                    <td>37.0 - 50.0</td>
                    <td>%</td>
                </tr>
                <tr>
                    <td>MCV</td>
                    <td>{{$item->mcv}}</td> 
                    <td>--------------</td> 
                    <td>80.0 - 98.0</td>
                    <td>fl</td>
                </tr>
                <tr>
                    <td>MCH</td>
                    <td>{{$item->mch}}</td> 
                    <td>--------------</td> 
                    <td>26.0 - 38.0</td>
                    <td>pg</td>
                </tr>
                <tr>
                    <td>MCHC</td>
                    <td>{{$item->mchc}}</td>
                    <td>--------------</td> 
                    <td>31.0 - 37.0</td>
                    <td>g/dl</td>
                </tr>
                <tr>
                    <td>PLT</td>
                    <td>{{$item->plt}}</td>
                    <td>--------------</td> 
                    <td>150 - 450</td>
                    <td>10e3/ul</td>
                </tr>
                 @endforeach   
                </tbody> 
            </table>
        </div>
    </main>
    <footer>
    </footer>
    </div>
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