<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <title>Projekt 2</title>
</head>

<body>
<!-- Siia võin hakata kirjutama sisu -->
<nav>
    <a href="index.php">Esileht</a> |
    <a href="http://www.postimees.ee/">Uudised</a> |
    <a href="http://diarainfra.com/khk/vs15/theindro/projectx/">Project #1</a> |
    <a href="link4.php">Link #4</a>
</nav>
<br>
<br>

<main>
<article><h1>Heading 1</h1>
<p>Tekst tuleb headingu alla -></p>

<h2>Heading 2</h2>
<p>Tekst tuleb heading2 alla</p>

<h3>Heading 3</h3>
<p>Tekst tuleb heading3 alla</p>
    </article>
    </main>

<aside><h4>Heading 4</h4>
<p>Tekst tuleb heading4 alla</p>
</aside>

<h5>Heading 5</h5>
<p>Tekst tuleb heading5 alla</p>

<footer><h6>Heading 6</h6>
<p>Tekst tuleb <small>heading6</small> alla</p></footer>

<p>Et teha pikk teemat vahetav joon ekraanile, siis kasutan hr tagi</p>
<hr>

<p>Et täpsemalt <sub>teada saada</sub> <sup>tagide kohta</sup>, siis tuleks kasutada <a href="http://www.google.com">Google otsingumootor</a>'i abi</p>
<p>Samas on otseloomulikult kõige parem ju minna <abbr title="World Wide Web Consortium">W3C</abbr> lehele. </p>

<address>Kirjutatud Rasmuse poolt
<br> Selleks kasutasin address tagi</address>

<p>Area tagi võlud on demonstreeritud siin. Vajuta oma lemmik teletupsu <b>nina</b> peale, et saada infot tema kohta.</p>
<img src="assets/img/teletubbies.png" width="max" height="max" alt="Teletubbies" usemap="#tupsumap">

<map name="tupsumap">
    <area shape="circle" coords="120,170,20" alt="Tinky" href="http://teletubbies.wikia.com/wiki/Tinky-Winky">
    <area shape="circle" coords="260,180,20" alt="Dipsy" href="http://teletubbies.wikia.com/wiki/Dipsy">
    <area shape="circle" coords="400,205,20" alt="Po" href="http://teletubbies.wikia.com/wiki/Po">
    <area shape="circle" coords="535,170,20" alt="Laalaa" href="http://teletubbies.wikia.com/wiki/Laa-Laa">
</map>

<br>

<audio controls>
    <source src="assets/audio/Teletubbies.mp3" type="audio/mpeg">
    Teie browseril puudub vastav tugi, et seda kvaliteetset muusikapala kuulata.
</audio>

<br>
<bdi>See on bdi element</bdi>
<p>bdo tagi võlu peitub tema sõna ümberpööramise oskuses. <bdo dir="rtl">Kuulilennuteetunneliluuk Sumsar Rasmus.</bdo></p>
<blockquote cite="www.http://skillcrush.com/2014/10/21/advice-for-web-designers/">
    “If you think <em>math</em> is hard, try <strong>web design</strong>.” ―Trish Parr
</blockquote>
Bjarne Stroustrup ütles kord <q>I have always wished for my computer to be as easy to use as my telephone; my wish has come true because I can no longer figure out how to use my telephone.</q>

<button type="button" onclick="alert('Seda ei tohtinud ju vajutada')">Ära siia vajuta</button>

<br><p>Nüüd demonstreerin Teile canva kastikest:</p>
<canvas id="essaCanva" width="50" height="50" style="border:5px solid #40cc6f;">Teie browser ei toeta nii uhket tagi
</canvas>

<table>
    <colgroup>
        <col span="2" style="background-color:red">
        <col style="background-color:yellow">
    </colgroup>
    <caption>Tabel</caption>
    <tr>
        <th>Pealkiri#1</th>
        <th>Tiitel#2</th>
        <th>Mingi#3</th>
    </tr>
    <tr>
        <td>Üks</td>
        <td>Kaks</td>
        <td>Kolm</td>
    </tr>
    <tr>
        <td>Kolm</td>
        <td>Neli</td>
        <td>Viis</td>
    </tr>
</table>

<p><cite>Üleval nähtud tabel oli kindlasti väga kasulik</cite></p>
<code>Siit saad saata päringut!</code>

<form action="datalist.asp" method="get">
    <input list="datalist" name="datalist">
    <datalist id="datalist">
        <option value="Rasmus">
        <option value="On">
        <option value="Minu">
        <option value="Nimi">
        </datalist>
    <input type="submit">
</form>

<div>
<del>Või hoopiski del tag</del>
<details>Detailid ilmuvad siia</details>
<dfn>DFN tag</dfn>
<dialog>Dialog tag</dialog>

<dl>
    <dt>Kohv</dt>
    <dd>Must <s>kuum</s> jook</dd>
    <dt>Piim</dt>
    <dd>Valge külm jook</dd>
</dl>
    </div>

<object>
<iframe width="420" height="315" src="https://www.youtube.com/embed/ouFLhZ2actU" frameborder="0" allowfullscreen></iframe>
<param name="autoplay" value="true">
    </object>
<br>

<form>
    <fieldset>
        <legend>Kirjuta <mark>siia</mark> oma andmed:</legend>
        Nimi: <input type="text"><br>
        E-mail: <input type="text" name="E-mail" value="eesN.prknN@khk.ee"><br>
        Sünniaasta: <input type="number">
        <br><button type="button" onclick="alert('Naljakas nimi Teil, noormees. Eesti.ee andmetel sellist nime ei eksisteeri. Kirjuta palun ikka õiged andmed!')">Vajuta siia!</button>
    </fieldset>
    </form>

<figure>
    <img src="assets/img/taaramae.jpg" alt="Rein Taaramäe" width="50%" height="50%">
    <figcaption>Fig.1 - Rein Taaramäe <i>Tour de Francel</i> <ins>tõusu</ins> sõitmas.</figcaption>
</figure>
<br>
<kbd>Keyboard input</kbd>
<br>
<keygen name="Nupp"> <br>

    <p>Vali, kuidas sulle see webpage meeldib:</p>
    <form action="demo_form.asp">
        <label for="lahe">Väga lahe</label>
        <input type="radio" name="sex" id="lahe" value="lahe"><br>
        <label for="Parim">Parim lehekülg</label>
        <input type="radio" name="sex" id="parim" value="parim"><br><br>
    </form>

    <select>
        <optgroup label="WEBPage kujundus">
            <option value="volvo">Lahe</option>
            <option value="saab">Super</option>
        </optgroup>
        <optgroup label="WEBPage sisu">
            <option value="mercedes">Parim</option>
            <option value="audi">Nii vinge</option>
        </optgroup>
    </select>

    <br>
<samp>Väääääääääääääääääääääääääääääääääääääääääääääääääääääääää<wbr>gaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<wbr>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa<wbr>PikaaaaaaaaaaaadSõnaaaaaaaaaaaaaadTuleb<wbr>WBR'igaLükataaaaJärkaleRealeeeeee</samp>

    <p>Selle lehkekülje skoor 1 miljoni Eesti elaniku arust. Ülemine näitab skoori (out of 10) ja alumine näitab valimit Eesti elanike hulgas (%)</p>
    <meter value="10" min="0" max="10">10 out of 10</meter><br>
    <meter value="0.95">95%</meter>

    <br>



    <script>
        document.write("Jiihaa!")
    </script>
    <noscript>Sorry, your browser does not support JavaScript!</noscript>
<p>Kell tag <time>15:00</time></p>
<br>

    <form oninput="x.value=parseInt(a.value)+parseInt(b.value)">0
        <input type="range" id="a" value="50">100
        +<input type="number" id="b" value="0">
        =<output name="x" for="a b"></output>
    </form>

    <pre>Mis            tühikud need on        ?                  (ikka pre tag!)</pre>
    <br>


    <p>Viiruse tõmbamine Teie arvutisse</p>
    <progress value="78" max="100">
    </progress>

    <br>
<summary>Summary</summary>
    <textarea rows="4" cols="30">
See on väga mugav textarea tag, kuhu saab kirjutada kõigest. Ilmub see kõik ilusasti kastikese sisse. Isegi pole vaja kastist välja mõelda!

</textarea>
    <br></nr><var>Variable</var><br>

    <video width="400" height="200">
    </video>

    <br>
    <div id="main">
        <div style="background-color:coral;">A</div>
        <div style="background-color:lightblue;">B</div>
        <div style="background-color:khaki;">C</div>
        <div style="background-color:pink;">D</div>
        <div style="background-color:lightgrey;">E</div>
        <div style="background-color:lightgreen;">F</div>
    </div>
<br>
    <button id="b1">Nupp 1</button>
    <button id="b2">Nupp 2</button>
    <button id="b3">Nupp 3</button>
    <button id="b4">Nupp 4</button>
    <br>

    <marquee behavior="alternate"><marquee width="200">Uus Marquee</marquee></marquee>



</body>

</html>