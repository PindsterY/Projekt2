<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <title>Projekt 2</title>
</head>

<body>
<!-- Siia võin hakata kirjutama sisu -->
<article><h1>Heading 1</h1>
<p>Tekst tuleb headingu alla</p>

<h2>Heading 2</h2>
<p>Tekst tuleb heading2 alla</p>

<h3>Heading 3</h3>
<p>Tekst tuleb heading3 alla</p>
    </article>

<aside><h4>Heading 4</h4>
<p>Tekst tuleb heading4 alla</p>
</aside>

<h5>Heading 5</h5>
<p>Tekst tuleb heading5 alla</p>

<h6>Heading 6</h6>
<p>Tekst tuleb heading6 alla</p>

<p>Et teha pikk teemat vahetav joon ekraanile, siis kasutan hr tagi</p>
<hr>

<p>Et täpsemalt teada saada tagide kohta, siis tuleks kasutada <a href="http://www.google.com">Google otsingumootor</a>'i abi</p>
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
    <dd>Must kuum jook</dd>
    <dt>Piim</dt>
    <dd>Valge külm jook</dd>
</dl>
    </div>

<iframe width="420" height="315" src="https://www.youtube.com/embed/ouFLhZ2actU" frameborder="0" allowfullscreen></iframe>
<br>

<form>
    <fieldset>
        <legend>Kirjuta siia oma andmed:</legend>
        Nimi: <input type="text"><br>
        E-mail: <input type="text"><br>
        Sünniaasta: <input type="number">
        <br><button type="button" onclick="alert('Eesti.ee andmetel sellist nime ei eksisteeri. Kirjuta palun ikka õiged andmed!')">Vajuta siia!</button>
    </fieldset>
    </form>

<figure>
    <img src="assets/img/taaramae.jpg" alt="Rein Taaramäe" width="50%" height="50%">
    <figcaption>Fig.1 - Rein Taaramäe Tour de Francel tõusu sõitmas.</figcaption>
</figure>


</body>

</html>