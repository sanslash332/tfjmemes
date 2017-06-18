<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class RoleUserTableSeeder extends CsvSeeder
{
  public function __construct()
  {
    $this->table = 'role_user';
    $this->filename = base_path() . '/database/seeds/csvs/roleuser.csv';
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

