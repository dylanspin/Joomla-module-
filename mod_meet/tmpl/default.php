
<?php

  $helper = new Modmeet();
  $doc = JFactory::getDocument();
  $modulePath = JURI::base() . 'modules/mod_meet/';
  $doc->addStyleSheet($modulePath.'css/style.css');

  $moduleHoog = $params->get('hoogte_module');
  $moduleBreed = $params->get('breedte_module');
  $moduleKleur = $params->get('kleur_module');
  $modulePositie = $params->get('positie');

  $teamBreed = $params->get('breedteTeam');
  $teamHoog = $params->get('hoogteTeam');
  $teamKleur = $params->get('borderColor');
  $teamSpacing = $params->get('spacing');

  $buttonRadius = $params->get('Borderradius');
  $buttonHoog = $params->get('hoogtebutton');
  $buttonBreed = $params->get('breedtebutton');
  $buttonKleur = $params->get('borderbutton');

  $css = "
  .team-module{
    height:".$moduleHoog."px;
    width:".$moduleBreed."px;
    }";

  $doc->addStyleDeclaration($css);//add de css aan style.css

 ?>

<div class="team-module">

</div>
