<?php
require("../php/conexion.php");

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../estilos/guia.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <title>Trans.formar: Guia</title>
</head>


<body>
  <!--NAV BAR-->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="../paginas/inicio.php"><img src="../img/logo.jpg" width="40" height="40" class="imagen"></a>
    <!--MI CUENTA-->
    <div class="botones">
      <a button class="btn" href="../paginas/foro.php">Foro</a></button>
      <a button class="btn" href="../paginas/perfil.php">Mi cuenta</a></button>
      <a button class="btn" href="../php/logout.php">Cerrar sesión </a></button>
    </div>
  </nav>


  <div class="split left">
    <div class="bus">
      <button class="btn" id="ley">Ley de Identidad de Género</button><br><br>
      <button class="btn" id="hormonizacion">Hormonización</button><br><br>
      <button class="btn" id="interv">Intervenciones</button><br><br>
      <button class="btn" id="consul">Consultorios</button><br><br>
      <button class="btn" id="prof">Profesionales</button><br><br>
      <button class="btn" id="espacios">Espacios</button>
    </div>
  </div>

  <div class="split right">
    <div id="link1">
      <p class="introley">Establécese el derecho a la identidad de género de las personas.<br>
        Sancionada: Mayo 9 de 2012 / Promulgada: Mayo 23 de 2012<br>
        El Senado y Cámara de Diputados de la Nación Argentina reunidos en Congreso, etc. sancionan con fuerza de
        Ley:</p>

      <hr>
      <h4>ARTICULO 1º — Derecho a la identidad de género.</h4>
      <p> Toda persona tiene derecho:<br>
        a) Al reconocimiento de su identidad de género;<br>
        b) Al libre desarrollo de su persona conforme a su identidad de género;<br>
        c) A ser tratada de acuerdo con su identidad de género y, en particular, a ser identificada de ese modo en
        los
        instrumentos que acreditan su identidad respecto de el/los nombre/s de pila, imagen y sexo con los que allí
        es
        registrada.</p>
      <hr>
      <h4>ARTICULO 2° — Definición.</h4>
      <p>Se entiende por identidad de género a la vivencia interna e individual del género tal
        como cada persona la siente, la cual puede corresponder o no con el sexo asignado al momento del nacimiento,
        incluyendo la vivencia personal del cuerpo.
        Esto puede involucrar la modificación de la apariencia o la función corporal a través de medios
        farmacológicos,
        quirúrgicos o de otra índole, siempre que ello sea libremente escogido. También incluye otras expresiones de
        género,
        como la vestimenta, el modo de hablar y los modales.</p>
      <hr>
      <h4>ARTÍCULO 3º — Ejercicio.</h4>
      <p>Toda persona podrá solicitar la rectificación registral del sexo, y el cambio de nombre
        de pila e imagen, cuando no coincidan con su identidad de género autopercibida.</p>

      <hr>
      <h4>ARTICULO 4º — Requisitos.</h4>
      <p>Toda persona que solicite la rectificación registral del sexo, el cambio de nombre de
        pila e imagen, en virtud de la presente ley, deberá observar los siguientes requisitos:<br>
        1. Acreditar la edad mínima de dieciocho (18) años de edad, con excepción de lo establecido en el artículo
        5° de la
        presente ley.<br>
        2. Presentar ante el Registro Nacional de las Personas o sus oficinas seccionales correspondientes, una
        solicitud
        manifestando encontrarse amparada por la presente ley, requiriendo la rectificación registral de la partida
        de
        nacimiento y el nuevo documento nacional de identidad correspondiente, conservándose el número original.<br>
        3. Expresar el nuevo nombre de pila elegido con el que solicita inscribirse.<br>
        En ningún caso será requisito acreditar intervención quirúrgica por reasignación genital total o parcial, ni
        acreditar terapias hormonales u otro tratamiento psicológico o médico.</p>
      <hr>
      <h4>ARTICULO 5° — Personas menores de edad.</h4>
      <p> Con relación a las personas menores de dieciocho (18) años de edad la solicitud del
        trámite a que refiere el artículo 4º deberá ser efectuada a través de sus representantes legales y con
        expresa
        conformidad del menor, teniendo en cuenta los principios de capacidad progresiva e interés superior del
        niño/a de
        acuerdo con lo estipulado en la Convención sobre los Derechos del Niño y en la Ley 26.061 de protección
        integral de
        los derechos de niñas, niños y adolescentes. Asimismo, la persona menor de edad deberá contar con la
        asistencia del
        abogado del niño prevista en el artículo 27 de la Ley 26.061.<br>
        Cuando por cualquier causa se niegue o sea imposible obtener el consentimiento de alguno/a de los/as
        representantes
        legales del menor de edad, se podrá recurrir a la vía sumarísima para que los/as jueces/zas correspondientes
        resuelvan, teniendo en cuenta los principios de capacidad progresiva e interés superior del niño/a de
        acuerdo con lo
        estipulado en la Convención sobre los Derechos del Niño y en la Ley 26.061 de protección integral de los
        derechos de
        niñas, niños y adolescentes.</p>
      <hr>
      <h4>ARTICULO 6° — Trámite.</h4>
      <p>Cumplidos los requisitos establecidos en los artículos 4° y 5°, el/la oficial público
        procederá, sin necesidad de ningún trámite judicial o administrativo, a notificar de oficio la rectificación
        de sexo
        y cambio de nombre de pila al Registro Civil de la jurisdicción donde fue asentada el acta de nacimiento
        para que
        proceda a emitir una nueva partida de nacimiento ajustándola a dichos cambios, y a expedirle un nuevo
        documento
        nacional de identidad que refleje la rectificación registral del sexo y el nuevo nombre de pila. Se prohíbe
        cualquier referencia a la presente ley en la partida de nacimiento rectificada y en el documento nacional de
        identidad expedido en virtud de la misma.<br>
        Los trámites para la rectificación registral previstos en la presente ley son gratuitos, personales y no
        será
        necesaria la intermediación de ningún gestor o abogado.</p>
      <hr>
      <h4>ARTICULO 7° — Efectos.</h4>
      <p>Los efectos de la rectificación del sexo y el/los nombre/s de pila, realizados en
        virtud
        de la presente ley serán oponibles a terceros desde el momento de su inscripción en el/los registro/s.<br>
        La rectificación registral no alterará la titularidad de los derechos y obligaciones jurídicas que pudieran
        corresponder a la persona con anterioridad a la inscripción del cambio registral, ni las provenientes de las
        relaciones propias del derecho de familia en todos sus órdenes y grados, las que se mantendrán
        inmodificables,
        incluida la adopción.<br>
        En todos los casos será relevante el número de documento nacional de identidad de la persona, por sobre el
        nombre de
        pila o apariencia morfológica de la persona.</p>
      <hr>
      <h4>ARTICULO 8°</h4>
      <p>La rectificación registral conforme la presente ley, una vez realizada, sólo podrá ser
        nuevamente modificada con autorización judicial.</p>
      <hr>
      <h4>ARTICULO 9° — Confidencialidad.</h4>
      <p>Sólo tendrán acceso al acta de nacimiento originaria quienes cuenten con autorización
        del/la titular de la misma o con orden judicial por escrito y fundada.<br>
        No se dará publicidad a la rectificación registral de sexo y cambio de nombre de pila en ningún caso, salvo
        autorización del/la titular de los datos. Se omitirá la publicación en los diarios a que se refiere el
        artículo 17
        de la Ley 18.248.</p>
      <hr>
      <h4>ARTICULO 10. — Notificaciones.</h4>
      <p> El Registro Nacional de las Personas informará el cambio de documento nacional de
        identidad al Registro Nacional de Reincidencia, a la Secretaría del Registro Electoral correspondiente para
        la
        corrección del padrón electoral y a los organismos que reglamentariamente se determine, debiendo incluirse
        aquéllos
        que puedan tener información sobre medidas precautorias existentes a nombre del interesado.</p>
      <hr>
      <h4>ARTICULO 11. — Derecho al libre desarrollo personal.</h4>
      <p>Todas las personas mayores de dieciocho (18) años de edad podrán, conforme al artículo
        1°
        de la presente ley y a fin de garantizar el goce de su salud integral, acceder a intervenciones quirúrgicas
        totales
        y parciales y/o tratamientos integrales hormonales para adecuar su cuerpo, incluida su genitalidad, a su
        identidad
        de género autopercibida, sin necesidad de requerir autorización judicial o administrativa.<br>
        Para el acceso a los tratamientos integrales hormonales, no será necesario acreditar la voluntad en la
        intervención
        quirúrgica de reasignación genital total o parcial. En ambos casos se requerirá, únicamente, el
        consentimiento
        informado de la persona. En el caso de las personas menores de edad regirán los principios y requisitos
        establecidos
        en el artículo 5° para la obtención del consentimiento informado. Sin perjuicio de ello, para el caso de la
        obtención del mismo respecto de la intervención quirúrgica total o parcial se deberá contar, además, con la
        conformidad de la autoridad judicial competente de cada jurisdicción, quien deberá velar por los principios
        de
        capacidad progresiva e interés superior del niño o niña de acuerdo con lo estipulado por la Convención sobre
        los
        Derechos del Niño y en la Ley 26.061 de protección integral de los derechos de las niñas, niños y
        adolescentes. La
        autoridad judicial deberá expedirse en un plazo no mayor de sesenta (60) días contados a partir de la
        solicitud de
        conformidad.<br>
        Los efectores del sistema público de salud, ya sean estatales, privados o del subsistema de obras sociales,
        deberán
        garantizar en forma permanente los derechos que esta ley reconoce.<br>
        Todas las prestaciones de salud contempladas en el presente artículo quedan incluidas en el Plan Médico
        Obligatorio,
        o el que lo reemplace, conforme lo reglamente la autoridad de aplicación.</p>
      <hr>
      <h4>ARTICULO 12. — Trato digno.</h4>
      <p>Deberá respetarse la identidad de género adoptada por las personas, en especial por
        niñas, niños y adolescentes, que utilicen un nombre de pila distinto al consignado en su documento nacional
        de
        identidad. A su solo requerimiento, el nombre de pila adoptado deberá ser utilizado para la citación,
        registro,
        legajo, llamado y cualquier otra gestión o servicio, tanto en los ámbitos públicos como privados.<br>
        Cuando la naturaleza de la gestión haga necesario registrar los datos obrantes en el documento nacional de
        identidad, se utilizará un sistema que combine las iniciales del nombre, el apellido completo, día y año de
        nacimiento y número de documento y se agregará el nombre de pila elegido por razones de identidad de género
        a
        solicitud del interesado/a.<br>
        En aquellas circunstancias en que la persona deba ser nombrada en público deberá utilizarse únicamente el
        nombre de
        pila de elección que respete la identidad de género adoptada.</p>
      <hr>
      <h4>ARTICULO 13. — Aplicación.</h4>
      <p>Toda norma, reglamentación o procedimiento deberá respetar el derecho humano a la
        identidad de género de las personas. Ninguna norma, reglamentación o procedimiento podrá limitar,
        restringir,
        excluir o suprimir el ejercicio del derecho a la identidad de género de las personas, debiendo interpretarse
        y
        aplicarse las normas siempre a favor del acceso al mismo.</p>
      <hr>
      <h4>ARTICULO 14.</h4>
      <p> Derógase el inciso 4° del artículo 19 de la Ley 17.132.</p>
      <hr>
      <h4>ARTICULO 15.</h4>
      <p>Comuníquese al Poder Ejecutivo Nacional.</p>
    </div>
    <div id="link2">
      <h2>Hormonización:</h2>
      <p>Consiste en la administración de distintos fármacos con la finalidad de modificar algunos
        caracteres físicos de la persona para que se aproximen a los que se asoscial culturalmente con la identidad
        autopercivida. Para ellos, resulta primordial la prescripción médica y el seguimiento de dicho tratamiento,
        ya
        que
        es muy imporante obtener información sobre los alcances y los límites de la hormonización, como también los
        beneficios y los posibles efectos adversos que estar prácticas pueden tener.</p>
      <h4><ins>Requisitos:</ins></h4>
      <ul>
          <li>Las personas mayores de 18 años tienen como único requisito firmar a un consentimiento informado, allí
          se
          expresará la voluntad de realizar la/s intervención/es. La hormonización o el cambio registral de nombre o
          sexo no
          son requisitos para acceder a ella/s. </li>
          <li>Para las personas que no alcancen esa edad, la solicitud deberá ser realizada por sus presentantes
          legales,
          con la expresa conformidad de la persona interesada. Si sus representates legales se niegan, deberá darse
          intervención de unx abogadx de le niñx para recurrir a la vía judicial (Ley 26.061). </li>
      </ul>
    </div>
    <div id="link3">
      <h4>Intervenciones/Cirugías:</h4>
      <p>Existen distintos tipos de cirugías de modificación corporal a los que pueden recurrir
        las personas trans en caso de desear realizarse algún tipo de intervención. La Ley de Identidad de Género,
        en
        el
        artítulo 11, entiende por intervenciones quirúrgicas totales y parciales a las cirugías que ayuden a adecuar

        el
        cuerpo a las características asociadas culturalmente con la identidad de género autopercibida.</p>
      <h5><ins>Requisitos:</ins></h5>
      <ul>
          <li>Las personas mayores de 16 años tienen como único requisito expresar su consentimiento informado para
          realizar
          el tratamiento. Para acceder a éstos, no será necesario acreditar la voluntad de recurría a una
          intervención
          quirúrgica de reasignación genital total o parcial. </li>
          <li>Para las personas que no alcancen esa edad, la solicitud deberá ser realizada por sus representantes
          legales,
          con la expresa conformidad de la persona intersada. Si sus representates legales se niegan, deberá darse
          intervención de unx Abogadx de le niñx para recurrir a la vía judicial (Ley 26.061).</li>
      </ul>
    </div>
    <div id="link4">
      <h4>¿Cómo acceder a los servicios de salud?</h4>
      <h5>Sistema publico:</h5>
      <p> Tenés que acercarte al hospital más cercano para pedir turnos en las áreas de
        endocrinología, medicina clínica o medicina plástica reconstructiva, según el caso. La cobertura de salud
        integral
        para las personas trans es total y gratuita.</p>
      <h5>Sistema privado:</h5>
      <p>Tenés que hacer la consulta con unx médicx clinicx para que, con la prescripción médica,
        puedas iniciar el trámite de la solicitud de la cobertura a través de tu obra social o prepaga, la deben
        autorizar y
        habilitarte para dar comienzo a los tratamientos o procesos quirúrgicos, según lo dictado y pactado con lxs
        profesionales de la salud. </p>
    </div>
    <div id="link5">
      <h4>Mostrando todos los posts con el tag #profesionales:</h4>
    </div>
    <div id="link6">
      <h2>Defensoria LGBT</h2>
      <i class="fab fa-facebook-square"></i>
      <a href="https://www.facebook.com/defensorialgbt"> defensorialgbt</a>
      <br>
      <i class="fas fa-phone"></i>
      011-4338-4900 (int.8106)
      <br><i class="fas fa-mouse-pointer"></i><a href="https://www.defensoria.org.ar">defensoria.org.ar</a>
      <hr>
      <h2>ATTTA RED NACIONAL</h2>
      <i class="fab fa-facebook-square"></i>
      <a href=" https://www.facebook.com/ATTTAOFICIAL"> ATTTAOFICIAL</a>
      <br>
      <i class="fas fa-phone"></i>
      011-4338-4900 (int.8106)
      <br>
      <i class="fas fa-mouse-pointer"></i><a href="www.attta.org.ar">ATTTA.ORG.AR</a>
      <hr>
      <h2>Federación Argentina LGBT</h2>
      <i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/FALGBT"> FALGBT</a>
      <br>
      <i class="fas fa-phone"></i>011 4342-1689
      <br><i class="fas fa-mouse-pointer"></i><a href="https://www.falgbt.org">falgbt.org</a>
      <hr>
      <h2>CASA TRANS (CABA)</h2>
      <i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/CasaTransCABA"> CasaTransCABA</a>
      <br>
      <i class="fas fa-phone"></i>011 5032-6335
      <hr>

      <h2>Bachillerato Mocha Celis</h2>
      <i class="fab fa-facebook-square"></i><a href="https://www.facebook.com/mochacelis"> mochacelis</a>
      <br>
      <i class="fas fa-phone"></i>011 6353-2927
      <br>
      <i class="fas fa-mouse-pointer"></i> <a href="www.bachilleratomochacelis.edu.ar">bachilleratomochacelis.edu.ar</a>
    </div>
    <br><br><br><br>
  </div>



  <div class="footer">
    <p>Creado por ML para ComunidadIT. 2019.</p>
  </div>
  <!--script-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="../js/guia.js">
  </script>
</body>

</html>