<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class RolesTableSeeder extends CsvSeeder
{
  public function __construct()
  {
    $this->table = 'roles';
    $this->filename = base_path() . '/database/seeds/csvs/roles.csv';
  }

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // Recommended when importing larger CSVs
    DB::disableQueryLog();

    parent::run();
  }
}
