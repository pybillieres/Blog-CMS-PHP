<?php

namespace Pierre\P4\Framework;


class Configuration {

  private static $parameters;//parametre qui stocke données de configuration

  // Renvoie la valeur d'un paramètre de configuration
  public static function get($name, $defaultValue = null) {
    if (isset(self::getParameters()[$name])) {
      $value = self::getParameters()[$name];
    }
    else {
      $value = $defaultValue;
    }
    return $value;
  }

  // Renvoie le tableau des paramètres en le chargeant au besoin
 /* private static function getParametres() {
    if (self::$parametres == null) {
      $cheminFichier = "Configuration/prod.ini";
      if (!file_exists($cheminFichier)) {
        $cheminFichier = "Configuration/dev.ini";
      }
      if (!file_exists($cheminFichier)) {
        throw new \Exception("Aucun fichier de configuration trouvé");
      }
      else {
        self::$parametres = parse_ini_file($cheminFichier);
      }
    }
    return self::$parametres;
  }*/
  private static function getParameters()
  {
    $filePath = "configuration/dev.ini";
    self::$parameters = parse_ini_file($filePath);
    return self::$parameters;
  }
}