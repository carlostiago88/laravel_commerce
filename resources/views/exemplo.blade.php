<h1>Exemplo</h1>

<!--######
Módulo 1
#########-->
<!--Errado-->
<!--<p>Olá <?//=$nome ?></p>-->
<!--Certo-->
<!--<p>Olá {{--$nome--}} {{--$sobrenome--}}</p>-->

<!--######
Módulo 2
#########-->
<ul>
    @foreach($categories as $category)
    <li>{{$category->name}}</li>
    @endforeach
</ul>
