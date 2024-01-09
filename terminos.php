<?php include './config.php' ?>
<!doctype html>
<html lang="<?=$userLanguage?>">
  <head>
    <?php include './google/header.php' ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$_ENV['WEB_NAME']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body class="bg-grey">
    <?php include './google/body.php' ?>
    <div id="main-header" class="container-fluid text-white">
        <?php include './menu.php' ?>
    </div>
    <div class="container">
        <div class="row py-4 mb-4">
            <div class="col">
                <?php if ($userLanguage == 'es') { ?>
                <h6>AVISO LEGAL  Museo del Prado</h6>

                <br>

                <h6>1. Información Legal</h6>
                <br>
                <p>Este sitio web, museodelpradoticket.com (en lo sucesivo la web o EL MUSEO DEL PRADO), pertenece y es operado por TICKETGO TOURISM MANAGEMENT S.L., con número de identificación fiscal (CIF) B13839097 y domicilio en Paseo de la ermita, 40, <strong>Madrid, España.</strong></p>
                <p>La sociedad consta inscrita en el Registro Mercantil de Madrid, Tomo 45274, Folio 40, hoja M 796433. Puedes ponerte en contacto con nosotros a través de la dirección de correo electrónico infomuseoprado@ticketgotourism.com.</p>

                <br>
                <br>

                <h6>2. Objeto del Sitio Web</h6>
                <br>
                <p>EL MUSEO DEL PRADO  tiene como objetivo proporcionar a los usuarios un servicio de reserva de entradas en el museo del prado de Madrid.</p>
                
                <br>

                <h6>3. Uso del Sitio Web</h6>
                <br>
                <p>El usuario asume la responsabilidad del uso de EL MUSEO DEL PRADO. El sitio web proporciona acceso a varios contenidos, texto incluyendo gráficos, fotografías y otros materiales ('Contenidos') pertenecientes a EL MUSEO DEL PRADO o terceros.</p>
                <p>El usuario se compromete a utilizar los Contenidos y Servicios ofrecidos a través del sitio web de manera adecuada y de acuerdo con la ley. Esto incluye, entre otros, no utilizarlos para:</p>
                <p>(i) Participar en actividades ilegales o contrarias a la buena fe y al orden público.</p>
                <p>(ii) Causar daños a los sistemas físicos y lógicos de EL MUSEO DEL PRADO, sus proveedores o terceros.</p>
                <p>(iii) Introducir o difundir virus informáticos u otros elementos que puedan causar daños similares.</p>
                <p>(iv) Intentar acceder, utilizar o manipular los datos de EL MUSEO DEL PRADO, sus proveedores u otros usuarios.</p>
                <p>(v) Reproducir, copiar, distribuir o modificar los Contenidos sin la autorización de EL MUSEO DEL PRADO</p>
                <p>(vi) Eliminar, ocultar o manipular los Contenidos sujetos a derechos de propiedad intelectual o industrial de EL MUSEO DEL PRADO o terceros, así como los dispositivos técnicos de protección o cualquier mecanismo de información incluido en los Contenidos. EL MUSEO DEL PRADO advierte que los materiales contenidos en este sitio web se proporcionan</p>
                <p>solo con finos informativos y pueden no ser suficientes para tomar decisiones o asumir posiciones en casos específicos. Los materiales pueden no reflejar la legislación o jurisprudencia más reciente sobre los temas tratados y están sujetos a modificaciones sin previo aviso.</p>
                <p>EL MUSEO DEL PRADO advierte que los materiales contenidos en este sitio web se proporcionan solo con finos informativos y pueden no ser suficientes para tomar decisiones o asumir posiciones en casos específicos. Los materiales pueden no reflejar la legislación o jurisprudencia más reciente sobre los temas tratados y están sujetos a modificaciones sin previo aviso.</p>
                <p>EL MUSEO DEL PRADO se reserva el derecho de investigar y denunciar cualquier conducta que viole la ley y cooperar con las autoridades en investigaciones relacionadas con dichas conductas.</p>

                <br>

                <h6>4. Propiedad Intelectual e Industrial</h6>
                <br>
                <p>Todos los derechos de propiedad intelectual de los Contenidos y el diseño gráfico del sitio web son propiedad exclusiva de EL MUSEO DEL PRADO o de terceros que han autorizado su uso. EL MUSEO DEL PRADO no otorga ninguna licencia o autorización para el uso de sus derechos de propiedad intelectual o industrial o cualquier otro derecho relacionado con el sitio web, los Servicios o los Contenidos.</p>
                <p>Se permite la reproducción y almacenamiento temporal de los Contenidos del sitio web solo en la medida necesaria para su visualización desde un dispositivo personal. La legitimidad de los derechos de propiedad intelectual o industrial de los Contenidos aportados por los usuarios es responsabilidad exclusiva de los mismos.</p>

                <br>

                <h6>5. Responsabilidad y Garantías</h6>
                <br>
                <p>EL MUSEO DEL PRADO declara que ha tomado medidas razonables para garantizar el funcionamiento adecuado del sitio web y la ausencia de virus u otros componentes dañinos. Sin embargo, no se hace responsable de:</p>
                <p>(i) La continuidad y disponibilidad de los Contenidos y Servicios.</p>
                <p>(ii) Errores en los Contenidos o la corrección de defectos.</p>
                <p>(iii) La presencia de virus o componentes dañinos.</p>
                <p>(iv) Los daños causados por personas que violen los sistemas de seguridad de EL MUSEO DEL PRADO.</p>
                <p>Las contribuciones en este sitio web se proporcionan solo con finos informativos y EL MUSEO DEL PRADO no garantiza la integridad, exactitud o actualización de los Contenidos.</p>
                <p>EL MUSEO DEL PRADO no asume responsabilidad por los enlaces a otros sitios web y no tiene control sobre ellos, por lo que el acceso a estos sitios es responsabilidad del usuario.</p>
                
                <br>

                <h6>6. Enlaces e Hiperenlaces</h6>
                <br>
                <p>Los enlaces disponibles en este sitio web tienen la única finalidad de proporcionar información adicional a los usuarios sobre la existencia de otras fuentes que puedan enriquecer los contenidos ofrecidos en este sitio web. EL MUSEO DEL PRADO no garantiza ni se hace responsable del funcionamiento o la accesibilidad de los sitios enlazados, ni sugiere, invita o recomienda visitarlos. Por lo tanto, EL MUSEO DEL PRADO no asume responsabilidad alguna por los resultados obtenidos al acceder a estos enlaces, ni por el establecimiento de hiperenlaces hacia este sitio por parte de terceros.</p>
                <p>EL MUSEO DEL PRADO no lleva a cabo una revisión periódica de los contenidos enlazados, y, en consecuencia, no asume ninguna responsabilidad por el contenido, la información o los servicios que puedan aparecer en estos sitios enlazados. Dichos enlaces se proporcionan únicamente con fines informativos y no implican relación alguna entre EL MUSEO DEL PRADO y las personas o entidades titulares de los contenidos enlazados o los sitios donde se encuentren. EL MUSEO DEL PRADO tampoco es responsable del funcionamiento de los sitios enlazados ni de los posibles daños derivados del acceso o uso de los mismos. Los enlaces a la web de EL MUSEO DEL PRADO deben cumplir con las siguientes condiciones:</p>
                <p>a. El establecimiento del enlace no implica la existencia de un acuerdo, contrato, patrocinio ni recomendación por parte de EL MUSEO DEL PRADO de la página que realiza el enlace.</p>
                <p>b. La página web que establece el hiperenlace no debe contener información con contenido ilícito, discriminatorio, contrario a los principios éticos comunes aceptados o que atente contra el orden público, ni debe contener contenido que infrinja los derechos de terceros.</p>
                <p>c. EL MUSEO DEL PRADO puede solicitar la eliminación de un enlace a su sitio web en cualquier momento, sin necesidad de alegar una razón específica. En tal caso, la página que ha establecido el enlace deberá eliminarlo de manera inmediata, tan pronto como reciba la notificación de EL MUSEO DEL PRADO.</p>
                <p>d. EL MUSEO DEL PRADO no se responsabiliza ni garantiza de ningún modo la calidad, exactitud, confiabilidad, corrección o moralidad de los contenidos o servicios que el establecimiento del hiperenlace pueda ofrecer. El bajo asume su exclusiva responsabilidad por las consecuencias, daños o acciones del usuario que puedan derivarse del acceso a la página web del hiperenlace.</p>

                <br>

                <h6>7. Duración y Modificaciones</h6>
                <br>
                <p>Este Aviso Legal y las Condiciones de Uso estarán en vigor indefinidamente y pueden ser modificados por EL MUSEO DEL PRADO sin previo aviso. Las condiciones vigentes se aplicarán cuando el usuario acceda al sitio web.</p>
                <p>El acceso y uso del sitio web implican la aceptación de este Aviso Legal y sus condiciones, así como cualquier modificación realizada en el futuro.</p>
                <?php }else { ?>
                <h6>Legal Notice Prado Museum</h6>

                <br>

                <h6>1. Legal information</h6>
                <br>
                <p>This website, museodelpraticket.com (hereinafter the web or the Prado Museum), belongs and operated by Tourism Management S.L., with Fiscal Identification Number (CIF) B13839097 and address in Paseo de la Ermita, 40, <strong> Madrid, Spain. </strong></p>
                <p>The company consists of the Mercantile Registry of Madrid, volume 45274, folio 40, sheet M 796433. You can contact us through the email address infomuseoprado@ticketgotourism.com.</p>

                <br>
                <br>

                <h6>2. Object of the website</h6>
                <br>
                <p>The Prado Museum aims to provide users with a ticket reserve service in the Prado Museum in Madrid.</p>
                
                <br>

                <h6>3. Use of the website</h6>
                <br>
                <p>The user assumes responsibility for the use of the Prado Museum. The website provides access to several content, text including graphics, photographs and other materials ('content') belonging to El Prado Museum or third parties.</p>
                <p>The user undertakes to use the contents and services offered through the website properly and in accordance with the law. This includes, among others, not to use them for:</p>
                <p>(i) Participate in illegal or contrary activities to good faith and public order.</p>
                <p>(ii) cause damage to the physical and logical systems of the Prado Museum, its suppliers or third parties.</p>
                <p>(iii) introduce or disseminate computer viruses or other elements that may cause similar damage.</p>
                <p>(iv) Try to access, use or manipulate the data of El Museo del Prado, its suppliers or other users.</p>
                <p>(v) Reproduce, copy, distribute or modify the contents without the authorization of The Prado Museum</p>
                <p>(VI) Eliminate, hide or manipulate the contents subject to intellectual or industrial property rights of the Prado Museum or third parties, as well as the technical protection devices or any information mechanism included in the contents. The Prado Museum warns that the materials contained on this website are provided</p>
                <p>only with fine informative and may not be enough to make decisions or assume positions in specific cases. Materials may not reflect the most recent legislation or jurisprudence on issues and are subject to modifications without prior notice.</p>
                <p>The Prado Museum warns that the materials contained on this website are provided only with fine informative and may not be enough to make decisions or assume positions in specific cases. Materials may not reflect the most recent legislation or jurisprudence on issues discussed and are subject to modifications without prior notice.</p>
                <p>The Prado Museum reserves the right to investigate and denounce any conduct that violates the law and cooperate with the authorities in investigations related to these behaviors.</p>

                <br>

                <h6>4. Intellectual and industrial property</h6>
                <br>
                <p>All intellectual property rights of the contents and the graphic design of the website are exclusive property of El Prado Museum or third parties that have authorized their use. The Prado Museum does not grant any license or authorization for the use of its intellectual or industrial property rights or any other rights related to the website, services or content.</p>
                <p>The reproduction and temporary storage of the contents of the website is allowed only to the extent necessary for visualization from a personal device. The legitimacy of intellectual or industrial property rights of the contents provided by users is their exclusive responsibility.</p>

                <br>

                <h6>5. Responsibility and guarantees</h6>
                <br>
                <p>The Prado Museum declares that it has taken reasonable measures to guarantee the proper functioning of the website and the absence of viruses or other harmful components. However, they are not responsible for:</p>
                <p>(i) The continuity and availability of the contents and services.</p>
                <p>(ii) Content errors or defect correction.</p>
                <p>(iii) the presence of harmful viruses or components.</p>
                <p>(iv) the damage caused by people who violate the security systems of the Prado Museum.</p>
                <p>Contributions on this website are provided only with fine informative ones and the Prado Museum does not guarantee the integrity, accuracy or update of the contents.</p>
                <p>The Prado Museum does not assume responsibility for links to other websites and has no control over them, so access to these sites is the user's responsibility.</p>
                
                <br>

                <h6>6. Enlaces e hiperenlaces</h6>
                <br>
                <p>The links available on this website have the sole purpose of providing additional information to users about the existence of other sources that can enrich the contents offered on this website. The Prado Museum does not guarantee or be responsible for the operation or accessibility of linked sites, nor suggests, invites or recommends visiting them. Therefore, the Prado Museum assumes no responsibility for the results obtained by accessing these links, or by the establishment of hyperlinks towards this site by third parties.</p>
                <p>The Prado Museum does not carry out a periodic review of the linked content, and, consequently, it does not assume any responsibility for the content, information or services that may appear in these linked sites. These links are provided solely for informative purposes and do not imply any relationship between the Prado Museum and the people or entities of the linked content or the sites where they are. The Prado Museum is not responsible for the operation of the linked sites or the possible damages derived from their access or use. The links to the website of The Prado Museum must meet the following conditions:</p>
                <p>a. The establishment of the link does not imply the existence of an agreement, contract, sponsorship or recommendation by the Prado Museum of the page that the link performs.</p>
                <p>b. The website that establishes the hyperlace should not contain information with illicit, discriminatory content, contrary to the common ethical principles accepted or that attempts against public order, nor must contain content that violates the rights of third parties.</p>
                <p>c. The Prado Museum can request the elimination of a link to its website at any time, without the need to claim a specific reason. In this case, the page that has established the link must eliminate it immediately, as soon as it receives the notification of the Prado Museum.</p>
                <p>d. The Prado Museum is not responsible or guaranteed in any way the quality, accuracy, reliability, correction or morality of the contents or services that the establishment of the hyperlace can offer. The bass assumes its exclusive responsibility for the consequences, damages or actions of the user that can be derived from access to the Hybernlace website.</p>

                <br>

                <h6>7. Duration and modifications</h6>
                <br>
                <p>This legal notice and conditions of use will be in force indefinitely and can be modified by the Prado Museum without prior notice. The current conditions will apply when the user access the website.</p>
                <p>The access and use of the website imply the acceptance of this legal notice and its conditions, as well as any modification made in the future.</p>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include './footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/86165e0bbf.js" crossorigin="anonymous"></script>
  </body>
</html>