@extends('dashboard.master')
@section('contenido')
<div class="container">
    @include('dashboard.partials.validation-error')
    <div class="jumbotron">
        <div class="form-group">
            <div class="row center">
                <div class="col ">
                    <label for="rut" class="form-label">1. Qué principio se estaría violando en el siguiente diagrama de clases, si llega un nuevo cliente que desea enviar mensajes sin encriptarlos. Recuerda el principio que menciona que los clientes NO DEBEN estar forzados a depender de métodos que ellos no utilizan:</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                    <div class="text-center my-4">
                        <img src="https://lh5.googleusercontent.com/Ukl_xMDkCPfz1eMoyp_s1O5Ui3V2GOB0qZcefmQwR5Jv6O8lN3oIGdQFIKyd8S8c5tiLnJPDwkHmoXvzrbnX1DsaE0V2bA9VD629SMY0OXVPxLTHyeGDIgesTZrP_70Kxg=w740" alt="question1" width="300px" class="align-content-center">
                    </div>
                    <select disabled class="form-control" name="answer1" id="answer1">
                        <option value="El Dependency Inversion Principle"{{ $question->answer1 =='El Dependency Inversion Principle' ? 'selected="selected"':'' }}>El Dependency Inversion Principle</option>
                        <option value="El Single Responsability Principle" {{ $question->answer1 =='El Single Responsability Principle' ? 'selected="selected"':'' }}>El Single Responsability Principle</option>
                        <option value="Interface Segregation Principle" {{ $question->answer1 =='Interface Segregation Principle' ? 'selected="selected"':'' }}>Interface Segregation Principle</option>
                    </select>
                    
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="rut" class="form-label">2. Según el principio sw Dependency Inversion Principle, los módulos de alto nivel no deben depender de los módulos de bajo nivel, ambos deben depender de abstracciones, las cuales no deben depender de los detalles, son estos los que dependen de las abstracciones. Normalmente esto aplica en una arquitectura de 3 capas. La imagen que mejor representa esta afirmación es:</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                    <div class="text-center m-4">
                        <label>Opción1</label>
                        <img src="https://lh5.googleusercontent.com/RdjctBvWCfIkb60GIIvPRoydWCEkNqfa5fEhvFiZBb-6cSOVb4rbafHUsSSDHek-jjmxav3uTxb3hce_r2B7qdfFjvrRH_xLFbnqjKY6We2BRkoVEYAbMv9BQgbLwbUS3w=w260" alt="question2-1" width="300px">
                        <label>Opción2</label>
                        <img src="https://lh3.googleusercontent.com/dGZoyeTawEV4pKBV13zupO-pEMVe2qh2NJH_6IOFZlTA3r5hw42-KpMIqzRs3nu87eALiyqRBC7Lj5KqKFZ5J7UiM6QNXE1XSnF2WZZcEoHJKrFGYbM4niaxHxHQoIRvtA=w260" alt="question2-1" width="300px">
                    </div>
                    <select disabled class="form-control" name="answer2" id="answer2">
                        <option value="Opción 1"{{ $question->answer2 =='Opción 1' ? 'selected="selected"':'' }}>Opción 1</option>
                        <option value="Opción 2" {{ $question->answer2 =='Opción 2' ? 'selected="selected"':'' }}>Opción 2</option>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col ">
                    <label for="rut" class="form-label">3. El Dependency Inversion Principle recomienda que los módulos de alto nivel no dependan de los de bajo nivel.¿Qué estrategia usa para conseguirlo?</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                
                    <select disabled class="form-control" name="answer3" id="answer3">
                        <option value="Redistribuir las responsabilidades entre los módulos"{{ $question->answer3 =='Redistribuir las responsabilidades entre los módulos' ? 'selected="selected"':'' }}>Redistribuir las responsabilidades entre los módulos</option>
                        <option value="Crear abstracciones para los servicios ofrecidos por los módulos de bajo nivel" {{ $question->answer3 =='Crear abstracciones para los servicios ofrecidos por los módulos de bajo nivel' ? 'selected="selected"':'' }}>Crear abstracciones para los servicios ofrecidos por los módulos de bajo nivel</option>
                        <option value="Crear un directorio de servicios" {{ $question->answer3 =='Crear un directorio de servicios' ? 'selected="selected"':'' }}>Crear un directorio de servicios</option>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col ">
                    <label for="rut" class="form-label">4. Si S es un subtipo de T que queremos introducir de forma segura en el programa. ¿Qué requiere el principio de Liskov que cumpla S?</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                    <div class="text-center my-4">
                        <img src="https://lh6.googleusercontent.com/dqMZFmKDA17ar6Uva3ElhqC0NWgiXWz92r3BqGj81YFsXNtxChLIJCjFf4rDsjJ78Ghwf5iWgks_VzoVD34kjh6P9MsZZ454sY1KrdRynafngGvCJIjlnI4Qglp1hYF70g=w740" alt="question1" width="500px" class="align-content-center">
                    </div>
                    <select disabled class="form-control" name="answer4" id="answer4">
                        <option value="El tipo S debe cumplir todas las propiedades que el programa requiere de T"{{ $question->answer4 =='El tipo S debe cumplir todas las propiedades que el programa requiere de T' ? 'selected="selected"':'' }}>El tipo S debe cumplir todas las propiedades que el programa requiere de T</option>
                        <option value="Todo objeto del tipo T tambien tiene que ser del tipo S" {{ $question->answer4 =='Todo objeto del tipo T tambien tiene que ser del tipo S' ? 'selected="selected"':'' }}>Todo objeto del tipo T tambien tiene que ser del tipo S</option>
                        <option value="El tipo S debe tener estrictamente más métodos que el tipo T" {{ $question->answer4 =='El tipo S debe tener estrictamente más métodos que el tipo T' ? 'selected="selected"':'' }}>El tipo S debe tener estrictamente más métodos que el tipo T</option>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col ">
                    <label for="rut" class="form-label">5. Verdadero o falso. Nuestras entidades, bien sean, clases, módulos, funciones, deben ser abiertas para la modificación y cerradas para la extensión. Siendo un sistema modificable, sin extender el código existente, evitando errores.</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                    <div class="text-center my-4">
                        <img src="https://lh4.googleusercontent.com/AhhgLJAksZq8ctQixXoPxiEslc9ddxrcGs4OJ-1QRVeK5cda1ZlS5Zcr3y0xPh4eaSoJTlxfgarnPUWMLkILYO7JeULggi0c92jZyPJVrlb1rddLjeoCjLu-HnvvzTBLtg=w740" alt="question1" width="500px" class="align-content-center">
                    </div>
                    <select disabled class="form-control" name="answer5" id="answer5">
                        <option value="Verdadero"{{ $question->answer5 =='Verdadero' ? 'selected="selected"':'' }}>Verdadero</option>
                        <option value="Falso" {{ $question->answer5 =='Falso' ? 'selected="selected"':'' }}>Falso</option>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col ">
                    <label for="rut" class="form-label">6. (Verdadero o Falso). El principio de responsabilidad única trata de que si cada clase tiene una única responsabilidad, esta será más fácil de mantener. Si un módulo agrupa funcionalidades muy dispersas, su cohesión es baja, si un módulo tiene una única funcionalidad, su cohesión es alta.</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                    
                    <select disabled class="form-control" name="answer6" id="answer6">
                        <option value="Verdadero"{{ $question->answer6 =='Verdadero' ? 'selected="selected"':'' }}>Verdadero</option>
                        <option value="Falso" {{ $question->answer6 =='Falso' ? 'selected="selected"':'' }}>Falso</option>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col ">
                    <label for="rut" class="form-label">7. ¿Qué método no debería formar parte de la clase Cesta según el Single Responsibility Principle?</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                    <div class="text-center my-4">
                        <img src="https://lh3.googleusercontent.com/Ve4ha8OOmTNOjS3w1ivC0qK0C6mCBEYC7JSf2lbjEo8iOG6W4_ZIilh5ImlIhBGEIPMI2vKcR95yVYaZgT9P6m21d4BuXMg1kDmJi5flSpfhOhy7tn59vJa4VXL4tXSv6g=w610" alt="question1" width="500px" class="align-content-center">
                    </div>
                    <select disabled class="form-control" name="answer7" id="answer7">
                        <option value="Todos pueden formar parte de la clase ya que trabajan sobre los mismos datos"{{ $question->answer7 =='Todos pueden formar parte de la clase ya que trabajan sobre los mismos datos' ? 'selected="selected"':'' }}>Todos pueden formar parte de la clase ya que trabajan sobre los mismos datos</option>
                        <option value="muestraHTML, ya que su responsabilidad es la construcción de la vista para el usuario y no el funcionamiento de una Cesta" {{ $question->answer7 =='muestraHTML, ya que su responsabilidad es la construcción de la vista para el usuario y no el funcionamiento de una Cesta' ? 'selected="selected"':'' }}>muestraHTML, ya que su responsabilidad es la construcción de la vista para el usuario y no el funcionamiento de una Cesta</option>
                        <option value="nuevo y elimina, ya que modifican el estado de Cesta mientras que muestraHTML no lo hace" {{ $question->answer7 =='nuevo y elimina, ya que modifican el estado de Cesta mientras que muestraHTML no lo hace' ? 'selected="selected"':'' }}>nuevo y elimina, ya que modifican el estado de Cesta mientras que muestraHTML no lo hace</option>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col ">
                    <label for="rut" class="form-label">8. Queremos diseñar un sistema siguiendo el Dependency Inversion Principle. El módulo principal es HealthService, que recomienda a usuarios hábitos saludables en función de sus características. Este módulo necesita autenticar usuarios y por eso usa los servicios de un módulo de bajo nivel: AuthenticationService. Actualmente el código de HealthService tiene referencias directas a AuthenticationService.¿Qué cambio deberíamos hacer para cumplir con el Dependency Inversion Principle?</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                    
                    <select disabled class="form-control" name="answer8" id="answer8">
                        <option value="El cliente debería invocar al AuthenticationService y este hacer las llamadas al HealthService"{{ $question->answer8 =='El cliente debería invocar al AuthenticationService y este hacer las llamadas al HealthService' ? 'selected="selected"':'' }}>El cliente debería invocar al AuthenticationService y este hacer las llamadas al HealthService</option>
                        <option value="El código ya es correcto, debido a que AuthenticationService es un servicio de bajo nivel" {{ $question->answer8 =='El código ya es correcto, debido a que AuthenticationService es un servicio de bajo nivel' ? 'selected="selected"':'' }}>El código ya es correcto, debido a que AuthenticationService es un servicio de bajo nivel</option>
                        <option value="Deberiamos crear una abstracción (interface) de los servicios de AuthenticationService requeridos por HealthService y que esta última dependa de la abstracción" {{ $question->answer8 =='Deberiamos crear una abstracción (interface) de los servicios de AuthenticationService requeridos por HealthService y que esta última dependa de la abstracción' ? 'selected="selected"':'' }}>Deberiamos crear una abstracción (interface) de los servicios de AuthenticationService requeridos por HealthService y que esta última dependa de la abstracción</option>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col ">
                    <label for="rut" class="form-label">9. Determina el caso de violación a que principio pertenece: En un mismo método mezclamos lógica del negocio, con lógica de presentación.</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                    
                    <select disabled class="form-control" name="answer9" id="answer9">
                        <option value="El Open Close Principle"{{ $question->answer9 =='El Open Close Principle' ? 'selected="selected"':'' }}>El Open Close Principle</option>
                        <option value="El Dependency Inversion Principle" {{ $question->answer9 =='El Dependency Inversion Principle' ? 'selected="selected"':'' }}>El Dependency Inversion Principle</option>
                        <option value="El Single Responsability Principle" {{ $question->answer9 =='Deberiamos crear una abstracción (interface) de los servicios de AuthenticationService requeridos por HealthService y que esta última dependa de la abstracción' ? 'selected="selected"':'' }}>Deberiamos crear una abstracción (interface) de los servicios de AuthenticationService requeridos por HealthService y que esta última dependa de la abstracción</option>
                    </select>
                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row center">
                <div class="col ">
                    <label for="rut" class="form-label">10. Hemos implementado una clase MailSender que envía correos de distintos tipos, representados como subclases de una interface genérica Mail. Cada vez que se introduce tipo de Mail nuevo modificamos la clase MailSender para adaptar el envío a este nuevo tipo de email.¿Qué principio SOLID estamos violando?</label>
                    {{-- <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}"> --}}
                    <div class="text-center my-4">
                        <img src="https://lh5.googleusercontent.com/sBRI34nrKseSpVqwAKz5BPNfE6DB7hL-_qoziLw4tJA9xfIlGPu9HCEhSPE7sPeMutjHigfFwK0ffyqNj0qi3qBQv82wGL0Luhi7GRC9Mf4CNqEuYQID0NVav9TVnfhDGg=w464" alt="question1" width="500px" class="align-content-center">
                    </div>
                    <select disabled class="form-control" name="answer10" id="answer10">
                        <option value="El Single Responsability Principle"{{ $question->answer10 =='El Single Responsability Principle' ? 'selected="selected"':'' }}>El Single Responsability Principle</option>
                        <option value="El Dependency Inversion Principle" {{ $question->answer10=='El Dependency Inversion Principle' ? 'selected="selected"':'' }}>El Dependency Inversion Principle</option>
                        <option value="El Open Close Principle" {{ $question->answer10 =='El Open Close Principle' ? 'selected="selected"':'' }}>El Open Close Principle</option>
                    </select>
                    
                </div>
            </div>
        </div>

        {{-- <div class="form-group">
            <div class="row center">
                <div class="col">
                    <label for="rut" class="form-label">Qué principio se estaría violando en el siguiente diagrama de clases, si llega un nuevo cliente que desea enviar mensajes sin encriptarlos. Recuerda el principio que menciona que los clientes NO DEBEN estar forzados a depender de métodos que ellos no utilizan:</label>
                    <input class="form-control" type="text" name="rut" id="rut" value="{{ old('answer1', $question->answer1) }}">

                    <select disabled class="form-control" name="answer1" id="answer1">
                        <option value="cedula_extranjera"{{ $question->answer1 =='El Dependency Inversion Principle' ? 'selected="selected"':'' }}>El Dependency Inversion Principle</option>
                        <option value="Pasaporte" {{ $question->answer1 =='El Single Responsability Principle' ? 'selected="selected"':'' }}>El Single Responsability Principle</option>
                        <option value="R.C." {{ $question->answer1 =='Interface Segregation Principle' ? 'selected="selected"':'' }}>Interface Segregation Principle</option>
                    </select>
                    
                </div>
            </div>
        </div> --}}

        <div>
            <div class="form-group">
                <a type="button" class="btn btn-danger" href="{{ route('question.index') }}">Atrás</a>
            </div>
        </div>
    </div>
</div>
@endsection


