<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    </head>
<body>
    <div class="container">
        <table class = "table" id = "table"> 
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
        </table>
    </div>
</body>
</html>