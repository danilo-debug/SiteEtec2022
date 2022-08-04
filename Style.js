let href = window.location.href;
href = href.replace('http://localhost/aulas/Site%20da%20Escola/index.php?','');
console.log(href)
/*<-- Style Bar Inico -->*/

if(href == 'link=1')
{
document.getElementById('home').innerHTML =
`<li id="Home" class="nav-item">
 <a class="nav-link" href="index.php?link=1">Home</a>
 </li>`		
}

if(href == 'link=2')
{
document.getElementById('historia').innerHTML =
`<li id="Historia" class="nav-item">
 <a class="nav-link" href="index.php?link=2">Historia</a>
 </li>`		
}

if(href == 'link=3')
{
document.getElementById('cursos').innerHTML =
`<li id="Cursos" class="nav-item">
 <a class="nav-link" href="index.php?link=3">Cursos</a>
 </li>`		
}

if(href == 'link=4')
{
document.getElementById('vestibulinho').innerHTML =
`<li id="Vestibulinho" class="nav-item">
 <a class="nav-link" href="index.php?link=4">Vestibulinho</a>
 </li>`		
}

if(href == 'link=5')
{
document.getElementById('estrutura').innerHTML =
`<li id="Estrutura" class="nav-item">
 <a class="nav-link" href="index.php?link=5">Estrutura</a>
 </li>`		
}

if(href == 'link=6')
{
document.getElementById('estagio').innerHTML =
`<li id="Estagio" class="nav-item">
 <a class="nav-link" href="index.php?link=6">Estágio</a>
 </li>`		
}

if(href == 'link=7')
{
document.getElementById('contato').innerHTML =
`<li id="Contato" class="nav-item">
 <a class="nav-link" href="index.php?link=7">Estágio</a>
 </li>`		
}
if(href == 'link=8')
{
document.getElementById('area_do_aluno').innerHTML =
`<li id="Area_do_aluno" class="nav-item">
 <a class="nav-link" href="index.php?link=8">Area do aluno</a>
 </li>`		
}

if(href == 'link=9')
{
document.getElementById('button_login').innerHTML =
`<a href="index.php?link=9"> 
 <button id="login" class="btn btn-outline-secondary ">
 <i class="bi bi-person"></i>
 </button>
 </a>`		
}

/*<-- Style Bar Fim-->*/


