<?php

  // This file defines helper functions

  /**
   * Displays an HTML select list for a given array of data.
   *
   * @param array $array Array of data to display
   * @param string $name Name of the HTML select element
   * @param mixed $defaultValue The default selected value of the list
   * @return void Echoes HTML for the select list
   */
  function displaySelectList(array $array, string $name = "", mixed $defaultValue = null): void {
    
    echo <<<HTML
    <select name="{$name}">
    HTML;

    foreach ($array as $key => $value) {
      
      // Check if default option in list
      $selected = $key === $defaultValue ? "selected" : "";
      
      echo <<<HTML
      <option value="{$key}" {$selected}>{$value}</option>
      HTML;
    }

    echo <<<HTML
    </select>
    HTML;
    
  }


  /**
   * Displays an HTML radio button list for a given array of data.
   *
   * @param array $array Array of data to display
   * @param string $name Name of the HTML input element
   * @param mixed $defaultValue The default checked value of the list
   * @return void Echoes HTML for the radio button list
   */
  function displayRadioButtonList(array $array, string $name = "", mixed $defaultValue = null): void {

    foreach ($array as $key => $value) {
      
      // Check if default option in list
      $checked = $key === $defaultValue ? "checked" : "";
      
      echo <<<HTML
      <label>
        <input type="radio" name="{$name}" value="{$key}" {$checked}>
        {$value}
      </label>
      HTML;
    }
    
  }


  /**
   * Displays an HTML checkbox list for a given array of data.
   *
   * @param array $array Array of data to display
   * @param string $name Name of the HTML input element
   * @param mixed $defaultValue The default checked value of the list
   * @return void Echoes HTML for the checkbox list
   */
  function displayCheckboxList(array $array, string $name = "", mixed $defaultValue = null): void {

    foreach ($array as $key => $value) {
      
      // Check if default option in list
      $checked = $key === $defaultValue ? "checked" : "";
      
      echo <<<HTML
      <label>
        <input type="checkbox" name="{$name}" value="{$key}" {$checked}>
        {$value}
      </label>
      HTML;
    }
    
  }



  // $countries = [
  //   "au" => "Australia",
  //   "ug" => "Uganda",
  //   "nz" => "new Zealand",
  //   "es" => "Spain",
  //   // ...
  // ];

  // $something = "Bull ants";

  // displaySelectList($countries, "country", "ug");
