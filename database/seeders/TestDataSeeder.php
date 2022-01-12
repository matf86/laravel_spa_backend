<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createTestUser();
        $this->createTestProducts();
        $this->createTestCompanies();
        $this->createTestCompanyUsers();
        $this->createTestVat();
        $this->createTestMeasureUnits();
    }

    protected function createTestUser() {
        DB::table('users')->insert([
            'name' => 'mateusz fludra',
            'email' => 'mat@test.pl',
            'password' => Hash::make('test1234'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    protected function createTestCompanies() {
        DB::table('companies')->insert([
            'name' => 'TESTOWA FRIRMA 1',
            'short_name' => 'TF-1',
            'nip' => 7772812111,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('companies')->insert([
            'name' => 'TESTOWA FRIRMA 2',
            'short_name' => 'TF-2',
            'nip' => 7772812112,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('companies')->insert([
            'name' => 'TESTOWA FRIRMA 3',
            'short_name' => 'TF-3',
            'nip' => 7772812113,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    protected function createTestCompanyUsers() {
        DB::table('company_users')->insert([
            'first_name' => 'TESTER',
            'last_name' => '01',
            'company_id' => 1,
            'email' => 'TESTER01@test.pl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('company_users')->insert([
            'first_name' => 'TESTER',
            'last_name' => '02',
            'company_id' => 1,
            'email' => 'TESTER02@test.pl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('company_users')->insert([
            'first_name' => 'TESTER',
            'last_name' => '03',
            'company_id' => 2,
            'email' => 'TESTER03@test.pl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('company_users')->insert([
            'first_name' => 'TESTER',
            'last_name' => '04',
            'company_id' => 3,
            'email' => 'TESTER04@test.pl',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    protected function createTestProducts() {
        DB::table('products')->insert([
            'name' => 'PRODUKT TESTOWY 1',
            'product_code' => 'PT-1',
            'price_netto' => 25000,
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name' => 'PRODUKT TESTOWY 2',
            'product_code' => 'PT-2',
            'price_netto' => 1250000,
            'unit_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name' => 'PRODUKT TESTOWY 3',
            'product_code' => 'PT-3',
            'price_netto' => 67000000,
            'unit_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name' => 'PRODUKT TESTOWY 4',
            'product_code' => 'PT-4',
            'price_netto' => 100000000,
            'unit_id' => 3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name' => 'PRODUKT TESTOWY 5',
            'product_code' => 'PT-5',
            'price_netto' => 5500000000,
            'unit_id' => 4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    protected function createTestVat() {
        DB::table('vat')->insert([
            'name' => '23%',
            'value' => 0.23,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('vat')->insert([
            'name' => '8%',
            'value' => 0.08,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('vat')->insert([
            'name' => '0%',
            'value' => 0.00,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    protected function createTestMeasureUnits() {
        DB::table('measure_units')->insert([
            'name' => 'opakowanie',
            'short_name' => 'op.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('measure_units')->insert([
            'name' => 'sztuki',
            'short_name' => 'szt.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('measure_units')->insert([
            'name' => 'palety',
            'short_name' => 'pal',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
