<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class UsersTableSeeder extends CsvSeeder
{
  public function __construct()
  {
    $this->table = 'users';
    $this->filename = base_path() . '/database/seeds/csvs/users.csv';
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
